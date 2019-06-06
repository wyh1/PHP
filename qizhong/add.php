<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注册结果</title>
    <link href="css/com.wyh.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include_once("html/header.html");
$dbc=mysqli_connect('localhost','root','root','php') or die('连接数据库失败!');
$name=$_POST['name'];
//判断用户是否存在
$username=trim($_POST['username']);
$sql1="select * from user where username='$username'";
$result1=mysqli_query($dbc,$sql1);
$info=mysqli_fetch_array($result1);
if($info!=false){
    echo "<div>
    		<h1>注册失败！,该用户已被注册,点击<a href='useradd.php'>这里</a>返回用户注册页面。</h1>
    	</div>";
    include_once("html/footer.html");
    mysqli_close($dbc);
    exit;
}
$password=$_POST['password'];
$gender=$_POST['gender'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$adress=$_POST['adress'];
$hobbys=$_POST['hobby'];
$age=$_POST['age'];
$photo="1.jpg";
$hobby="";
for($i=0,$max=count($hobbys);$i<$max;$i++){
    $hobby.=$hobbys[$i];
}
date_default_timezone_set('PRC');
$registertime=date('Y-m-d h:i:s', time());
//图片上传
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 204800)   // 小于 200 kb
    && in_array($extension, $allowedExts))
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "<div>
    		<h1>注册失败！,错误!,点击<a href='useradd.php'>这里</a>返回用户注册页面。</h1>
    	    </div>";
        exit;
    }
    else
    {
        if (file_exists("photo/" . $_FILES["file"]["name"]))
        {
            echo "<div>
    		<h1>注册失败！,文件已经存在!,点击<a href='useradd.php'>这里</a>返回用户注册页面。</h1>
    	    </div>";
            exit;
        }
        else
        {
            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
            $photo=md5($_FILES["file"]["name"].$registertime).".$extension";
            move_uploaded_file($_FILES["file"]["tmp_name"], "photo/" . $photo);
        }
    }
}
else
{
    echo "<div>
    		<h1>注册失败！,非法的文件格式,点击<a href='useradd.php'>这里</a>返回用户注册页面。</h1>
    	</div>";
    exit;
}
$sql="INSERT INTO user(id ,username ,password ,name ,gender ,age,hobby ,tel ,email ,adress ,photo ,registertime )".
" VALUES (NULL , '$username','$password','$name' ,'$gender' ,'$age' ,'$hobby' ,' $tel','$email', '$adress', '$photo' , '$registertime')";
$result=mysqli_query($dbc,$sql);
if ($result) {
        echo "<div>
    		<h1>注册成功！,欢迎你:$username,点击<a href='userlogin.php'>这里</a>进入登录页面。</h1>
    	    </div>";
} else {
    echo "<div>
    		<h1>注册失败！,请确认用户信息是否正确,点击<a href='useradd.php'>这里</a>返回用户注册页面。</h1>
    	</div>";
}
mysqli_close($dbc);
include_once("html/footer.html");
?>
</body>
</html>