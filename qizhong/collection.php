<?php
$gid = isset($_GET["gid"]) ? intval($_GET["gid"]) : '';
if(!isset($_COOKIE["user"])) {
    echo '错误:用户未登录';
    exit;
}
$username = $_COOKIE["user"];
$uid =$_COOKIE["uid"];
$dbc=mysqli_connect('localhost','root','root','php') or die('连接数据库失败!');
$sql="select * from collection where uid='$uid' AND gid='$gid'";
$result=mysqli_query($dbc,$sql);
if ($result->num_rows > 0) {
    echo "加入购物车失败！该商品已存在";
    mysqli_close($dbc);
    exit;
}
date_default_timezone_set('PRC');
$time=date('Y-m-d h:i:s', time());
$sql="INSERT INTO collection(uid ,gid,date)VALUES ('$uid','$gid','$time')";
$result=mysqli_query($dbc,$sql);
if ($result) {
    echo "加入购物车成功!";
} else {
    echo "加入购物车失败!";
}
mysqli_close($dbc);
?>