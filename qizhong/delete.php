<?php
$id=$_GET["id"];
$pdo = new PDO("mysql:host=localhost;dbname=php", "root", "root");
$sql = "delete from user where id=$id";
$data = $pdo->query($sql)->fetchAll();
echo "删除用户成功!";
?>