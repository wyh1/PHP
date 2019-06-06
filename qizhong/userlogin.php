<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登录</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/com.wyh.css" rel="stylesheet">
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        #login_wrap {
            width:100%;
            min-width: 1300px;
            overflow: hidden;
            position: relative;
        }
        .login-box {
            width: 360px;
            height: 450px;
            position: absolute;
            top: 50px;
            right:170px;
            background: #fff;
        }
        .title {
            height: 80px;
            line-height: 80px;
            background: #ffc900;
            font-size: 22px;
            padding:0 60px;
        }
        .login_inner {
            overflow: hidden;
            padding: 10px 50px;
        }
        .alert {
            margin: 0 auto;
            padding: 6px 10px;
            border: 1px solid transparent;
            text-align: left;
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
            margin-bottom: 17px;
            font-size: 12px;
        }
        .verify input {
            width: 95px;
            margin-right: 20px;
            float: left;
            margin-bottom: 0;
        }
        .submit_btn  span {
            line-height: 35px;
        }
        .reg {
            border-top: 1px solid #eeeeee;
            margin-top: 15px;
            width: 100%;
            height: 40px;
            line-height: 40px;
            background: #f1f1f1;
            text-align: center;
            font-size: 16px;
        }
        .reg a {
            color: #fc7f7f;
        }
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        .outer{
            position: relative;
            margin:20px auto;
            width: 260px;
            height: 30px;
            line-height: 28px;
            border:1px solid #ccc;
            background: #ccc9c9;
        }
        .outer span,.filter-box,.inner{
            position: absolute;
            top: 0;
            left: 0;
        }
        .outer span{
            display: block;
            padding:0  0 0 36px;
            width: 100%;
            height: 100%;
            color: #fff;
            text-align: center;
        }
        .filter-box{
            width: 0;
            height: 100%;
            background: green;
            z-index: 9;
        }
        .outer.act span{
            padding:0 36px 0 0;
        }
        .inner{
            width: 36px;
            height: 28px;
            text-align: center;
            background: #fff;
            cursor: pointer;
            font-family: "宋体";
            z-index: 10;
            font-weight: bold;
            color: #929292;
        }
        .outer.act .inner{
            color: green;
        }
        .outer.act span{
            z-index: 99;
        }
    </style>
    <script>
        $(function(){
            var flag=false;
            $(".inner").mousedown(function(e){
                var el = $(".inner"),os = el.offset(),dx,$span=$(".outer>span"),$filter=$(".filter-box"),_differ=$(".outer").width()-el.width();
                $(document).mousemove(function(e){
                    dx = e.pageX - os.left;
                    if(dx<0){
                        dx=0;
                    }else if(dx>_differ){
                        dx=_differ;
                    }
                    $filter.css('width',dx);
                    el.css("left",dx);
                });
                $(document).mouseup(function(e){
                    $(document).off('mousemove');
                    $(document).off('mouseup');
                    dx = e.pageX - os.left;
                    if(dx<_differ){
                        dx=0;
                        $span.html("验证失败！");
                    }else if(dx>=_differ){
                        dx=_differ;
                        $(".outer").addClass("act");
                        $span.html("验证通过！");
                        el.html('&radic;');
                        $("#errorMsg").html("验证通过!");
                        flag=true;
                    }
                    $filter.css('width',dx);
                    el.css("left",dx);

                })
            })
            $("#loginForm").submit(function(){
                if(flag){
                    return true;
                }else{
                    $("#errorMsg").html("请滑动验证!");
                    return false;
                }
            })
        })
    </script>
</head>
<body>
<!--引入头部-->
<?php
include_once ("html/header.html");
?>
<!-- 头部 end -->
<section id="login_wrap">
    <div class=""  style="background: url(images/a.jpg) no-repeat center ;width: 100% ; height:664px;background-size: 100% 780px;">
    </div>
    <div class="login-box">
        <div class="title">
            <span>欢迎登录豫豪商城账户</span>
        </div>
        <div class="login_inner">
            <!--登录错误提示消息-->
            <div id="errorMsg" class="alert alert-danger"  style="text-align: center"></div>
            <form id="loginForm" action="login.php" method="post" accept-charset="utf-8">
                <input type="text" style=" margin-bottom: 15px;" class="form-control" id="username" name="username" placeholder="请输入用户名">
                <input type="password" style=" margin-bottom: 15px;" class="form-control" id="password" name="password" placeholder="请输入密码">
                <div class="verify">
                    <div class="outer">
                        <div class="filter-box"></div>
                            <span>
                                向右滑动验证
                            </span>
                        <div class="inner">&gt;&gt;</div>
                    </div>
                </div>
                <div class="submit_btn">
                    <input class="btn btn-primary" type="submit" value="登录" />
                </div>
            </form>
            <div class="reg">没有账户？<a href="useradd.php">立即注册</a></div>
        </div>
    </div>
</section>
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
 * Time: 18:16
 */