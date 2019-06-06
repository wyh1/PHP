<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改</title>
    <link href="css/com.wyh.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        .main{
            width: 100%;
            background: url(images/zhuce_bg.jpg) no-repeat center;
            background-size: 100% 720px;
            overflow: hidden;
        }
        .form{
            width: 886px;
            height: 630px;
            background-color: #fff;
            margin:24px auto;
            border:8px solid #eeeeee;
            box-sizing: border-box;
        }
        .form_left{
            width:256px;
            float: left;
            padding-top:20px;
            padding-left: 20px;
            box-sizing: border-box;
        }
        .form_center{
            width:358px;
            float: left;
            padding-top:10px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .form_right{
            width:256px;
            float: right;
        }
        .form_left > p:first-child{
            font-size: 20px;
            color:#ffcd26;

        }
        .form_left > p:last-child{
            font-size: 20px;
            color: #a6a6a6;
        }
        .td_left{
            width: 100px;
            text-align: right;
        }
        .form_center table tr{
            height: 50px;
        }
        .td_right{
            width: 258px;
            float: left;
        }
        .text{
            padding-top: 7px;
            padding-left: 36px;
        }
        .check{
            padding-left: 36px;
            padding-top: 13px;
        }
        .form_right >p{
            float: right;
            font-size: 14px;
            padding: 20px 12px 0 0;
            box-sizing: border-box;
        }
        .form_right >p >a{
            color: #fc8989;
        }
    </style>
</head>
<body>
<?php
include_once ("html/header.html");
?>
<?php
$id=$_GET['id'];
$pdo = new PDO("mysql:host=localhost;dbname=php", "root", "root");
$sql = "select * from user where id=$id";
$data = $pdo->query($sql)->fetchAll();
//print_r($data);
//echo $data[0]['name'];
$row=$data[0];
//echo $row['username'];
?>
<div class="main">
    <div class="form">
        <div class="form_left">
            <p>用户信息修改</p>
            <p>USER UPDATE</p>
        </div>
        <div class="form_center">
            <form action="update.php" method="post" id="registerForm" enctype="multipart/form-data">
                <table style="margin-top: 25px;">
                    <tr>
                        <td class="td_left">

                        </td>
                        <td class="td_right">
                            <div class="input-group has-warning has-feedback">
                                <span class="input-group-addon" id="basic-addon1">用户id</span>
                                <input type="text" class="form-control" name="id" value="<?php echo $id ?>" aria-describedby="basic-addon1" readonly>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label for="name">姓名：</label>
                        </td>
                        <td class="td_right text">
                            <div class="form-group" id="nameClass">
                                <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name'] ?>" aria-describedby="inputSuccess2Status">
                                <span class="glyphicon glyphicon-ok form-control-feedback" id="namemsg" aria-hidden="true"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label for="username">用户名：</label>
                        </td>
                        <td class="td_right text">
                            <div class="form-group "id="usernameClass" >
                                <input type="text" class="form-control" id="username" name="username" value="<?php echo $row['username'] ?>" aria-describedby="inputSuccess2Status">
                                <span class="glyphicon glyphicon-remove form-control-feedback" id="usernamemsg" aria-hidden="true"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label for="password">密码：</label>
                        </td>
                        <td class="td_right text">
                            <div class="form-group "id="passwordClass" >
                                <input type="text" class="form-control" id="password"  name="password" value="<?php echo $row['password'] ?>" aria-describedby="inputSuccess2Status">
                                <span class="glyphicon glyphicon-remove form-control-feedback" id="passwordmsg" aria-hidden="true"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label for="age">年龄：</label>
                        </td>
                        <td class="td_right text">
                            <div class="form-group "id="ageClass" >
                                <input type="text" class="form-control" id="age" name="age" value="<?php echo $row["age"]; ?>" aria-describedby="inputSuccess2Status">
                                <span class="glyphicon glyphicon-remove form-control-feedback" id="agemsg" aria-hidden="true"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label>性别：</label>
                        </td>
                        <td class="td_right check">
                            <?php
                            if($row['gender']=="男"){
                                echo "
                                     <input type=\"radio\" name=\"gender\" value=\"男\" checked=\"checked\"/>男
                                     <input type=\"radio\" name=\"gender\" value=\"女\"/>女";
                            }else{
                                echo " <input type=\"radio\" name=\"gender\" value=\"男\"/>男
                            <input type=\"radio\" name=\"gender\" value=\"女\" checked=\"checked\"/>女";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label for="inlineCheckbox1">爱好：</label>
                        </td>
                        <td class="td_right check">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="hobby[]" id="inlineCheckbox1" value="唱" checked> 唱
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="hobby[]" id="inlineCheckbox2" value="跳"> 跳
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="hobby[]" id="inlineCheckbox3" value="rap"> rap
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="hobby[]" id="inlineCheckbox3" value="打篮球"> 打篮球
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label for="address">籍贯：</label>
                        </td>
                        <td class="td_right text">
                            <select name="adress" class="form-control" id="address">
                                <?php
                                    if($row['adress']=="陕西"){
                                        echo "<option value=\"陕西\" selected>陕西</option>
                                                <option value=\"北京\">北京</option>
                                                   <option value=\"上海\">上海</option>";
                                      }else if($row['adress']=="北京"){
                                        echo "<option value=\"陕西\" >陕西</option>
                                                <option value=\"北京\" selected>北京</option>
                                                  <option value=\"上海\">上海</option>";
                                    }else if($row['adress']=="上海"){
                                        echo "<option value=\"陕西\" >陕西</option>
                                                 <option value=\"北京\">北京</option>
                                                  <option value=\"上海\"selected>上海</option>";
                                    }else{
                                        echo "
                                            <option value=\"--请选择--\" >陕西</option>
                                            <option value=\"陕西\" >陕西</option>
                                            <option value=\"北京\">北京</option>
                                            <option value=\"上海\">上海</option>";
                                    }
                                ?>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label for="tel">电话：</label>
                        </td>
                        <td class="td_right text">
                            <div class="form-group "id="telClass" >
                                <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $row["tel"]; ?>"/>
                                <span class="glyphicon glyphicon-remove form-control-feedback" id="telmsg" aria-hidden="true"></span>
                            </div>
                        </td>
                    </tr>
<!--                    <tr>-->
<!--                        <td class="td_left">-->
<!--                            <label for="photoFile">上传头像：</label>-->
<!--                        </td>-->
<!--                        <td class="td_right check">-->
<!--                            <input type="file" id="photoFile" name="file">-->
<!--                        </td>-->
<!--                    </tr>-->
                    <tr>
                        <td class="td_left">
                            <label for="email">Email：</label>
                        </td>
                        <td class="td_right text">
                            <div class="form-group "id="emailClass" >
                                <input type="email" class="form-control" id="email" name="email"value="<?php echo $row["email"]; ?>"/>
                                <span class="glyphicon glyphicon-remove form-control-feedback" id="emailmsg" aria-hidden="true"></span>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                        </td>
                        <td class="td_right">
                            <input id="sub" class="btn btn-primary" type="submit" value="修改" />
                            <input class="btn btn-default" type="reset" value="重置" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="form_right">
            <p>
                不修改了？
                <a href="userlist.php">立即返回</a>
            </p>
        </div>
    </div>
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
 * Date: 2019/5/23
 * Time: 14:59
 */