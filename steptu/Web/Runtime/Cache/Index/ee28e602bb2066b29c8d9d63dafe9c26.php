<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	    <link rel="stylesheet" href="../Public/css/package/package.css" media="all" type="text/css">
	    <link rel="stylesheet" href="../Public/css/css.css" media="all">

	    <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>

	<title>优惠套餐</title>
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
var $root = $('html, body');
$('a').click(function() {
    $root.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});

$(document).ready(function() {

  if($.cookie('username') != '' && $.cookie('username') != null && $.cookie('username') != undefined){

      loganniu.style.display="none";
      reanniu.style.display="none";
       document.getElementById("dengluchenggong").innerHTML=$.cookie('username')+"&nbsp"+"&nbsp"+"<img src='../Public/images/dengluchenggong.png' >";
      tuichudenglu.style.display="block";
    }

});

</script>
<link href="../Public/css/calendar.css" rel="stylesheet" type="text/css" />

<script src="../Public/js/Calendar.js"></script>
<script src="../Public/js/jquery.js"></script>
<script src="../Public/js/fun.js"></script>

 <!-- bjqs.css contains the *essential* css needed for the slider to work -->
    <link rel="stylesheet" href="../Public/css/package/bjqs.css">


    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider -->
    <link rel="stylesheet" href="../Public/css/package/demo.css">
    <script src="../Public/js/package/bjqs-1.3.min.js"></script>

 <script type="text/javascript" src="__JS__/jquery.cookie.js"></script>

</head>

<body >
		  <STYLE TYPE="text/css">

<!--

BODY {background-image: URL(../Public/images/package/background.png);

background-position:center top;

background-repeat: no-repeat;

}

-->1
</STYLE>
<div class="quanbu">
<a href="javascript:;"class=" btn-large theme-login" style="" id="loganniu"><img src="../Public/images/login.png"   style=" position: absolute;left: 822px;top: 70px;cursor: pointer;"></a>
<a href="<?php echo U('Index/index/register','','');?>"><img src="__IMG__/register.png" style="position: absolute;left: 920px;top: 70px;" id="reanniu"></a>
<div style="position: absolute;left: 822px;top: 0px;font-size:14px;color:white"id="dengluchenggong"></div>
<div id="tuichudenglu" style="position: absolute;left: 960px;top: 5px;font-size:14px;color:white;display:none;cursor: pointer;">退出登录</div>

	<a href="<?php echo U('Index/travelStore/travelStore');?>"><img src="__IMG__/travelsm.png" class="travelsm"></a>
        <a href="<?php echo U('Index/vipCenter/myInformation');?>"><img src="__IMG__/personal.png" class="personal"></a>
        <a href="<?php echo U('Index/travelTheme/travelTheme');?>"> <img src="__IMG__/travel.png" class="travel" ></a>
        <a href="<?php echo U('Index/makePlan/makePlan');?>"> <img src="__IMG__/makeplan.png" class="makeplan"></a>
        <a href="<?php echo U('Index/index/index');?>"><img src="__IMG__/index.png" class="index"></a>
        <a href="<?php echo U('Index/travelBook/travelBook');?>"><img src="__IMG__/travelbook.png" class="travelbook"></a>
<img src="../Public/images/xuanchuan.png"class="xuanchuan">




<div class="zhongyang">
<div class="content">

<div id="taocanbiaoti" class="taocanbiaoti">
   <?php echo ($scency["name"]); ?>
</div>
<div class="yulantu">
   <div id="banner-fade">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li><img src="<?php echo ($scency["image"]); ?>.jpg" ></li>
          <li><img src="<?php echo ($scency["image"]); ?>.jpg" ></li>
          <li><img src="<?php echo ($scency["image"]); ?>.jpg" title="Automatically generated caption"></li>

        </ul>
        <!-- end Basic jQuery Slider -->

      </div>


</div>
<div class="jiagerili" >
	<div class="calendar">
   <div class="outer clearfix" id="calendarcontainer"> </div></div>
</div>
<img src="../Public/images/package/youhuijiakuang.png" class="youhuijiakuang">
<div class="youhuijiazi">优惠价: ￥<div class="youhuijia" id="youhuijia">&nbsp<?php echo ($scency["price"]); ?></div><div class="youhuijiazi2">起</div></div>
<div class="feiyongshuoming" id="feiyongshuoming">
    <?php echo ($scency["descriptionPrice"]); ?>
</div>

<div class="yudinglan">

