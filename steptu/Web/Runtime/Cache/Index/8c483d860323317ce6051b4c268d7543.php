<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Public/css/index.css" media="all" type="text/css">
    <title>写给未来的信</title>
    <!--<script src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>-->
    <script src="../Public/js/register.js"></script>
    <script src="../Public/js/traveBook.js"></script>
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
    <link rel="stylesheet" href="../Public/css/css.css" media="all">
    <link href="../Public/css/letter.css" rel="stylesheet" type="text/css">
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
        <img src="../Public/images/phone.png" class="phone">
        <img src="../Public/images/register.png" class="register">
    </div>
    <div ><a href="javascript:;" class=" btn-large theme-login"><img src="../Public/images/login.png"class="login"></a>
    </div>

    <div class="mainbox"></div>

    <div class="container">
        <img src="../Public/images/travelBook/headtitle_letter.png"><br><br/>
        <img src="../Public/images/travelBook/title.png"><br/>
        <div id="mainboxrealFelling" style="display: block">
            <!--<img src="../Public/images/travelBook/hot.png" style="padding-left: 1%;height: 30px"><img src="../Public/images/travelBook/newest.png" style="padding-left: 1%;height: 30px">-->
            <div class="contentsFromUser">
                <div class="realContents">
                    <div class="image">
                        <img src="<?php echo ($data["image"]); ?>" style="float: left">
                    </div>
                    <div class="textword" >
                        <div class="information">
                           <?php if($data["userImage"] == ''): ?><img id="imgHead" src="../Public/images/vipCenter/head.png" class="imgeye" style="float: left">
                            <?php else: ?>
                                    <img id="imgHead" src="<?php echo ($data["userImage"]); ?>" class="imgeye" style="float: left"><?php endif; ?> 
                            <div class="titlebox">
                                <a href=""><p style="color: #0055FF"><b>
                                <?php echo (htmlspecialchars_decode($data["theme"])); ?></b></p></a><br/>
                                <a href=""></a> &nbsp;&nbsp;&nbsp;&nbsp;<span id="dataBox"><?php echo ($data["name"]); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
                              
                            </div>
                        </div>
                        <div class="passage">
                            <!--<p>Welcome to SYSLAB! We do hands-on systems research on topics ranging from wireless ad-hoc networks to cloud computing to computer security. Principal ...Welcome to SYSLAB! We do hands-on systems research on topics ranging from wireless ad-hoc networks to cloud computing to computer security. Principal ...Welcome to SYSLAB! We do hands-on systems research on topics ranging from wireless ad-hoc networks to cloud computing to computer security. Principal ...</p>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="letterDetials">
                <div class="realLetter">
                   <?php echo (htmlspecialchars_decode($note["content"])); ?>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="bottom"></div>
        <div class="bottomsm"><span class="bottombiao">旅游超市</span><div class="bottomxuanxiang">住<br>吃货</div></div>
        <div class="bottompersonal"><span class="bottombiao">会员中心</span><div class="bottomxuanxiang1">我的订单<br>我的奖励<br>我的积分<br>我的评价<br>我的信息<br>我的储钱罐旅行计划</span><br>找朋友</div> </div>
        <div class="bottombook"><span class="bottombiao">旅游志</span><div class="bottomxuanxiang">旅游随感<br>写给未来的信</div></div>
        <div class="weishenme"><span class="bottombiao">主题旅游</span><div class="bottomxuanxiang">城市之间<br>学子游<br>年休假<br>美食游</div></div>
        <div class="bottomaboutus"><span class="bottombiao">关于游记</span><div class="bottomxuanxiang">关于我们<br>联系我们<br>一起合作<br>用户协议<br>诚聘英才</div></div>
    </div>
    <img src="../Public/images/steptu.png" class="steptu">
    <img src="../Public/images/banquan.png" class="banquan">
    <img src="../Public/images/renzhengwang.png" class="renzhengwang">
    <img src="../Public/images/kexin.png" class="kexin">
    <img src="../Public/images/chengxin.png" class="chengxin">
    <div class="twoBtn">
        <a style="top: 242px;left: 37%" href="<?php echo U('Index/travelBook/travelBook');?>"> 旅 游 随 感 </a>
        <a style="top: 242px;left: 54%" href="<?php echo U('Index/travelBook/letterList');?>">写 给 未 来 的 信</a>
    </div>
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