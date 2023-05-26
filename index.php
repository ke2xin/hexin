<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>禾馨商城</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=0.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <link rel="icon" href="images/logo1.ico">
    <script type="text/javascript" src="js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/dibu.css"/>
    <style>
        .focus {
            margin: 0 auto;
            position: relative;
            z-index: 2;
            overflow: hidden;
        }

        .focus .hd {
            width: 100%;
            height: 11px;
            position: absolute;
            z-index: 1;
            bottom: 5px;
            text-align: center;
            display: none;
        }

        .focus .hd ul {
            display: inline-block;
            height: 5px;
            padding: 3px 5px;
            background-color: rgba(255, 255, 255, 0.7);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            font-size: 0;
            vertical-align: top;
        }

        .focus .hd ul li {
            display: inline-block;
            width: 5px;
            height: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            background: #8C8C8C;
            margin: 0 5px;
            vertical-align: top;
            overflow: hidden;
            list-style: none;
        }

        .focus .hd ul .on {
            background: #FE6C9C;
        }

        .focus .bd {
            position: relative;
            z-index: 0;
        }

        .focus .bd li img {
            background: url(images/loading.gif) center center no-repeat;
        }

        .focus .bd li a {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0); /* 取消链接高亮 */
        }
    </style>
    <style>
        *{
            margin: 0;
        }
        html,body{
            width: 100%;
        }
        body{
            background: #fff;
        }
        .btn_sousuo input {
            height: 30px;
            line-height: 30px;
            border: none;
            border-radius: 30px;
            padding-left: 30px;
            background: rgba(255, 255, 255, .5) url(images/search.png) 4px no-repeat;
            background-size: 30px;
        }
        .pre{
            transform: rotateX(-95deg);
            -webkit-transform: rotateX(-95deg);
        }
    </style>
</head>
<body>
<div class="top" style="width: 100%;height: 250px;">
    <!--    轮播start-->
    <div id="focus" class="focus">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                <li><a href="#"><img src="images/lbt11.jpg" style="width: 100%;"/></a></li>
                <li><a href="#"><img src="images/lbt12.jpg" style="width: 100%;"/></a></li>
                <li><a href="#"><img src="images/lbt13.jpg" style="width: 100%;"/></a></li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        TouchSlide({
            slideCell: "#focus",
            titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
            mainCell: ".bd ul",
            effect: "leftLoop",
            autoPlay: true,//自动播放
            autoPage: true, //自动分页
        });
    </script>
    <!--轮播图end-->
</div>
<div style="display: flex;">
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/gsjj.png" style="height:50px;object-fit: contain;">
            公司简介
        </a>
    </div>
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/yhqd.png" style="height:50px;object-fit: contain;">
            用户签到
        </a>
    </div>
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/bwbd.png" style="height:50px;object-fit: contain;">
            百问百答
        </a>
    </div>
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/jfsc.png" style="height:50px;object-fit: contain;">
            积分商城
        </a>
    </div>
</div>
<div style="display: flex;margin-top: 10px;margin-bottom: 20px;">
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/scy.png" style="height:50px;object-fit: contain;">
            商学院
        </a>
    </div>
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/yqph.png" style="height:50px;object-fit: contain;">
            邀请排行
        </a>
    </div>
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/zc.png" style="height:50px;object-fit: contain;">
            种草
        </a>
    </div>
    <div style="flex: 1;font-size: 12px;display: flex;flex-direction: column;align-items: center;letter-spacing: 2px;">
        <a href="#"
           style="text-align: center;color: #999;text-decoration: none;display: flex;flex-direction: column;align-items: center;">
            <img src="images/spzq.png" style="height:50px;object-fit: contain;">
            视频专区
        </a>
    </div>
</div>
<!--活动专区start-->
<div style="text-align: center;font-size: 18px">
    &nbsp;&nbsp;活动专区&nbsp;&nbsp;
</div>
<div>
    <div>
        <img src="images/hdq1.png" style="width: 100%;">
    </div>
    <div>
        <img src="images/hdq2.png" style="width: 100%;">
    </div>
    <div>
        <img src="images/hdq3.png" style="width: 100%;">
    </div>
</div>
<!--活动专区end-->
<!--禾馨专区start-->
<div style="text-align: center;font-size: 18px;margin-bottom: 10px;">
    &nbsp;&nbsp;禾馨专区&nbsp;&nbsp;
</div>
<div style="margin-bottom: 10px;">
    <div style="display: flex;">
        <div style="flex: 1;margin-left: 10px;margin-right: 5px;">
            <img src="images/zq1.png" style="width: 100%;">
        </div>
        <div style="flex: 1;margin-left: 5px;margin-right: 10px;">
            <img src="images/zq1.png" style="width: 100%;">
        </div>
    </div>
    <div style="display: flex;margin-top: 10px;">
        <div style="flex: 1;margin-left: 10px;margin-right: 5px;">
            <img src="images/zq3.png" style="width: 100%;">
        </div>
        <div style="flex: 1;margin-left: 5px;margin-right: 10px;">
            <img src="images/zq4.png" style="width: 100%;">
        </div>
    </div>
</div>
<!--禾馨专区end-->
<!--客服start-->
<div style="position: fixed;width: 100px;height: 100px;bottom: 10px;z-index: 1;right: 10px;">
    <img src="images/kf.png" style="width: 50px;position: absolute;right: 10px;">
</div>
<!--客服end-->

<!--    底部导航start-->
<div style="height: 54px;"></div>
<div id="menu" class="menu">
    <div id="one" class="subMenu text-center" data-src="charger.html">
        <a href="#" style="width: 100%;height: 100%;display: block;text-decoration: none;color: #999;">
            <img class="menu_img" data-imgname="shouye_on"/>
            <div class="menu_name active">首页</div>
        </a>
    </div>
    <div id="two" class="subMenu text-center">
        <a href="#" style="width: 100%;height: 100%;display: block;text-decoration: none;color: #999;">
            <img class="menu_img" data-imgname="fenl"/>
            <div class="menu_name">商品</div>
        </a>
    </div>
    <div id="three" class="subMenu text-center" data-src="personal.html">
        <a href="#" style="width: 100%;height: 100%;display: block;text-decoration: none;color: #999;">
            <img class="menu_img" data-imgname="gwc"/>
            <div class="menu_name">购物车</div>
        </a>
    </div>
    <div id="four" class="subMenu text-center" data-src="personal.html">
        <a href="#" style="width: 100%;height: 100%;display: block;text-decoration: none;color: #999;">
            <img class="menu_img" data-imgname="my"/>
            <div class="menu_name">我的</div>
        </a>
    </div>
</div>
<!--    底部导航end-->
<script>
    $(document).ready(function () {
        //添加图片
        $("div .subMenu a>img").each(function () {
            var name = $(this).attr("data-imgname");
            var src = "images/" + name + ".png"
            //设置img的属性和值。
            $(this).attr("src", src);
        });
        // 自动点击第一个菜单
        $("div .subMenu")[0].click();
    });
</script>
</body>
</html>
