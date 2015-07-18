<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta charset="utf-8">
	<title>旅游超市</title>
	<link rel="stylesheet" href="../Public/css/travelstore/travelstore.css" media="all" type="text/css">
	<link rel="stylesheet" href="../Public/css/css.css" media="all">
	<script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="../Public/js/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
  <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
  <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
  <script type="text/javascript" src="__JS__/jquery.cookie.js"></script>
<style type="text/css">
    #allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
  </style>
	<script>
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
<script type="text/javascript">
function showchi(){
    chicontent.style.display="block";
    zhucontent.style.display="none";
}
function showzhu(){
   chicontent.style.display="none";
    zhucontent.style.display="block";
}

</script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=GW5oM4QR33hjrzFicL1iNtq3"></script>
</head>
<body>
<STYLE TYPE="text/css">

<!--

BODY {background-image: URL(../Public/images/travelstore/background.png);

background-position:center top;

background-repeat: no-repeat;
background-color: #d2dffe;

}
  a{
    color: #444444;
}
a:hover{
    color: red;
    font-weight: bolder;}
-->!
</STYLE>
<div class="quanbu">
<img src="__IMG__/logo1.png" style="position: absolute;left: 420px;top: 30px;width:300px;">
	<a href="<?php echo U('Index/travelStore/travelStore');?>"><img src="__IMG__/travelsm.png" class="travelsm"></a>
        <a href="<?php echo U('Index/vipCenter/myInformation');?>"><img src="__IMG__/personal.png" class="personal"></a>
        <a href="<?php echo U('Index/travelTheme/travelTheme');?>"> <img src="__IMG__/travel.png" class="travel" ></a>
        <a href="<?php echo U('Index/makePlan/makePlan');?>"> <img src="__IMG__/makeplan.png" class="makeplan"></a>
        <a href="<?php echo U('Index/index/index');?>"><img src="__IMG__/index.png" class="index"></a>
        <a href="<?php echo U('Index/travelBook/travelBook');?>"><img src="__IMG__/travelbook.png" class="travelbook"></a>
        <img src="../Public/images/xuanchuan.png"class="xuanchuan">
