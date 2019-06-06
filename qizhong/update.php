<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="css/com.wyh.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include_once("html/header.html");

//--连接数据库参数配置-----------
$dblocalhost="localhost";
$dbusername="root";
$dbpassword="root";
$dbname="php";
$dbtablename="user";
//-------------------------------

//--获取数据库连接对象---
$dbc=mysqli_connect($dblocalhost,$dbusername,$dbpassword,$dbname) or die('连接数据库失败!');
//-----------------------

//--获取请求参数---------
$id=$_POST["id"];
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$adress=$_POST['adress'];
$tel=$_POST['tel'];
$hobbys=$_POST['hobby'];
$hobby="";
for($i=0,$max=count($hobbys);$i<$max;$i++){
    $hobby.=$hobbys[$i];
}
//-----------------------

//--执行sql语句----------
//$sql="INSERT INTO $dbtablename(username ,password ,sex ,age,email ,adress ,tel ,habby ,photo)".
//    " VALUES ('$username','$password','$sex' ,'$age' ,'$email', '$adress', '$tel','$habby','$photo')";
$sql="UPDATE  $dbtablename SET name='$name',username='$username',password='$password',gender='$gender',email='$email' ,age =  '$age',
tel='$tel',hobby='$hobby' WHERE  id ='$id' ";
$result=mysqli_query($dbc,$sql);
//------------------------

//--展示结果--------------
if ($result)
{
    echo "<h1>修改成功,恭喜你！点击<a href='userlist.php'>这里</a>返回用户信息页面。</h1>";
} else {
    echo "<h1>修改失败！,点击<a href='userupdate.php?id=$'>这里</a>返回用户修改页面。</h1>" . $dbc->error;;
}
//------------------------

//--关闭数据库连接--------
mysqli_close($dbc);
//-------------------------
include_once("html/footer.html");
?>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: 11030
 * Date: 2019/5/23
 * Time: 15:17
 */