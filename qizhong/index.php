<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link href="css/com.wyh.css" rel="stylesheet">
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script>
        function collection(gid)
        {
            if (window.XMLHttpRequest)
            {
                // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
                xmlhttp=new XMLHttpRequest();
            }
            else
            {
                // IE6, IE5 浏览器执行代码
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                    alert(xmlhttp.responseText);
                    alertContents(xmlhttp.responseText)
                }
            }
            xmlhttp.open("GET","collection.php?gid="+gid,true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
<?php
include_once "html/header.html";
$pdo = new PDO("mysql:host=localhost;dbname=php", "root", "root");
$sql = "select * from goods";
$data = $pdo->query($sql)->fetchAll();
?>
<div class="container">
    <div class="row">
        <?php foreach ($data as $row): ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="image/<?php echo $row["gpicture"] ; ?>" alt="...">
                <div class="caption">
                    <h3><?php echo $row["gname"] ; ?></h3>
                    <p><?php echo $row["gmeassage"] ; ?></p>
                    <h4 class="text-danger text-right">￥<?php echo $row["gprice"] ; ?></h4>
                    <p class="text-right">
                        <a href="javascript:collection(<?php echo $row["gid"] ; ?>)" class="btn btn-danger" role="button" style="float: left">加入购物车</a>
                        <a href="#" class="btn btn-primary" role="button">查看详情</a>
                    </p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
<!--        <div class="col-sm-6 col-md-4">-->
<!--            <div class="thumbnail">-->
<!--                <img src="image/nvxie.jpg" alt="...">-->
<!--                <div class="caption">-->
<!--                    <h3>Thumbnail label</h3>-->
<!--                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.Donec id elit non-->
<!--                        miporta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
<!--                    <h4 class="text-danger text-right">￥998</h4>-->
<!--                    <p class="text-right">-->
<!--                        <a href="#" class="btn btn-danger" role="button" style="float: left">加入收藏</a>-->
<!--                        <a href="#" class="btn btn-primary" role="button">查看详情</a>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>
<?php
include_once "html/footer.html";
?>
</body>
</html>