<a href="javascript:;"class=" btn-large theme-login" style="" id="loganniu"><img src="../Public/images/login.png"   class="login"></a>
<a href="<?php echo U('Index/index/register','','');?>"><img src="__IMG__/register.png" class="register" id="reanniu"></a>
<div style="position: absolute;left: 822px;top: 0px;font-size:14px;color:white"id="dengluchenggong"></div>
<div id="tuichudenglu" style="position: absolute;left: 960px;top: 5px;font-size:14px;color:white;display:none;cursor: pointer;">退出登录</div>
<a href="<?php echo U('Index/travelStore/smsousuojieguo');?>"><img src="../Public/images/travelstore/zhu.png" class="zhu"></a>
<img src="../Public/images/travelstore/chi.png" class="chi" onclick="showchi()">
<div class="zhongyang">
	<img src="../Public/images/travelstore/smtiao.png" style="">
	<div class="content1">
     <div class="sousuotiao">
     	<form action="<?php echo U('Index/travelStore/travelStore');?>" name="smhuodongsousuo" method="post">
     		<div style="position:absolute;top:9px;left:3px;font-size:12px; color:white;" > 始发地</div>
     		<input name="smshifadi" id="smshifadi" type="text" value="" style="position:absolute;top:7px;left:44px;width:70px;font-size:13px;border-radius:4px;"/>
     		<div style="position:absolute;top:9px;left:120px;font-size:12px; color:white;" > 目的地</div>
     		<input name="smmudidi" id="smmudidi" type="text" value="" style="position:absolute;top:7px;left:161px;width:70px;font-size:13px;border-radius:4px;"/>
     		<div style="position:absolute;top:9px;left:237px;font-size:12px; color:white;" > 起始日</div>
     		<div style="position:absolute;top:6px;left:278px;"><input id="smqishiri" type="text" style="width:100px;" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser"></div>
     		<div style="position:absolute;top:9px;left:384px;font-size:12px; color:white;" > 截止日</div>
     		<div style="position:absolute;top:6px;left:425px;"><input id="smjiezhiri" type="text" style="width:100px;" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser"></div>
     		<div style="position:absolute;left:530px;top:5px; cursor: pointer;"><input type="image" src="../Public/images/makeplan/sousuobiaozhi.png" style="border:0;" ></div>
     	</form>
     	</div>


      <!-- 以下是图片滚动 -->
     	<div class="tupiangundong">
        <div style="position:relative;left:10px;top:-5px;">
        <div class="rollBox">
     <div class="zuogun" onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp()" onmouseout="ISL_StopUp()" >
      <img id="zuoguntu" src="../Public/images/travelstore/zuogun.png">
    </div>
     <div class="Cont" id="ISL_Cont">
      <div class="ScrCont">
       <div id="List1">
        <!-- 图片列表 begin -->
         <div class="pic">
          <a href="<?php echo U('Index/package/package');?>?id=<?php echo ($store[0]["id"]); ?>" target="_blank"><img src="<?php echo ($store[0]["image"]); ?>" width="157" height="95" alt="一号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(<?php echo U('Index/package/package');?>?id=<?php echo ($store[0]["id"]); ?>);" style="cursor:pointer;"/></a>
          <a href="<?php echo U('Index/package/package');?>?id=<?php echo ($store[0]["id"]); ?>" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($store[0]["name"]); ?></div><div style="font-size:13px;font-family: SimHei;color:#ff8004;"><?php echo ($store[0]["description"]); ?></div><div style="font-size:18px;font-family: SimHei;color:red;float:left;">￥<?php echo ($store[0]["price"]); ?></div></a>

         </div>
 <div class="pic">
          <a href="<?php echo U('Index/package/package');?>?id=<?php echo ($store[1]["id"]); ?>" target="_blank"><img src="<?php echo ($store[1]["image"]); ?>" width="157" height="95" alt="一号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(<?php echo U('Index/package/package');?>?id=<?php echo ($store[1]["id"]); ?>);" style="cursor:pointer;"/></a>
          <a href="<?php echo U('Index/package/package');?>?id=<?php echo ($store[1]["id"]); ?>" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($store[1]["name"]); ?></div><div style="font-size:13px;font-family: SimHei;color:#ff8004;"><?php echo ($store[1]["description"]); ?></div><div style="font-size:18px;font-family: SimHei;color:red;;float:left;">￥<?php echo ($store[1]["price"]); ?></div></a>

         </div>
         <div class="pic">
          <a href="<?php echo U('Index/package/package');?>?id=<?php echo ($store[2]["id"]); ?>" target="_blank"><img src="<?php echo ($store[2]["image"]); ?>" width="157" height="95" alt="一号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(<?php echo U('Index/package/package');?>?id=<?php echo ($store[2]["id"]); ?>);" style="cursor:pointer;"/></a>
          <a href="<?php echo U('Index/package/package');?>?id=<?php echo ($store[2]["id"]); ?>" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($store[2]["name"]); ?></div><div style="font-size:13px;font-family: SimHei;color:#ff8004;"><?php echo ($store[2]["description"]); ?></div><div style="font-size:18px;font-family: SimHei;color:red;;float:left;">￥<?php echo ($store[2]["price"]); ?></div></a>

         </div>
         <div class="pic">
          <a href="<?php echo U('Index/package/package');?>?id=<?php echo ($store[3]["id"]); ?>" target="_blank"><img src="<?php echo ($store[3]["image"]); ?>" width="157" height="95" alt="一号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(<?php echo U('Index/package/package');?>?id=<?php echo ($store[3]["id"]); ?>);" style="cursor:pointer;"/></a>
          <a href="<?php echo U('Index/package/package');?>?id=<?php echo ($store[3]["id"]); ?>" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($store[3]["name"]); ?></div><div style="font-size:13px;font-family: SimHei;color:#ff8004;"><?php echo ($store[3]["description"]); ?></div><div style="font-size:18px;font-family: SimHei;color:red;;float:left;">￥<?php echo ($store[3]["price"]); ?></div></a>

         </div>
       <!--   <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><img src="../Public/images/travelstore/youhui.png" width="157" height="95" alt="一号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<?php echo U('Index/package/package');?>" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;">桂林4</div><div style="font-size:13px;font-family: SimHei;color:#ff8004;">海南南山+植物园+植物园+呀诺达五日舒适团队</div><div style="font-size:18px;font-family: SimHei;color:red;;float:left;">￥230</div></a>

         </div> -->
        <!-- 图片列表 end -->
       </div>
       <div id="List2"></div>
      </div>
     </div>
     <div class="yougun" onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown()" onmouseout="ISL_StopDown()" >
      <img id="youguntu" src="../Public/images/travelstore/yougun.png"></div>
    </div>
   </div>
