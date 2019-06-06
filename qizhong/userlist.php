<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>用户信息管理系统</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/com.wyh.css" rel="stylesheet">
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        td, th {
            text-align: center;
        }
        .imgphoto{
            height: 50px;
            width: 50px;
        }
    </style>
    <script>
        function deleteUser(id){
            //用户安全提示
            if(confirm("您确定要删除吗？")){
                location.href="php/delete.php?id="+id;
            }
        }
    </script>
</head>
<body>
<?php
 include_once ("html/header.html");
$pdo = new PDO("mysql:host=localhost;dbname=php", "root", "root");
$sql = "select * from user where 1 = 1 ";
$name="";$address="";$email="";
if(isset($_GET["name"])&&$_GET["name"]!=""){
    $name=$_GET["name"];
    $sql.=" and name like '%$name%' ";
}
if(isset($_GET["address"])&&$_GET["address"]!=""){
    $address=$_GET["address"];
    $sql.=" and adress like '%$address%' ";
}
if(isset($_GET["email"])&&$_GET["email"]!=""){
    $email=$_GET["email"];
    $sql.=" and email like '%$email%' ";
}
//echo $sql;
$data = $pdo->query($sql)->fetchAll();
$num = 5;
$count = count($data);
$w = ceil($count / $num);
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $num;
$sql .= " limit $offset,{$num}";
$data = $pdo->query($sql)->fetchAll();
$p = ($page == 1) ? 0 : ($page - 1);
$n = ($page == $w) ? 0 : ($page + 1);
?>
<div class="container">
    <h3 style="text-align: center">用户信息列表</h3>
    <div style="float: left;">

        <form class="form-inline" action="#" method="get">

            <div class="input-group has-success">
                <span class="input-group-addon" id="basic-addon1">姓名</span>
                <input type="text" name="name" value="<?php echo $name ?>"  class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group has-success">
                <span class="input-group-addon" id="basic-addon1">籍贯</span>
                <input type="text" name="address" value="<?php echo $address ?>" class="form-control" placeholder="Address" aria-describedby="basic-addon1">
            </div>

            <div class="input-group has-success">
                <span class="input-group-addon" id="basic-addon1">邮箱</span>
                <input type="text"  name="email" value="<?php echo $email ?>"  class="form-control" placeholder="Email" aria-describedby="basic-addon1">
            </div>

            <button type="submit" class="btn btn-success">查询</button>
        </form>

    </div>

    <div style="float: right;margin: 5px;">

        <a class="btn btn-primary" href="useradd.php">添加联系人</a>
        <a class="btn btn-primary" href="javascript:void(0);" id="delSelected">删除选中</a>

    </div>
    <table border="1" class="table table-bordered table-hover">
        <tr class="success">
            <th>编号</th>
            <th>姓名</th>
            <th>头像</th>
            <th>用户名</th>
            <th>密码</th>
            <th>性别</th>
            <th>年龄</th>
            <th>爱好</th>
            <th>电话</th>
            <th>邮箱</th>
            <th>籍贯</th>
            <th>注册时间</th>
            <th>最后登录时间</th>
            <th>操作</th>
        </tr>
        <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo $row["id"] ; ?></td>
            <td><?php echo $row["name"] ; ?></td>
            <td><img src="photo/<?php echo $row["photo"]?>" class="imgphoto"/></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row["password"]; ?></td>
            <td><?php echo $row["gender"]; ?></td>
            <td><?php echo $row["age"]; ?></td>
            <td><?php echo $row["hobby"]; ?></td>
            <td><?php echo $row["tel"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["adress"]; ?></td>
            <td><?php echo $row["registertime"]; ?></td>
            <td><?php echo $row["lastlogintime"]; ?></td>
            <td>
                <a class="btn btn-default btn-sm" href="userupdate.php?id=<?php echo $row["id"] ?>">修改</a>&nbsp;
                <a class="btn btn-default btn-sm" href="javascript:deleteUser(<?php echo $row["id"] ?>)">删除</a>
            </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <?php
            echo "<li><a href='userlist.php?page=1&name=$name&address=$address&email=$email'>首页</a></li>";
            if ($p==0){
                echo " <li class=\"disabled\"><a href='userlist.php?page=1&name=$name&address=$address&email=$email' aria-label=\"Previous\">  <span aria-hidden=\"true\">&laquo;</span>
                  </a>
             </li>";
            }else{
                echo  " <li ><a href='userlist.php?page={$p}&name=$name&address=$address&email=$email' aria-label=\"Previous\">  <span aria-hidden=\"true\">&laquo;</span>
                  </a>
             </li>";
            }
            ?>
            <?php
            for($i=1;$i<=$w;$i++){
                if($i==$page){
                    echo "<li class=\"active\"><a href='userlist.php?page={$i}&name=$name&address=$address&email=$email'>$i</a></li>";
                }else{
                    echo "<li><a href='userlist.php?page={$i}&name=$name&address=$address&email=$email'>$i</a></li>";
                }
            }
            ?>
            <?php
            if ($p==$w-1){
                echo " <li class=\"disabled\"><a href='userlist.php?page={$w}&name=$name&address=$address&email=$email' aria-label=\"Previous\">  <span aria-hidden=\"true\">&raquo;</span>
                  </a>
             </li>";
            }else{
                echo  " <li ><a href='userlist.php?page={$n}&name=$name&address=$address&email=$email' aria-label=\"Previous\">  <span aria-hidden=\"true\">&raquo;</span>
                  </a>
             </li>";
            }
           echo "<li><a href='userlist.php?page=$w&name=$name&address=$address&email=$email'>尾页</a></li>";
            ?>
        </ul>
    </nav>
</div>
<?php
include_once ("html/footer.html");
?>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: 11030
 * Date: 2019/4/26
 * Time: 13:37
 */