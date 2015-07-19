<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Public/css/index.css" media="all" type="text/css">
    <title>我的信息</title>
    <script src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
    <script src="../Public/js/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
    <script type="text/javascript" src='../Public/js/jquery.form.js'></script>
    <script src="../Public/js/jquery-easyui-1.4.2/locale/easyui-lang-zh_CN.js"></script>
    <script src="../Public/js/jquery.cookie.js"></script>
    <script src="../Public/js/vipcenter.js"></script>

    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
    <link rel="stylesheet" href="../Public/css/css.css" media="all">
    <link href="../Public/css/vipCenter.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        $(document).ready(function(){
            $('#submit').click(function(){
                var password,confpassword;
                password = document.getElementById("password").value;
                confpassword = document.getElementById("confpassword_1").value;
                
                if (password != '' || confpassword != '') {
                    if ($("#pwd").val() == '') {
                        alert("输入原密码");   
                        return false;                     
                    }else{
                        if(password != confpassword){
                            alert("重新设的新密码不一致，请确认");   
                            return false;  
                        }                  
                    }
                }   
            });
        });
        jQuery(document).ready(function($) {
            $('.theme-login').click(function(){
                $('.theme-popover-mask').fadeIn(100);
                $('.theme-popover').slideDown(200);
            })
            $('.theme-poptit .close').click(function(){
                $('.theme-popover-mask').fadeOut(100);
                $('.theme-popover').slideUp(200);
            })
        })
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
        <img src="__IMG__/phone.png" class="phone">
        <!--<a href="<?php echo U('Index/index/register');?>"><img src="__IMG__/register.png" class="register"></a>-->
    </div>
    
    <div id="afterLogin" style="display: none">
        <img src="../Public/images/afterLogin.png" class="login">
        <button class="register" id="exitLogin">退出登录</button>
    </div>
    <div class="mainbox"></div>

    <div class="container">
        <img src="../Public/images/vipCenter/headtitle.png"><br><br/>
        <div class="dearVIP">
            <img src="../Public/images/vipCenter/point.png">
            <div class="realDearVIP">
                尊敬的会员<span><?php echo ($user["name"]); ?></span>，欢迎你！<br/>
                手机号码：<span><?php echo ($user["phone"]); ?></span>  |  邮箱地址：<span><?php echo ($user["email"]); ?></span>
            </div>
        </div>
        <div class="border">
            <div class="empty"></div>
            <div id="myInformation">
                <form class="temp" id='form' method="post" action="<?php echo U('Index/vipCenter/handUserInfo','','');?>">
                    <input type="hidden" name='id' value="<?php echo ($user["id"]); ?>">
                    <div class="basicInformation">
                        <div class="chooseContent">
                            <span>性别<label class="label">*</label></span>
                            <div class="chooses">

                                <?php if($user["sex"] == '男'): ?><label><input type="radio" name="sex" value="男" id='man' checked="checked">男</label>
                                    <label><input type="radio" name="sex" value="女" id='woman'>女</label>
                                <?php else: ?>
                                    <label><input type="radio" name="sex" value="男" id='man'>男</label>
                                    <label><input type="radio" name="sex" value="女" id='woman' checked="checked">女</label><?php endif; ?>
                            </div>
                        </div>
                        <div class="chooseContent">
                            <span>生日<label class="label">*</label></span>
                            <div class="chooses">
                                <input class="easyui-datebox" name="birthday" value="<?php echo ($user["birthday"]); ?>">
                            </div>
                        </div>
                        <div class="chooseContent">
                            <span>现居住地<label class="label">*</label></span>
                            <div class="chooses">
                                <label>
                                    <!--省：-->
                                    <select class="easyui-combobox" name="address">
                                        <option><?php echo ($user["address"]); ?></option>
                                        <option>四川</option>
                                        <option>浙江</option>
                                        <option>江苏</option>
                                        <option>新疆</option>
                                        <option>广州</option>
                                        <option>重庆</option>
                                    </select></label>
                                <label>
                                    <!--市：-->
                                    <select class="easyui-combobox" name="city" required>
                                        <option>成都</option>
                                    </select></label>
                                <!--区：-->
                                <select class="easyui-combobox" required>
                                    <option>成华</option>
                                </select>
                            </div>
                        </div>
                        <div class="chooseContent">
                            <span>自我介绍</span>
                            <div class="chooses">
                                <label><textarea name="comment" rows="3" cols="70" maxlength="140" onchange="this.value=this.value.substring(0, 140)" onkeydown="this.value=this.value.substring(0, 140)" onkeyup="this.value=this.value.substring(0, 140)" ><?php echo ($user["comment"]); ?></textarea></label>
                                <label style="vertical-align: bottom">限140字</label>
                            </div>
                        </div>
                        <div class="chooseContent">
                         
                        </div>
                    </div>
                    <div class="contactInformation" method="post" action="#">
                        <div class="chooseContent">
                            <span>QQ号</span>
                            <div class="chooses">
                                <input class="easyui-textbox" type="text" name="qq" value="<?php echo ($user["qq"]); ?>">
                            </div>
                        </div>
                        <div class="chooseContent">
                            <span>手机号</span>
                            <div class="chooses">
                                <input class="easyui-textbox" type="tel" value="<?php echo ($user["phone"]); ?>" name='phone' readonly>不可编辑
                            </div>
                        </div>
                    </div>
                    <div class="passwordArea">
                        <div class="chooseContent">
                            <span>原密码</span>
                            <div class="chooses">
                                <label><input id='pwd' class="easyui-textbox" name='pwd' type="password" ><label style="padding-left: 10px" >修改或添加信息必需填写</label></label>
                            </div>
                        </div>
                        <div class="chooseContent">
                            <span>新密码</span>
                            <div class="chooses">
                                <label><input class="easyui-textbox" type="password" id="password" name='password' ></label>
                            </div>
                        </div>
                        <div class="chooseContent">
                            <span>确认密码</span>
                            <div class="chooses">
                                <label><input class="easyui-textbox" type="password" id="confpassword_1" ></label>
                            </div>
                        </div>
                        <div class="chooseContent">
                            <span>电子邮箱</span>
                            <div class="chooses">
                                <label><input class="easyui-textbox" type="email" name="email" value="<?php echo ($user["email"]); ?>" readonly> 不可编辑<!-- <label style="padding-left: 10px"><input type="checkbox" name="isOpenEmail" value="open">公开电子邮箱</label> --></label>
                            </div>
                        </div>
                    </div>
                    <input type="submit" id="submit" style="width: 80px;height: 30px;border: none;margin-left: 45px;background-color: #0384e0;color: white;margin-top: 5px">
                </form>
             
