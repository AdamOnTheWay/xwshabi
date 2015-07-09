<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Public/css/index.css" media="all" type="text/css">
    <title>套餐预定</title>
    <script src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="__JS__/jquery.cookie.js"></script>
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
    <link rel="stylesheet" href="../Public/css/css.css" media="all">
    <link href="../Public/css/packageOrder.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        .lastButton{
            cursor: pointer;
        }
    </style>
    <script>
        jQuery(document).ready(function($) {
            $('.theme-login').click(function(){
                $('.theme-popover-mask').fadeIn(100);
                $('.theme-popover').slideDown(200);
            });
            $('.theme-poptit .close').click(function(){
                $('.theme-popover-mask').fadeOut(100);
                $('.theme-popover').slideUp(200);
            })

        });
        $(document).ready(function() {

// alert("dadf");

            if($.cookie('username') != '' && $.cookie('username') != null && $.cookie('username') != undefined){

                loganniu.style.display="none";
                reanniu.style.display="none";
                document.getElementById("dengluchenggong").innerHTML=$.cookie('username')+"&nbsp"+"&nbsp"+"<img src='../Public/images/dengluchenggong.png' >";
                tuichudenglu.style.display="block";
            }

        });
    </script>
</head>
<body>
<div class="quanbu">
    <div>
        <img src="../Public/images/travelsm.png"  class="travelsm">
        <img src="../Public/images/personal.png" class="personal">
        <img src="../Public/images/travel.png" class="travel" >
        <img src="../Public/images/makeplan.png" class="makeplan">
        <img src="../Public/images/index.png" class="index">
        <img src="../Public/images/yuan.png"  class="yuan">
        <img src="../Public/images/travelbook.png" class="travelbook">
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
            <img src="../Public/images/package/third.png" class="third">
            <img src="../Public/images/package/fourth.png" class="fourth">
            <form class="orderContainer" action="<?php echo U('Index/package/order_3','','');?>">
                <div class="comfirmTravelInfo">
                <input type="hidden" name="money" value="<?php echo ($data["money"]); ?>">
                    <table class="table">
                        <tr>
                            <td>产品名称：</td>
                            <td><?php echo ($data["title"]); ?></td>
                        </tr>
                        <tr>
                            <td>人数：</td>
                            <td>成人：<span><?php echo ($data["adult"]); ?></span>儿童：<span><?php echo ($data["child"]); ?></span></td>
                        </tr>
                        <tr>
                            <td>联系人：</td>
                            <td><?php echo ($data["name"]); ?></td>
                        </tr>
                        <tr>
                            <td>手机：</td>
                            <td><?php echo ($data["phone"]); ?></td>
                        </tr>
                        <tr>
                            <td>金额：</td>
                            <td>￥<span><?php echo ($data["money"]); ?></span></td>
                        </tr>
                    </table>
                </div>
                <button class="lastButton" onclick="window.history.back(-1);" id="up">上一步</button>
                <button class="nextButton" id="down">下一步</button>
            </form>
            // <script type="text/javascript">
            //     $(function(){
            //         $("#up").click(function(){
            //             window.history.back(-1);
            //         });
            //     })
            // </script>
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
    <div style="position: absolute;left: 822px;top: 0px;font-size:14px;color:white"id="dengluchenggong"></div>
    <div id="tuichudenglu" style="position: absolute;left: 960px;top: 5px;font-size:14px;color:white;display:none;cursor: pointer;">退出登录</div>

</div>

<script src="__JS__/index.js" type="text/javascript"></script>
<div  id="asdfq">
    <div class="theme-popover" id="theme-popover">
        <div class="theme-poptit">
            <a href="javascript:;" title="关闭" class="close" id="close">×</a>
            <h3>旅行是一种生活</h3>
        </div>
        <div class="theme-popbod dform">
            <form class="theme-signin" name="loginform" action="<?php echo U('Index/loginVerify/loginVerify');?>" method="post">
                <ol>
                    <li ><h4>请登录</h4></li>
                    <li><strong>用户名：</strong><input class="ipt" id="name" type="text" name="log" value="" size="20" /></li>
                    <li><strong>密码：</strong><input class="ipt" id="psw" type="password" name="pwd" value="" size="20" /></li>
                    <li><input class="btn btn-primary" name="submit" value=" 登 录 " id="dlanniu" /></li>
                </ol>
            </form>
        </div>
    </div>
    <div class="theme-popover-mask" id="theme-popover-mask"></div>
</div>
</body>
<script type="text/javascript">

    $("#dlanniu").click(function(){
                // console.log($data['code']);
                // alert("用户名/密码 错误！");
                var url = '<?php echo U('Index/loginVerify/loginVerify');?>';
                $.post(url,{log:$("#name").val(),pwd:$("#psw").val()},function(data){
                            console.log($.cookie('username'));
                            // alert(data['address'][2]);

                            // console.log(shishi);
                            if (data.code==1) {
                                alert("登陆成功");
                                var shishi=$.cookie('username');
                                document.getElementById("close").click();
                                loganniu.style.display="none";
                                reanniu.style.display="none";
                                document.getElementById("dengluchenggong").innerHTML=shishi+"&nbsp"+"&nbsp"+"<img src='../Public/images/dengluchenggong.png' >";
                                tuichudenglu.style.display="block";
                                // theme-popover.style.display=none;
                                //  theme-popover-mask.style.display="none";
                            }
                            else
                            {
                                alert("用户名/密码 错误！")
                            };
                        }
                )
            }
    )
    $("#tuichudenglu").click(function(){
        var url = '<?php echo U('Index/loginVerify/tuichudenglu');?>';
        $.post(url,function(){
            document.getElementById("dengluchenggong").innerHTML="";
            loganniu.style.display="block";
            reanniu.style.display="block";
            tuichudenglu.style.display="none";
        })



    });
</script>

</html>