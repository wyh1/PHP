<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>用户注册</title>
    <link href="css/com.wyh.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/checkform.js" type="text/javascript"></script>
    <style type="text/css">
        .main{
            width: 100%;
            background: url(images/zhuce_bg.jpg) no-repeat center;
            background-size: 100% 780px;
            overflow: hidden;
        }
        .form{
            width: 886px;
            height: 700px;
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
<div class="main">
    <div class="form">
        <div class="form_left">
            <p>新用户注册</p>
            <p>USER REGISTER</p>
        </div>
        <div class="form_center">
            <form action="add.php" method="post" id="registerForm" enctype="multipart/form-data">
                <table style="margin-top: 25px;">
                    <tr>
                        <td class="td_left">
                            <label for="name">姓名：</label>
                        </td>
                        <td class="td_right text">
<!--                            <input type="text" class="form-control" id="name" name="name" placeholder="请输入姓名" >-->
                            <div class="form-group" id="nameClass">
                                <input type="text" class="form-control" name="name" id="name" placeholder="请输入中文名" aria-describedby="inputSuccess2Status">
                                <span class="glyphicon glyphicon-ok form-control-feedback" id="namemsg" aria-hidden="true"></span>
<!--                                <span id="inputSuccess2Status" class="sr-only">(success)</span>-->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label for="username">用户名：</label>
                        </td>
                        <td class="td_right text">
                            <div class="form-group " id="usernameClass" >
                            <input type="text" class="form-control" id="username" name="username" placeholder="请输入用户名" aria-describedby="inputSuccess2Status">
                            <span class="glyphicon glyphicon-remove form-control-feedback" id="usernamemsg" aria-hidden="true"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label for="password">密码：</label>
                        </td>
                        <td class="td_right text">
                            <div class="form-group " id="passwordClass" >
                            <input type="password" class="form-control" id="password"  name="password" placeholder="请输入密码" aria-describedby="inputSuccess2Status">
                                <span class="glyphicon glyphicon-remove form-control-feedback" id="passwordmsg" aria-hidden="true"></span>
<!--                                <span id="inputError2Status" class="sr-only">(error)</span>-->
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label for="repassword">确认密码：</label>
                        </td>
                        <td class="td_right text">
                            <div class="form-group " id="repasswordClass" >
                                <input type="password" class="form-control" id="repassword" name="repassword" placeholder="请确认密码" aria-describedby="inputSuccess2Status">
                                <span class="glyphicon glyphicon-remove form-control-feedback" id="repasswordmsg" aria-hidden="true"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label for="age">年龄：</label>
                        </td>
                        <td class="td_right text">
                            <div class="form-group " id="ageClass" >
                                <input type="text" class="form-control" id="age" name="age"  placeholder="请输入年龄" aria-describedby="inputSuccess2Status">
                                <span class="glyphicon glyphicon-remove form-control-feedback" id="agemsg" aria-hidden="true"></span>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label>性别：</label>
                        </td>
                        <td class="td_right check">
                            <input type="radio" name="gender" value="男" checked="checked"/>男
                            <input type="radio" name="gender" value="女"/>女
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label for="inlineCheckbox1">爱好：</label>
                        </td>
                        <td class="td_right check">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="hobby[]" id="inlineCheckbox1" value="唱"> 唱
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
                                <option value="陕西">陕西</option>
                                <option value="北京">北京</option>
                                <option value="上海">上海</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label for="tel">电话：</label>
                        </td>
                        <td class="td_right text">
                            <div class="form-group " id="telClass" >
                                <input type="text" class="form-control" id="tel" name="tel" placeholder="请输入电话号码"/>
                                <span class="glyphicon glyphicon-remove form-control-feedback" id="telmsg" aria-hidden="true"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label for="photoFile">上传头像：</label>
                        </td>
                        <td class="td_right check">
                            <input type="file" id="photoFile" name="file">
                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">
                            <label for="email">Email：</label>
                        </td>
                        <td class="td_right text">
                            <div class="form-group " id="emailClass" >
                                <input type="email" class="form-control" id="email" name="email" placeholder="请输入邮箱地址"/>
                                <span class="glyphicon glyphicon-remove form-control-feedback" id="emailmsg" aria-hidden="true"></span>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td class="td_left">

                        </td>
                        <td class="td_right">
                            <input id="sub" class="btn btn-primary" type="submit" value="提交" />
                            <input class="btn btn-default" type="reset" value="重置" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="form_right">
            <p>
                已有账号？
                <a href="userlogin.php">立即登录</a>
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
 * Date: 2019/4/26
 * Time: 17:26
 */