</div>


<!--以上这一段是优惠套餐滚动实现-->

<div class="gerenxinxi">
  <img src="../Public/images/travelstore/wodexinxi.png" style="position:relative;top:3px;left:5px;float:left;">
  <div style="position:relative;top:3px;left:7px;font-size:16px;">我的信息</div>
  <div style="position:relative;font-size:13px;top:20px;">尊敬的会员 <span id="smhuiyuanming" style="font-size:13px;"><?php echo ($usr); ?></span>,欢迎您！</div>
   <div style="position:absolute;left:10px;top:62px;font-size:13px;">订单总数：<span id="dingdanzongshu" style="font-size:17px;font-family: SimHei;color:#ff8004"><?php echo ($cou); ?></span></div>
  <table  style="width: 157px;height: 30px;border:1px solid #c6c6c6;position:absolute;top:100px;left:10px;">
<td width="57px" align="center" class="" style= "cursor:pointer;border:1px solid #c6c6c6;font-size:15px;">合计</td>
<td  id="hejijiage"width="100px" align="center" class="" style= "cursor:pointer; font-size:15px;font-family: SimHei;color:red;">￥<?php echo ($price); ?></td>
  </table>
</div>



<div class="chicontent" id="chicontent">
    <div class="chitupian" id="test">
      <div class="chisousuo">
           <form action="<?php echo U('Index/travelStore/travelStore');?>" name="smchisousuo" method="post">
           <div style="position:absolute;top:-10px;left:20px;font-size:14px; color:white;" > 目的地</div>
        <input name="chisousuomudidi" id="chisousuomudidi" type="text" value="" style="position:absolute;top:-11px;left:67px;width:70px;font-size:13px;border-radius:4px;"/>
            <div style="position:absolute;top:-10px;left:145px;font-size:14px; color:white;" > 店名</div>
        <input name="chisousuodianming" id="chisousuodianming" type="text" value="" style="position:absolute;top:-11px;left:180px;width:100px;font-size:13px;border-radius:4px;"/>
        <div style="position:absolute;left:300px;top:-15px; cursor: pointer;"><input type="image" src="../Public/images/makeplan/sousuobiaozhi.png" style="border:0;" ></div>
            </form>

      </div>
<!-- 这是吃的每层楼的div 最多显示三个，你来做页码 -->
<?php if(is_array($content)): foreach($content as $key=>$v): ?><div class="chiceng" name="<?php echo ($v["area"]); ?>">
          <div class="chicengtu" id="chicengtu"><img src="../Public/images/travelstore/chitu.jpg" width="145" height="95"></div>
          <div style="position:relative;top:5px;left:3px;font-size:14px;word-break: break-all;">店名:<span id="smdianming" style="font-size:14;"><?php echo ($v["storeName"]); ?></span></div>
          <div style="position:relative;top:5px;left:3px;font-size:14px;word-break: break-all;">地址:<span class="smdizhi" ><?php echo ($v["area"]); ?></span></div>
          <div style="position:relative;top:5px;left:3px;font-size:14px;word-break: break-all;">电话:<span id="smdianhua"><?php echo ($v["phone"]); ?></span></div>
</div><?php endforeach; endif; ?>
<?php echo ($page); ?>

</div>
<div class="baiduditu">
   <div id="allmap">
</div>
</div>
</div>