<form action="" name="taocanyuding" method="post" >
  <div class="taocanyudingziti">出游日期:</div><input name="chufashijianshuru" id="chufashijianshuru" type="text" value="" style="position:absolute;width:195px;left:80px;top:8px;border-radius:4px;"/> <div class="taocanyudingziti">出发城市:</div><input name="chufachengshishuru" id="chufachengshishuru" type="text" value="" style="position:absolute;width:195px;left:80px;top:42px;border-radius:4px;"/><div class="taocanyudingziti">出游人数:</div> <input name="chufarenshuchengren" id="chufarenshuchengren" type="text" value=""style="position:absolute;width:35px;left:80px;top:76px;border-radius:4px;"><div style="position:absolute;left:120px;top:76px;font-family: serif;font-size: 14px;">成人</div><input name="chufarenshuertong" id="chufarenshuertong" type="text" value=""style="position:absolute;width:35px;left:180px;top:76px;border-radius:4px;"><div style="position:absolute;left:220px;top:76px;font-family: serif;font-size: 14px;">儿童</div>


  <a href="javascript:"><div style="position:absolute;left:100px;top:120px;" id="yudinganniu"><img src="../Public/images/package/yuding.png" style="border:0;" ></div></a>
 </form>

</div>
<div class="neironghengtiao">
<table bgcolor="#0384df" style="width: 750px;height: 40px;border:0px solid #FFFFFF;">
<td width="99px" align="center" class="neironghengtiaozi" style= "cursor:pointer; "><a href="#youhuihuodong">优惠活动</a></td>
<td width="99px" align="center" class="neironghengtiaozi" style= "cursor:pointer; "><a href="#chanpintese">产品特色</a></td>
<td width="99px" align="center" class="neironghengtiaozi" style= "cursor:pointer; "><a href="#xingchengjieshao">行程介绍</a></td>
<td width="99px" align="center" class="neironghengtiaozi" style= "cursor:pointer; "><a href="#yudingxuzhi">预订须知</a></td>
<td width="99px" align="center" class="neironghengtiaozi" style= "cursor:pointer; "><a href="#youkedianping">游客点评</a></td>
<td width="99px" align="center" class="neironghengtiaozi" style= "cursor:pointer; "><a href="#xiangguanchanpin">相关产品</a></td>
<td width="156px"></td>
</table>
</div>
<div class="neirongtiao" id="youhuihuodong"><img src="../Public/images/package/neirongtiao.png" style="float:left"><div style="position:relative;top:-25px;left:25px;font-size: 15px;color: white;font-family: inherit;">优惠活动</div></div>
<div class="youhuihuodongcontent" id="youhuihuodongcontent"><?php echo ($scency["discountAction"]); ?></div>

<div class="neirongtiao" id="chanpintese"><img src="../Public/images/package/neirongtiao.png" style="float:left"><div style="position:relative;top:-25px;left:25px;font-size: 15px;color: white;font-family: inherit;">产品特色</div></div>
<div class="youhuihuodongcontent" id="chanpintesecontent"><?php echo ($scency["characteristics"]); ?></div>

<div class="neirongtiao" id="xingchengjieshao"><img src="../Public/images/package/neirongtiao.png" style="float:left"><div style="position:relative;top:-25px;left:25px;font-size: 15px;color: white;font-family: inherit;">行程介绍</div></div>
<div class="youhuihuodongcontent" id="xingchengjieshaocontent"><?php echo ($scency["routeDescription"]); ?></div>


<div class="neirongtiao" id="yudingxuzhi"><img src="../Public/images/package/neirongtiao.png" style="float:left"><div style="position:relative;top:-25px;left:25px;font-size: 15px;color: white;font-family: inherit;">预定须知</div></div>
<div class="youhuihuodongcontent" id="yudingxuzhicontent"><?php echo ($scency["bookInformation"]); ?></div>

<div class="neirongtiao" id="youkedianping"><img src="../Public/images/package/neirongtiao.png" style="float:left"><div style="position:relative;top:-25px;left:25px;font-size: 15px;color: white;font-family: inherit;">游客点评</div></div>
<div class="youhuihuodongcontent" id="youkedianpingcontent">
<div style="width:732px;height:38px;border:1px solid #d2d2d2;position:relative;top:-20px;left:5px;">


 <div style="width:122px;height:25px;margin:5px 0 0 15px;text-align:center;float:left;line-height:25px;font-size:16px;cursor:pointer;" id="haha1" >全部点评()</div>
  <div style="width:122px;height:25px;margin:5px 0 0 15px;text-align:center;float:left;line-height:25px;font-size:16px;cursor:pointer;" id="haha2" onclick="this.form.submit()">满意()</div>
  <div style="width:122px;height:25px;margin:5px 0 0 15px;text-align:center;float:left;line-height:25px;font-size:16px;cursor:pointer;" id="haha3" onclick="this.form.submit()">一般()</div>
    <div style="width:122px;height:25px;margin:5px 0 0 15px;text-align:center;float:left;line-height:25px;font-size:16px;cursor:pointer;" id="haha4" onclick="this.form.submit()">不满意()</div>