<!--//                </script>-->
            </div>
        </div>
    </div>
    <div class="navbar">
        <div class="userHead">
            <div class="imageBox">
            <?php if($user["image"] == ''): ?><img id="imgHead" src="../Public/images/vipCenter/head.png">
                <?php else: ?>
                <img id="imgHead" src="<?php echo ($user["image"]); ?>"><?php endif; ?>    
                <a onclick="fileSelect()">上传头像</a>  <!-- -->
            </div>
            <span><?php echo ($user["name"]); ?></span>
            <form id="form_face" method="post" enctype="multipart/form-data" style="width:auto;">  <!--  上传头像提交表单-->
                <input type="file" accept="image/gif, image/png, image/jpeg" name="fileToUpload" id="fileToUpload" onchange="fileSelected();" style="display:none;">
            </form>
            <script type="text/javascript">  <!--上传头像函数 -->
            function fileSelect() {
                document.getElementById("fileToUpload").click();
            }
            function fileSelected() {
                // 文件选择后触发次函数
                var option = {
                    url: "<?php echo U('Index/vipCenter/handUploadImage','','');?>",
                    success: showResponse

                };
                $('#form_face').ajaxForm(option).submit();

            }
            function showResponse(data){
                if (data["msg"] == 1) {
                     $("#imgHead").attr('src',data["path"]);
                }else{
                    alert(data["path"]);
                }
            }
            </script>
        </div>
        <div class="realNavbar">
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myOrders','','');?>">我的订单</a>
            </div>
            <div class="realNavbarContent">
                    <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myGrades','','');?>">我的积分 | 奖励</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myEvaluations','','');?>/juge/3">我的评价</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myInformation','','');?>">我的信息</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="myMoneyPot.html">我的储钱罐旅行计划</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myTravealBook','','');?>">写给未来的信</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myFelling','','');?>">旅游随感</a>
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
            <div class="bottomxuanxiang"><a href="<?php echo U('Index/travelTheme/travelTheme');?>">城市之间</a><br>
                <a href="<?php echo U('Index/travelTheme/travelTheme');?>"> 学子游</a><br>
                <a href="<?php echo U('Index/travelTheme/travelTheme');?>">年休假</a><br>
                <a href="<?php echo U('Index/travelTheme/travelTheme');?>">美食游</a></div></div>
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
                <li><strong>用户名：</strong><input class="ipt" id="loginUsername" type="text" name="log" value="jq22" size="20" /></li>
                <li><strong>密码：</strong><input class="ipt" id="loginPassword" type="password" name="pwd" value="***" size="20" /></li>
                <li><input class="btn btn-primary" id="loginButton" type="submit" name="submit" value=" 登 录 " /></li>
            </ol>
        </form>
    </div>
</div>
<div class="theme-popover-mask"></div>
</body>
</html>