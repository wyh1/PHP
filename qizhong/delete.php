<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$id=$_GET["id"];
$pdo = new PDO("mysql:host=localhost;dbname=php", "root", "root");
$sql = "delete from user where id=$id";
$data = $pdo->query($sql)->fetchAll();
header("Location: userlist.php");
exit;
?>
</body>
</html>