<div class="zhucontent" id="zhucontent">

  <div class="zhusousuo">
     <form action="" name="smzhusousuo" method="post">
        <div style="font-size:14px; float:left;">目的地</div>
        <input name="zhusousuomudidi" id="zhusousuomudidi" type="text" value="" style="margin:-3px 0 0 10px;width:240px;font-size:15px;border-radius:1px;border:1.5px solid #AAAAAA;"/>
        <div style="position:absolute;top:70px;font-size:14px">入住日期</div>
        <div style="position:absolute;top:67px;left:86px;"><input id="smruzhuri" type="text" style="width:120px;" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser"></div>
        <div style="position:absolute;top:70px;left:217px;font-size:14px;font-size:14px">退房日期</div>
          <div style="position:absolute;top:67px;left:283px;"><input id="smtuifangri" type="text" style="width:120px;" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser"></div>
          <div style="position:absolute;top:107px;font-size:13px;color:#AAAAAA;">价格</div>

               <div  class="buxian1" id="buxian1">不限</div>
                <input type="checkbox" id="150price" style="position:absolute;top:110px;left:145px;"onclick="ceshi()">
                <div  style="position:absolute;top:107px;left:160px;font-size:13px;">￥150以下</div>
                <input type="checkbox" id="300price" style="position:absolute;top:110px;left:235px;"onclick="ceshi()">
                <div  style="position:absolute;top:107px;left:250px;font-size:13px;">￥150-300</div>
                <input type="checkbox" id="450price" style="position:absolute;top:110px;left:325px;"onclick="ceshi()">
                <div  style="position:absolute;top:107px;left:340px;font-size:13px;">￥301-450</div>
                <input type="checkbox" id="600price" style="position:absolute;top:110px;left:415px;"onclick="ceshi()">
                <div  style="position:absolute;top:107px;left:430px;font-size:13px;">￥451-600</div>
                <input type="checkbox" id="700price" style="position:absolute;top:110px;left:505px;"onclick="ceshi()">
                <div  style="position:absolute;top:107px;left:520px;font-size:13px;">￥600以上</div>

          <div style="position:absolute;top:137px;font-size:13px;color:#AAAAAA;">位置</div>
          <div  id="buxian2" class="buxian2" onclick="showbuxian2()">不限</div>
                <div style="position:absolute;top:137px;left:145px;" onclick="showshangyequ()">商业区<img src="../Public/images/travelstore/xiajiantou.png" style="position:relative;top:-2px;"id="shangyequtu" ></div>
                <div style="position:absolute;top:137px;left:215px;" onclick="showjichang()">机场/火车站<img src="../Public/images/travelstore/xiajiantou.png" style="position:relative;top:-2px;"id="jichangtu"></div>
                <div style="position:absolute;top:137px;left:315px;" onclick="showxingzhengqu()">行政区/下辖市县<img src="../Public/images/travelstore/xiajiantou.png"style="position:relative;top:-2px;" id="xingzhengqutu"></div>
                 <div style="position:absolute;top:137px;left:445px;"onclick="showjingdian()">景点<img src="../Public/images/travelstore/xiajiantou.png" style="position:relative;top:-2px;"id="jingdiantu"></div>





          <img src="../Public/images/travelstore/fengexian.png" style="position:absolute;top:160px;left:20px;">
          <div class="weizhixianshi" id="shangyequ"><span class="weizhiziti">称呼去</span></div>
          <div class="weizhixianshi" id="jichang"><span class="weizhiziti">称呼去</span><span class="weizhiziti">称呼去</span><span class="weizhiziti">称呼去</span></div>
          <div class="weizhixianshi" id="xingzhengqu"><span class="weizhiziti" >金牛区</span><span class="weizhiziti" >金牛区</span><span class="weizhiziti" >金牛区</span><span class="weizhiziti" >金牛区</span></div>
          <div class="weizhixianshi" id="jingdian"><span class="weizhiziti">称呼去</span><span class="weizhiziti">称呼去</span></div>

         <input type="hidden" name="yincang" id="yincang"  value="不限" />

         <div style="position:absolute;top:187px;left:530px; cursor: pointer;"><input type="image" src="../Public/images/travelstore/sousuotu.png" style="border:0;" ></div>
     </form>
  </div>


