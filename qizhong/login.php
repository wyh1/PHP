<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录结果</title>
    <link href="css/com.wyh.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
    include_once("html/header.html");
    $dbc=mysqli_connect('localhost','root','root','php') or die('连接数据库失败!');
    $username=trim($_POST['username']) ;
    $password=$_POST['password'];
    date_default_timezone_set('PRC');
    $lastlogintime=date('Y-m-d h:i:s', time());
    $sql="select * from user where username='$username' and password='$password'";
    $result=mysqli_query($dbc,$sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
        {
            $lasttime=$row['lastlogintime'];
            $id=$row["id"];
            echo "<div>
    		<h1>登录成功！,欢迎你:$username,点击<a href='userlist.php'>这里</a>进入用户列表。</h1>
    		<h1>点击<a href='index.php'>这里</a>进入首页。</h1>
    		<h4>你上次登录时间为$lasttime</h4>
    	    </div>";
            $sql="UPDATE user SET lastlogintime = '$lastlogintime' WHERE username ='$username' ";
            mysqli_query($dbc,$sql);
            setcookie("user", $username, time()+3600);
            setcookie("uid", $id, time()+3600);
        }
    } else {
        echo "<div>
    		<h1>登录失败！,请确认用户名密码是否正确,点击<a href='userlogin.php'>这里</a>返回用户登陆页面。</h1>
    	</div>";
    }
    mysqli_close($dbc);
    include_once("html/footer.html");
?>
</body>
</html>