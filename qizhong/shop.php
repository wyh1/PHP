<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/jquery-2.1.0.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link href="css/com.wyh.css" rel="stylesheet">
    <style type="text/css">
        #zhuti{
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
        }
        #zhuti #text1 {
            font-size: x-large;
            color: #F00A0E;
            padding-left: 18px;
        }
        #zhuti #w1 {
            padding-top: 13px;
            padding-bottom: 13px;
        }
        #zhuti .w3 {
            float: left;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
            border: 1px double #837C7C;
        }
        #zhuti .y1 {
            float: left;
            width: 11%;
            padding-top: 15px;
        }
        #zhuti .y2 {
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 40px;
        }
        #zhuti .y3{
            width: 4%;
            text-align: right;
            margin-right: 10px;
            padding-top: 15px;
            float: left;
        }
        #zhuti .y4{
            float: left;
            padding-top: 15px;
            width: 51%;
            padding-bottom: 15px;
        }
        #zhuti #w4 {
            background-color: rgb(229, 229, 229);
            float: left;
            width: 100%;
            height: 51px;
        }
        #zhuti .y5 {
            padding-left: 35px;
            float: left;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        #zhuti .y6{
            display: block;
            height: 23px;
            width: 17px;
            border: 1px solid #e5e5e5;
        //	background: #f0f0f0;
            background: #fff0e7;
            text-align: center;
            line-height: 23px;
            color: #444;
            float:left;
            text-decoration: none;
        }
        #zhuti .y7{
            width: 39px;
            height: 15px;
            line-height: 15px;
            border: 1px solid #aaa;
            color: #343434;
            text-align: center;
            padding: 4px 0;
            background: #fff0e7;
        //	background-color: #fff;
            background-position: -75px -375px;
            z-index: 2;
            left: 18px;
            top: 0;
            float: left;
        }
        #zhuti .y8{
            display: block;
            width: 55px;
            border: 1px solid #ffe1d3;
            border-top: 0;
            color: #f40;
            text-align: center;
            padding-top: 5px;
            padding-right: 11px;
            padding-left: 11px;
            padding-bottom: 5px;
            background: #fff0e7;
            font-style: normal;
            font-size: small;
            float: left;
        }
        #zhuti #h1 {
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 15px;
            padding-bottom: 15px;
            float: left;
        }
        #zhuti #h2 {
            float: right;
            height: 41px;
            background: #666666;
            padding-top: 10px;
            padding-left: 20px;
            padding-right: 20px;
        }
        #zhuti #h3 {
            float: right;
            padding-right: 35px;
            padding-left: 0px;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        *{
            margin: 0;
            padding: 0;
        }
        #zhuti .SC{
            text-decoration: none;

        }
        #zhuti .SC1{
            text-decoration: none;

        }
        #biaodan{
            background-image: url(images/regist_bg.jpg);
            width: 100%;
            height: 1000px;
            text-align: center;
        }
        ul span  {
            color: #F80307;
        }
        </style>
    <script>
        $(function(){
            var jiage1=$("#WYH1");
            var jiage2=$("#WYH2");
            var jiage3=$("#WYH3");
            var jiage4=$("#WYH4");
            var jiage5=$("#WYH5");
            <!--全选商品-->
            $(".WYHall").click(function(){
                //	alert($("#WYH1").attr("title"));
                $(".WYHone").prop("checked",$(this).prop("checked"));
                if($(this).prop("checked")){
                    $("#h2").css("background-color","#E91518");
                    var sum=0;
                    if(jiage1.attr("title")!=null){
                        sum=Number(jiage1.attr("title"));
                    }
                    if(jiage2.attr("title")!=null){
                        sum+=Number(jiage2.attr("title"));
                    }
                    if(jiage3.attr("title")!=null){
                        sum+=Number(jiage3.attr("title"));
                    }
                    if(jiage4.attr("title")!=null){
                        sum+=Number(jiage4.attr("title"));
                    }
                    if(jiage5.attr("title")!=null){
                        sum+=Number(jiage5.attr("title"));
                    }
                    $("#WYHmoney").html(sum);
                }else{
                    $("#h2").css("background-color","#666666");
                    $("#WYHmoney").html("0");
                }
            });
            setTimeout(showAd,2000);
        })
        function showAd(){
            $("#ad").fadeIn(1000);
            setTimeout("hideAd()",4000);
        }
        function hideAd(){
            $("#ad").fadeOut(1000);
        }
    </script>