</div>




</div>







<div class="bottom">
<div class="bottomsm">
  <span class="bottombiao">旅游超市</span><div class="bottomxuanxiang"><a href="<?php echo U('Index/travelStore/smsousuojieguo');?>">住</a><br>
            <a href="<?php echo U('Index/travelStore/travelStore');?>">吃货</a></div>
</div>
<div class="bottomsm">
  <span class="bottombiao">会员中心</span><div class="bottomxuanxiang1"><a href="<?php echo U('Index/vipCenter/myOrders');?>"> 我的订单</a><br>
            <a href="<?php echo U('Index/vipCenter/myGrades');?>">我的积分</a> <br>
            <a href="<?php echo U('Index/vipCenter/myEvaluations');?>"> 我的评价</a><br>
            <a href="<?php echo U('Index/vipCenter/myInformation');?>">我的信息</a> <br>
            <a href="<?php echo U('Index/vipCenter/myMoneyPot');?>">我的储钱罐旅行计划</a><br></div>
</div>
<div class="bottomsm">
  <span class="bottombiao">旅游志</span><div class="bottomxuanxiang"> <a href="<?php echo U('Index/travelBook/travelBook');?>">旅游随感</a> <br>
            <a href="<?php echo U('Index/travelBook/letterList');?>"> 写给未来的信</a></div>
</div>
<div class="bottomsm">
  <span class="bottombiao">主题旅游</span><div class="bottomxuanxiang"> <a href="<?php echo U(Index/travelTheme/travelTheme,'class=学子游','');?>"> 学子游</a><br>
            <a href="<?php echo U(Index/travelTheme/travelTheme,'class=年休假','');?>">年休假</a><br>
            <a href="<?php echo U(Index/travelTheme/travelTheme,'class=美食街','');?>">美食游</a></div>
</div>

<div class="bottomsm">
  <span class="bottombiao">关于游记</span><div class="bottomxuanxiang"> <a href="<?php echo U('Index/index/aboutUs');?>">关于我们</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">联系我们</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">一起合作</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">用户协议</a><br>
            <a href="<?php echo U('Index/index/aboutUs');?>">诚聘英才</a></div>
</div>

<img src="../Public/images/package/steptu.png" class="steptu">

<img src="../Public/images/renzhengwang.png" class="renzhengwang">
<img src="../Public/images/kexin.png" class="kexin">
<img src="../Public/images/chengxin.png" class="chengxin">

</div>
</div>











</div>





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
<script type="text/javascript">
function myformatter(date){
 var y = date.getFullYear();
var m = date.getMonth()+1;
var d = date.getDate();
return y+'-'+(m<10?('0'+m):m)+'-'+(d<10?('0'+d):d);
 }
 function myparser(s){
 if (!s) return new Date();
 var ss = (s.split('-'));
 var y = parseInt(ss[0],10);
 var m = parseInt(ss[1],10);
var d = parseInt(ss[2],10);
 if (!isNaN(y) && !isNaN(m) && !isNaN(d)){
return new Date(y,m-1,d);
 }else{
 return new Date();
 }
 }
 </script>
