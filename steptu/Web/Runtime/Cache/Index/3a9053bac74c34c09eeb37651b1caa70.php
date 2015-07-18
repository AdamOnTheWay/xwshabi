<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Public/css/index.css" media="all" type="text/css">
    <title>注册</title>
    <script src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="__JS__/jquery.cookie.js"></script>
    <script type="text/javascript" src="__JS__/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
    <!--<script type="text/javascript" src='../Public/js/jquery.form.js'></script>-->
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
    <link rel="stylesheet" href="../Public/css/css.css" media="all">
    <link href="../Public/css/register.css" rel="stylesheet" type="text/css">

    <script type="text/javascript">
                    function isEnterLegal(){
                        var password,confpassword;
                        password = document.getElementById("password").value;
                        confpassword = document.getElementById("userSecondSecurity").value;
                        if(password != confpassword){
                            alert("请确认两次密码输入一致");
                            return false;
                        }
                        else{
                        $.post("<?php echo U('Index/register/registerCheck','','');?>",
                            {name:$('#name').val(),password:$('#password').val(),userSecondSecurity:$('#userSecondSecurity').val(),email:$('#email').val(),phone:$('#phone').val()},
                            function(data) {
                                if(data['code'] == 0){
                                    alert(data['msg']);
                                }else{
                                    
                                    window.location.href="<?php echo U('Index/register/registerConfirm','','');?>";
                                }
                        });
                    }
                    }
            </script>

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
        <a href="<?php echo U('Index/travelStore/travelStore');?>"><img src="__IMG__/travelsm.png" class="travelsm"></a>
        <a href="<?php echo U('Index/vipCenter/myInformation');?>"><img src="__IMG__/personal.png" class="personal"></a>
        <a href="<?php echo U('Index/travelTheme/travelTheme');?>"> <img src="__IMG__/travel.png" class="travel" ></a>
        <a href="<?php echo U('Index/makePlan/makePlan');?>"> <img src="__IMG__/makeplan.png" class="makeplan"></a>
        <a href="<?php echo U('Index/index/index');?>"><img src="__IMG__/index.png" class="index"></a>
        <a href="<?php echo U('Index/travelBook/travelBook');?>"><img src="__IMG__/travelbook.png" class="travelbook"></a>
        <img src="__IMG__/xuanchuan.png" class="xuanchuan">
        <img src="__IMG__/logo1.png" style="position: absolute;left: 420px;top: 30px;width:300px;">
        <img src="__IMG__/phone.png" class="phone">
        <a href="javascript:;"class=" btn-large theme-login" style="" id="loganniu"><img src="../Public/images/login.png"   style=" position: absolute;left: 822px;top: 70px;cursor: pointer;"></a>
        <a href="<?php echo U('Index/index/register','','');?>"><img src="__IMG__/register.png" style="position: absolute;left: 920px;top: 70px;" id="reanniu"></a>
    </div>

    <div class="container">
        <img src="../Public/images/register/menberregister.png"><br>
        <p style="font-size: 20px;color: darkgray">欢迎您注册游迹旅游网</p><br>
        <div class="mainbox">
            <img src="../Public/images/register/word_1.png">
            <div class="theme-popbod dform">
                <form class="theme-signin" name="form" action="<?php echo U('Index/register/registerConfirm','','');?>" method="post" id='form'>
                    <ol>
                         <li><strong>用户名：</strong><label><input class="ipt" type="text" id="name" name="name" size="20" required></label></li> 
                        <li><strong>密码：</strong><label><input class="ipt" type="password" id="password" name='password' size="20" required></label></li>
                        <li><strong>确认密码：</strong><label><input class="ipt" type="password" id="userSecondSecurity" name='userSecondSecurity' size="20" required></label></li>
                        <li><strong>邮箱：</strong><label><input class="ipt" type="email" name='email' id="email" size="20" required></label></li>
                        <li><strong>手机号：</strong><label><input class="ipt" type="tel" id="phone" name='phone' size="20" required></label></li>
                        <br/>
                    </ol>
                    <label style="padding-left: 70px"><input type="checkbox" value="" required>愿意接受免费的旅游咨询<br/></label><br/>
                    <label style="padding-left: 70px"><input type="checkbox" value="" required>我已阅读并接受了<a href="">注册协议</a></label><br/><br/>
                    <input class="btn btn-primary"  name="submit" value=" 提 交 注 册 " style="left: 70px" onclick="return isEnterLegal()" id="btn">
                </form>
                <script type="text/javascript">
                    function isEnterLegal(){
                        var password,confpassword;
                        password = document.getElementById("password").value;
                        confpassword = document.getElementById("userSecondSecurity").value;
                        if(password != confpassword){
                            alert("请确认两次密码输入一致");
                            return false;
                        }
                        else{
                        $.post("<?php echo U('Index/register/register');?>",
                            {name:$('#name').val(),password:$('#password').val(),userSecondSecurity:$('#userSecondSecurity').val(),email:$('#email').val(),phone:$('#phone').val()},
                            function(data) {
                                if(data['code'] == 0){
                                    alert(data['msg']);
                                }else{
                                    window.location.href="<?php echo U('Index/index/registerConfirm');?>";
                                }
                        });
                    }
                    }
                </script>
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
            <div class="bottomxuanxiang"><a href="/travel/steptu/index.php/travelTheme/travelTheme/class/学子游">城市之间</a><br>
            <a href="<?php echo U(Index/travelTheme/travelTheme,'class=学子游','');?>"> 学子游</a><br>
            <a href="<?php echo U(Index/travelTheme/travelTheme,'class=年休假','');?>">年休假</a><br>
            <a href="<?php echo U(Index/travelTheme/travelTheme,'class=美食街','');?>">美食游</a></div></div>
        <div class="bottomaboutus"><span class="bottombiao">关于游记</span><div class="bottomxuanxiang">
            <a href="<?php echo U('Index/index/aboutUs');?>">关于我们</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">联系我们</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">一起合作</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">用户协议</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">诚聘英才</a></div>
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