</head>
<body>
<?php
include_once "html/header.html";
if(!isset($_COOKIE["user"])) {
    echo '<h1>错误:用户未登录</h1>';
    include_once "html/footer.html";
    exit;
}
$uid =$_COOKIE["uid"];
$pdo = new PDO("mysql:host=localhost;dbname=php", "root", "root");
$sql = "select * from goods,collection where goods.gid=collection.gid and collection.uid='$uid'";
$data = $pdo->query($sql)->fetchAll();
$num=1;
?>
<div id="ad" style="width:100%;display: none;">
    <img id="id2" width="100%" src="images/f001a62f-a49d-4a4d-b56f-2b6908a0002c_g.jpg">
</div>
<main>
    <form action="" method="post">
        <div id="biaodan">
            <div id="zhuti" style="text-align: left;">
                <!--第一行，商品信息-->
                <div id="w1">
                    <span id="text1">全部商品</span>
                    <span style="font-size: x-large;padding-left: 13px;">降价商品</span>
                    <span style="font-size: x-large;padding-left: 13px;">库存紧张</span>
                    <hr color="#F80307" width="120px" align="left"><hr>
                </div>
                <!--第二行，商品类型-->
                <div id="w2">
                    <div class="y1"><input type="checkbox" class="WYHall">&nbsp;全选</div>
                    <div style="width: 45%;float: left;padding-top: 15px;">商品信息</div>
                    <div class="y1">单价</div>
                    <div class="y1">数量</div>
                    <div class="y1">金额</div>
                    <div class="y1">操作</div>
                </div>
                <!--第六行，复制商品框架-->
                <?php foreach ($data as $row): ?>
                <div class="w3" id="D4">
                    <div class="y2"><font color="#E04245">已享优惠:省:&nbsp;&yen;20元</font></div>
                    <hr>
                    <div class="y3"><input type="checkbox" class="WYHone"></div>
                    <div class="y4">
                        <div style="float: left"><img width="90px" height="90px" src="image/<?php echo $row["gpicture"] ; ?>"></div>
                        <div style="float: left;padding-left: 10px;"><?php echo $row["gname"] ; ?><br>大牌立减</div>
                    </div>
                    <div class="y1">&yen;：<?php echo $row["gprice"] ; ?></div>
                    <div class="y1">
                        <a id="W4yh1" href="#" class="y6">-</a>
                        <input id="W4yh2" class="y7" type="text" title="1" value="1">
                        <a id="W4yh3" href="#" class="y6">+</a>
<!--                        <em class="y8">限购20件</em>-->
                    </div>
                    <div class="y1" style="color: #EA1C1F">
                        <div style="float:left;">&yen;：</div>
                        <div id="WYH<?php echo $num; ?>" style="float:left;" title="<?php echo $row["gprice"] ; ?>"><?php echo $row["gprice"] ; ?></div>
                    </div>
                    <div class="y1">
                        <p><a href="#" class="SC">移入收藏夹</a></p>
                        <p><a href="#" class="SC1" id="delect4">删除</a></p>
                    </div>
                </div>
                <?php
                $num+=1;
                endforeach;
                ?>
                <!--第七行，商品结算条-->
                <div id="w4">
                    <div id="h1"><input type="checkbox" class="WYHall">&nbsp;全选</div>
                    <span class="y5"><a href="#" class="SC1" id="delect5">全部删除</a></span>
                    <span class="y5"><a href="#" class="SC">移入收藏夹</a></span>
                    <span class="y5">分享</span>
                    <div id="h2">
                        <font size="+2">
                            <a href="" style="color: aliceblue;text-decoration: none;">结算</a>
                        </font>
                    </div>
                    <div id="h3">合计（不含运费）：
                        <font c>&yen;&nbsp;&nbsp;&nbsp;</font>
                        <div id="WYHmoney" style="float:right;font-size:large;color: #E91518">0</div>
                    </div>
                </div>
            </div>
            </div>
        </form>
</main>
<?php
include_once "html/footer.html";
?>
</body>
</html>