<script language="javascript" type="text/javascript">
<!--//--><![CDATA[/><!--
//图片滚动列表 mengjia 070816
var Speed = 10; //速度(毫秒)
var Space = 5; //每次移动(px)
var PageWidth = 168; //翻页宽度
var fill = 0; //整体移位
var MoveLock = false;
var MoveTimeObj;
var Comp = 0;
var AutoPlayObj = null;
GetObj("List2").innerHTML = GetObj("List1").innerHTML;
GetObj('ISL_Cont').scrollLeft = fill;
GetObj("ISL_Cont").onmouseover = function(){clearInterval(AutoPlayObj);}
GetObj("ISL_Cont").onmouseout = function(){AutoPlay();}
AutoPlay();
function GetObj(objName){if(document.getElementById){return eval('document.getElementById("'+objName+'")')}else{return eval('document.all.'+objName)}}
function AutoPlay(){ //自动滚动
 clearInterval(AutoPlayObj);
 AutoPlayObj = setInterval('ISL_GoDown();ISL_StopDown();',8000); //间隔时间
}
function ISL_GoUp(){ //上翻开始
 if(MoveLock) return;
 clearInterval(AutoPlayObj);
 MoveLock = true;
 MoveTimeObj = setInterval('ISL_ScrUp();',Speed);
}
function ISL_StopUp(){ //上翻停止
 clearInterval(MoveTimeObj);
 if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0){
  Comp = fill - (GetObj('ISL_Cont').scrollLeft % PageWidth);
  CompScr();
 }else{
  MoveLock = false;
 }
 AutoPlay();
}
function ISL_ScrUp(){ //上翻动作
 if(GetObj('ISL_Cont').scrollLeft <= 0){GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft + GetObj('List1').offsetWidth}
 GetObj('ISL_Cont').scrollLeft -= Space ;
}
function ISL_GoDown(){ //下翻
 clearInterval(MoveTimeObj);
 if(MoveLock) return;
 clearInterval(AutoPlayObj);
 MoveLock = true;
 ISL_ScrDown();
 MoveTimeObj = setInterval('ISL_ScrDown()',Speed);
}
function ISL_StopDown(){ //下翻停止
 clearInterval(MoveTimeObj);
 if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0 ){
  Comp = PageWidth - GetObj('ISL_Cont').scrollLeft % PageWidth + fill;
  CompScr();
 }else{
  MoveLock = false;
 }
 AutoPlay();
}
function ISL_ScrDown(){ //下翻动作
 if(GetObj('ISL_Cont').scrollLeft >= GetObj('List1').scrollWidth){GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft - GetObj('List1').scrollWidth;}
 GetObj('ISL_Cont').scrollLeft += Space ;
}
function CompScr(){
 var num;
 if(Comp == 0){MoveLock = false;return;}
 if(Comp < 0){ //上翻
  if(Comp < -Space){
   Comp += Space;
   num = Space;
  }else{
   num = -Comp;
   Comp = 0;
  }
  GetObj('ISL_Cont').scrollLeft -= num;
  setTimeout('CompScr()',Speed);
 }else{ //下翻
  if(Comp > Space){
   Comp -= Space;
   num = Space;
  }else{
   num = Comp;
   Comp = 0;
  }
  GetObj('ISL_Cont').scrollLeft += num;
  setTimeout('CompScr()',Speed);
 }
}
//--><!]]>

</script>
</body>
</html>


<!-- 以下是百度地图代码 -->
<script type="text/javascript">
  // 百度地图API功能
  var zidingdizhi = "北京大学";

  var map = new BMap.Map("allmap");
  var point = new BMap.Point(116.331398,39.897445);
  map.centerAndZoom(point,12);
  // 创建地址解析器实例
  var myGeo = new BMap.Geocoder();
  // 将地址解析结果显示在地图上,并调整地图视野
  myGeo.getPoint(zidingdizhi, function(point){
    if (point) {
      map.centerAndZoom(point, 16);
      map.addOverlay(new BMap.Marker(point));
    }else{
      alert("您选择地址没有解析到结果!");
    }
  }, "北京市");

  $(".chiceng").click(function(){
    // alert($(this).attr("name"));

    zidingdizhi=$(this).attr("name");
     var map = new BMap.Map("allmap");
  var point = new BMap.Point(116.331398,39.897445);
  map.centerAndZoom(point,12);
  // 创建地址解析器实例
  var myGeo = new BMap.Geocoder();
  // 将地址解析结果显示在地图上,并调整地图视野
  myGeo.getPoint(zidingdizhi, function(point){
    if (point) {
      map.centerAndZoom(point, 16);
      map.addOverlay(new BMap.Marker(point));
    }else{
      alert("您选择地址没有解析到结果!");
    }
  }, "北京市");

  });

  // 以下是搜索栏里价格不限变色处理函数
 function ceshi()
 {
  if(document.getElementById("150price").checked){ buxian1.style.color="black"}
    else if(document.getElementById("300price").checked){ buxian1.style.color="black"}
      else if(document.getElementById("450price").checked){ buxian1.style.color="black"}
        else if(document.getElementById("600price").checked){ buxian1.style.color="black"}
          else if(document.getElementById("700price").checked){ buxian1.style.color="black"}
  else
  buxian1.style.color="blue"
 }