</div>
<!-- 这是一层评论楼 -->
<div style="width:727px;margin:5px 0 0 0;">
<img src="../Public/images/package/fengexian3.jpg" style="position:relative;left:10px;">
<div style="width:60px;height:60px;border:1px solid #d2d2d2;position:relative;left:13px;float:left"><img src="../pu">这里放头像</div>
<div style="width:46px;height:22px;background-color:#FF6C0A;margin:5px 0 0 25px;color:white;font-size:14px;center;float:left;line-height:22px;text-align:center;">满意</div>
<div style="width:645px;float:left;position:relative;left:25px;margin:5px 0 0 0;font-size:14px;">哈弗士大夫和大厦附近阿萨德飞结婚卡士大夫阿什顿房价肯定是减肥换金水发酵卡上的符合电费iweuiqworu活动时间复活节大师傅阿萨德飞回家大师傅开始大家发货撒旦就地方挥洒的减肥撒娇地方就阿斯顿飞回家阿斯顿飞机的萨芬很受打击飞洒地地方开始的缴费卡拉斯地方大煞风景阿斯蒂芬卡三飞洒的减肥哈三等奖回复就爱上看到附近拉上阿萨德加咖啡哈三等奖等奖盛大开放就撒旦法士大夫就卡死的浪费</div> <!-- 限定150字 -->
</div>








<div style="width:727px;height:70px;"></div>

</div>

<div class="neirongtiao" id="xiangguanchanpin"><img src="../Public/images/package/neirongtiao.png" style="float:left"><div style="position:relative;top:-25px;left:25px;font-size: 15px;color: white;font-family: inherit;">相关产品</div></div>
<div class="youhuihuodongcontent" id="xiangguanchanpincontent">


    <div style="position:relative;left:30px;top:-20px">
    <div class="rollBox">
     <div class="zuogun" onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp1()" onmouseout="ISL_StopUp()" onmouseover="document.images['zuoguntu'].src='../Public/images/zuogun1.png'">
      <img id="zuoguntu" src="../Public/images/zuogun.png">
    </div>
     <div class="Cont" id="ISL_Cont">
      <div class="ScrCont">
       <div id="List1">
        <!-- 图片列表 begin -->
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><img src="../Public/images/youhui1.jpg" width="145" height="145" alt="一号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;">桂林</div><div style="font-size:15px;font-family: SimHei;color:#ff8004;">2300起</div></a>

         </div>
 <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=2" target="_blank"><img src="../Public/images/youhui2.jpg" width="145" height="145" alt="二号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=2" target="_blank">二号图片</a>

         </div>
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=3" target="_blank"><img src="../Public/images/youhui3.jpg" width="145" height="145" alt="三号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=3" target="_blank">三号图片</a>

         </div>
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=4" target="_blank"><img src="/image/4.jpg" width="145" height="145" alt="四号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=4" target="_blank">四号图片</a>

         </div>
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=5" target="_blank"><img src="/image/5.jpg" width="145" height="145" alt="五号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=5" target="_blank">五号图片</a>

         </div>
 <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=6" target="_blank"><img src="/image/1.jpg" width="145" height="145" alt="您自定义"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=6" target="_blank">您自定义</a>

         </div>
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=7" target="_blank"><img src="/image/1.jpg" width="145" height="145" alt="您自定义"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=7" target="_blank">您自定义</a>

         </div>
        <!-- 图片列表 end -->
       </div>
       <div id="List2"></div>
      </div>
     </div>
     <div class="yougun" onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown1()" onmouseout="ISL_StopDown()" onmouseover="document.images['youguntu'].src='../Public/images/yougun1.png'" >
        <img id="youguntu" src="../Public/images/yougun.png"></div>
    </div></div></div>



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

<div class="bottomsm" >
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




<script src="../Public/js/package/package.js" type="text/javascript"></script>
<script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : 273,
            width       : 412,
            responsive  : true
          });

        });
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

$("#yudinganniu").click(function(){
if($.cookie('username') != '' && $.cookie('username') != null && $.cookie('username') != undefined){
  console.log("123")
    window.location.href="/steptu/index.php/Index/package/order_1.html";
}
 else
 alert("请先登录");
})

$("#haha1").click(function(){
  $("#yincang").val("quanbudianping");
  // alert($("#yincang").val());
  url="";
  $.post(url,{data:$("#yincang").val()},function(data){
    location.reload();
  });

})
$("#haha2").click(function(){
  $("#yincang").val("manyi");
  // alert($("#yincang").val());
  url="";
  $.post(url,{data:$("#yincang").val()},function(data){
    location.reload();
  });

})
$("#haha3").click(function(){
  $("#yincang").val("yiban");
  // alert($("#yincang").val());
  url="";
  $.post(url,{data:$("#yincang").val()},function(data){
    location.reload();
  });

})
$("#haha4").click(function(){
  $("#yincang").val("bumanyi");
  // alert($("#yincang").val());
  url="";
  $.post(url,{data:$("#yincang").val()},function(data){
    location.reload();
  });

})
</script>




</body>

</html>