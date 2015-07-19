<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>

    <script src="../Public/js/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
    <script src="../Public/js/jquery-easyui-1.4.2/locale/easyui-lang-zh_CN.js"></script>
    <link rel="stylesheet" href="../Public/css/index.css" media="all" type="text/css">
    <title>套餐预定</title>
    
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
    <link rel="stylesheet" href="../Public/css/css.css" media="all">
    <link href="../Public/css/packageOrder.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">
    $(function(){
         checkmoney();

        $("#submit").click(function(){
           if($("#adult").val() == '0' &&  $("#child").val() == '0'  ){
                alert("请填写旅游人数");
                return false;
           }else if(checkPhone()  == 1|| $("#name").val() == ''){
                alert("填写正确的信息");
                return false;
           }else if($("#start").datebox('getValue') == ''){
                alet("填写日期");
                return false;
           }
        });

        function checkPhone(){
             var reg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
            var phone = $("#phone").val();
            if(reg.test(phone)){
               return 0;
            }else{
                alert("电话号码错误");
                return 1;
            }
        }
        $("#phone").blur(function(){ //填写电话号码
                checkPhone();            
        });
        $("#adult,#child").change(function(){
            
            if($("#adult").val() < 0){
                $("#adult").val(0);
            }
            if($("#child").val() < 0){
                $("#child").val(0);
            }

                checkmoney();
            
        });
    })
    function checkmoney(){
        $.post("<?php echo U('Index/package/countMoney','','');?>",{adult:$("#adult").val(),child:$("#child").val(),id:1},function(data){
                $('.money').html("￥" + data);
                $("#total").val(data);
            })
    }
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
        <img src="../Public/images/xuanchuan.png" class="xuanchuan">
        <img src="../Public/images/phone.png" class="phone">
        <img src="../Public/images/register.png" class="register">
    </div>
    <div ><a href="javascript:;" class=" btn-large theme-login"><img src="../Public/images/login.png"class="login"></a>
    </div>

    <div class="mainbox"></div>

    <div class="container">
        <img src="../Public/images/package/headtitle.png"><br><br/>
        <div class="realContainer">
            <img src="../Public/images/package/first.png" class="first">
            <img src="../Public/images/package/second.png" class="second">
            <img src="../Public/images/package/third.png" class="third">
            <img src="../Public/images/package/fourth.png" class="fourth">
            <form class="orderContainer" method="post" action="<?php echo U('Index/package/order_2','','');?>">
                <div class="travelInformation">
                    <span>出游信息</span>
                    <input type="hidden" value="0" name="money" id="total">
                    <input type="hidden" value="<?php echo ($data["id"]); ?>" name="id">
                    <input type="hidden" value="<?php echo ($data["name"]); ?>" name="title">
                    <table class="table">
                        <tr>
                            <td>产品名称：</td>
                            <td><?php echo ($data["name"]); ?></td>
                        </tr>
                        <tr>
                            <td>人数：</td>
                            <td class="enter"><label>成人<input type="number" value="0" required id="adult" name="adult">儿童<input name="child" type="number" required value="0" id="child"></label></td>
                        </tr>
                        <td>开始时间：</td>
                            <td><label><input class="easyui-datebox yuyu" id="start" name="start" style="width: 100px"></label></td>
                        <tr>
                            <td>联系人：</td>
                            <td><label><input id='name' name="name" type="text" required style="width: 200px" id="name"></label></td>
                        </tr>
                        <tr>
                            <td>手机：</td>
                            <td><label><input type="text" name="phone" required style="width: 200px" id="phone"></label></td>
                        </tr>
                        
                    </table>
                </div>
                <div class="shouldKnow">
                    <span>预定须知</span>
                    <div class="realShouldKnow">
                        1、预定价格保障，预订成功分后，该产品价格上升不在补收差价，价格下降则退换差价<br/>
                        2、正常阴雨天不影响出行，如遇不可抗拒因素导致不能出游我司会提前与您联系<br/>
                        2、正常阴雨天不影响出行，如遇不可抗拒因素导致不能出游我司会提前与您联系<br/>
                        3、预定价格保障，预订成功分后，该产品价格上升不在补收差价，价格下降则退换差价预定价格保障，预订成功分后，该产品价格上升不在补收差价，价格下降则退换差价<br/>
                        3、预定价格保障，预订成功分后，该产品价格上升不在补收差价，价格下降则退换差价预定价格保障，预订成功分后，该产品价格上升不在补收差价，价格下降则退换差价
                    </div>
                </div>
                <div class="contentSpend">
                    <span>费用包含</span>
                    <div class="realShouldKnow">
                        1、交通<br/>
                        2、签证<br/>
                        2、用餐<br/>
                        3、费用<br/>
                        1、交通<br/>
                        2、签证<br/>
                        2、用餐<br/>
                        3、费用<br/>
                        3、预定价格保障，预订成功分后，该产品价格上升不在补收差价，价格下降则退换差价预定价格保障，预订成功分后，该产品价格上升不在补收差价，价格下降则退换差价
                    </div>
                </div>
                <div class="totalSpend">
                    金额： <span class="money">￥300</span>
                </div>
                <input type="submit" class="confirmButton" value="下一步" id="submit">
             <!--   <button class="confirmButton" id="submit" type="submit">下一步</button> -->
            </form>
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