// 以下是位置变色处理函数
var weizhishangchuan = "不限";
 function showshangyequ()
 {

   document.images['shangyequtu'].src='../Public/images/travelstore/shangjiantou.png';
   document.images['jichangtu'].src='../Public/images/travelstore/xiajiantou.png';
   document.images['xingzhengqutu'].src='../Public/images/travelstore/xiajiantou.png';
   document.images['jingdiantu'].src='../Public/images/travelstore/xiajiantou.png';
   jichang.style.display="none";
   xingzhengqu.style.display="none";
   jingdian.style.display="none";
   shangyequ.style.display="block";


 }
 function showjichang()
 {
   document.images['jichangtu'].src='../Public/images/travelstore/shangjiantou.png';
   document.images['shangyequtu'].src='../Public/images/travelstore/xiajiantou.png';
   document.images['xingzhengqutu'].src='../Public/images/travelstore/xiajiantou.png';
   document.images['jingdiantu'].src='../Public/images/travelstore/xiajiantou.png';

   xingzhengqu.style.display="none";
   jingdian.style.display="none";
   shangyequ.style.display="none";
    jichang.style.display="block";
 }
  function showxingzhengqu()
 {
   document.images['xingzhengqutu'].src='../Public/images/travelstore/shangjiantou.png';
   document.images['shangyequtu'].src='../Public/images/travelstore/xiajiantou.png';
   document.images['jichangtu'].src='../Public/images/travelstore/xiajiantou.png';
   document.images['jingdiantu'].src='../Public/images/travelstore/xiajiantou.png';

   jichang.style.display="none";
   jingdian.style.display="none";
   shangyequ.style.display="none";
    xingzhengqu.style.display="block";
 }
   function showjingdian()
 {
   document.images['jingdiantu'].src='../Public/images/travelstore/shangjiantou.png';
   document.images['shangyequtu'].src='../Public/images/travelstore/xiajiantou.png';
   document.images['jichangtu'].src='../Public/images/travelstore/xiajiantou.png';
   document.images['xingzhengqutu'].src='../Public/images/travelstore/xiajiantou.png';

   jichang.style.display="none";
   xingzhengqu.style.display="none";
   shangyequ.style.display="none";
    jingdian.style.display="block";
 }
 function showbuxian2()
 {
   $(".weizhiziti").removeClass("weizhiziti2");
  buxian2.style.color="blue"
  document.images['jingdiantu'].src='../Public/images/travelstore/xiajiantou.png';
   document.images['shangyequtu'].src='../Public/images/travelstore/xiajiantou.png';
   document.images['jichangtu'].src='../Public/images/travelstore/xiajiantou.png';
   document.images['xingzhengqutu'].src='../Public/images/travelstore/xiajiantou.png';
    jichang.style.display="none";
   xingzhengqu.style.display="none";
   shangyequ.style.display="none";
    jingdian.style.display="none";

    weizhishangchuan=$('.buxian2').html();
     $("#yincang").val(weizhishangchuan);
      // alert($("#yincang").val());

 }

  $(".weizhiziti").click(function(){
    buxian2.style.color="black"
    $(".weizhiziti").removeClass("weizhiziti2");

    $(this).addClass("weizhiziti2");
    weizhishangchuan=$(this).html();
     $("#yincang").val(weizhishangchuan);
      // alert($("#yincang").val());

  });


  $("#zhusousuomudidi").blur(function(){
		var url = '<?php echo U('Index/travelStore/living');?>';
     $.post(url,{data:$("#zhusousuomudidi").val()},function(data){

      // alert(data['address'][2]);
      document.getElementById("xingzhengqu").innerHTML=data['xingzhengqu'];
    }
      )

   }
  )


</script>
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