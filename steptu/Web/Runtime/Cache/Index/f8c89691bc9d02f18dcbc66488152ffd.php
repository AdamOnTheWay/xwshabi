<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Public/css/index.css" media="all" type="text/css">
    <title>套餐预定</title>
    <script src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
    <link rel="stylesheet" href="../Public/css/css.css" media="all">
    <link href="../Public/css/packageOrder.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="quanbu">
    <div>
        <a href="<?php echo U('Index/travelStore/travelStore');?>"><img src="__IMG__/travelsm.png" class="travelsm"></a>
        <a href="<?php echo U('Index/vipCenter/myInformation');?>"><img src="__IMG__/personal.png" class="personal"></a>
        <a href="<?php echo U('Index/travelTheme/travelTheme');?>"> <img src="__IMG__/travel.png" class="travel" ></a>
        <a href="<?php echo U('Index/makePlan/makePlan');?>"> <img src="__IMG__/makeplan.png" class="makeplan"></a>
        <a href="<?php echo U('Index/index/index');?>"><img src="__IMG__/index.png" class="index"></a>
        <a href="<?php echo U('Index/travelBook/travelBook');?>"><img src="__IMG__/travelbook.png" class="travelbook"></a>
        <img src="../Public/images/xuanchuan.png" class="xuanchuan">
        <img src="__IMG__/logo1.png" style="position: absolute;left: 420px;top: 30px;width:300px;">
        <img src="../Public/images/phone.png" class="phone">
        <a href="javascript:;"class=" btn-large theme-login" style="" id="loganniu"><img src="../Public/images/login.png"   style=" position: absolute;left: 822px;top: 70px;cursor: pointer;"></a>
        <a href="<?php echo U('Index/index/register','','');?>"><img src="__IMG__/register.png" style="position: absolute;left: 920px;top: 70px;" id="reanniu"></a>
    </div>

    <div class="mainbox"></div>

    <div class="container">
        <img src="../Public/images/package/headtitle.png"><br><br/>
        <div class="realContainer">
            <img src="../Public/images/package/first.png" class="first">
            <img src="../Public/images/package/second_blue.png" class="second">
            <img src="../Public/images/package/pay.png" class="third">
            <img src="../Public/images/package/orderSuccess.png" class="fourth">
            <div class="orderContainer">
                <div class="realSuccess">
                    预定成功！<img src="../Public/images/package/right.png">
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="bottom"></div>
        <div class="bottomsm">
            <span class="bottombiao">旅游超市</span>
            <div class="bottomxuanxiang">
                <a href="<?php echo U('Index/travelStore/smsousuojieguo');?>">住</a><br>
                <a href="<?php echo U('Index/travelStore/travelStore');?>">吃货</a>
            </div>
        </div>
        <div class="bottompersonal">
            <span class="bottombiao">会员中心</span>
            <div class="bottomxuanxiang1">
                <a href="<?php echo U('Index/vipCenter/myOrders');?>"> 我的订单</a><br>
                <a href="<?php echo U('Index/vipCenter/myGrades');?>">我的积分</a> <br>
                <a href="<?php echo U('Index/vipCenter/myEvaluations');?>"> 我的评价</a><br>
                <a href="<?php echo U('Index/vipCenter/myInformation');?>">我的信息</a> <br>
                <a href="<?php echo U('Index/vipCenter/myMoneyPot');?>">我的储钱罐旅行计划</a><br>
            </div>
        </div>
        <div class="bottombook">
            <span class="bottombiao">旅游志</span>
            <div class="bottomxuanxiang">
                <a href="<?php echo U('Index/travelBook/travelBook');?>">旅游随感</a> <br>
                <a href="<?php echo U('Index/travelBook/letterList');?>"> 写给未来的信</a></div>
        </div>
        <div class="weishenme">
            <span class="bottombiao">主题旅游</span>
            <div class="bottomxuanxiang">
                <a href="<?php echo U('Index/travelTheme/travelTheme');?>">城市之间</a><br>
                <a href="<?php echo U('Index/travelTheme/travelTheme');?>"> 学子游</a><br>
                <a href="<?php echo U('Index/travelTheme/travelTheme');?>">年休假</a><br>
                <a href="<?php echo U('Index/travelTheme/travelTheme');?>">美食游</a>
            </div></div>
        <div class="bottomaboutus"><span class="bottombiao">关于游记</span><div class="bottomxuanxiang">
            <a href="<?php echo U('Index/index/aboutUs');?>">关于我们</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">联系我们</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">一起合作</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">用户协议</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">诚聘英才</a>
        </div>
        </div>
    </div>
    <img src="../Public/images/steptu.png" class="steptu">
    <img src="../Public/images/banquan.png" class="banquan">
    <img src="../Public/images/renzhengwang.png" class="renzhengwang">
    <img src="../Public/images/kexin.png" class="kexin">
    <img src="../Public/images/chengxin.png" class="chengxin">
</div>

<div class="theme-popover">
    <div class="theme-poptit">
        <a href="javascript:;" title="关闭" class="close">×</a>
        <h3>旅行是一种生活</h3>
    </div>
    <div class="theme-popbod dform">
        <form class="theme-signin" name="loginform" action="" method="post">
            <ol>
                <li><h4>请登录</h4></li>
                <li><strong>用户名：</strong><input class="ipt" type="text" name="log" value="jq22" size="20" /></li>
                <li><strong>密码：</strong><input class="ipt" type="password" name="pwd" value="***" size="20" /></li>
                <li><input class="btn btn-primary" type="submit" name="submit" value=" 登 录 " /></li>
            </ol>
        </form>
    </div>
</div>
<div class="theme-popover-mask"></div>
</body>
</html>