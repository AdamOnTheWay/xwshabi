<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../Public/css/makeplan/makeplan.css" media="all" type="text/css">
    <link rel="stylesheet" href="../Public/css/css.css" media="all">
		 <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>

    <script type="text/javascript" src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
      <script type="text/javascript" src="__JS__/jquery.cookie.js"></script>
<script type="text/javascript" src="../Public/js/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
  <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
  <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">

	<title>发起活动</title>
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
	$(".lou").click(function(){
		$.post("<?php echo U('Index/makePlan/searchPlan');?>",{id:$(this).attr('id')},function(date){
			// alert($("#biaohuodongshijian").html());
      $("#biaohuodongmingcheng").html(date["theme"]);
			$("#biaohuodongshijian").html(date["startTime"]);
			$("#biaofabushijian").html(date["publishtime"]);
			$("#biaohuodongshifadi").html(date["startarea"]);
			$("#biaohuodongmudidi").html(date["intentarea"]);
			$("#biaozuidacanyurenshu").html(date["maxnumber"]);
			$("#biaobaomingrenshu").html(date["number"]);
			$("#biaohuodongzhuangtai").html(date["status"]);
			$("#biaofaqiren").html(date["initiator"]);
			$("#biaohuodongneirong").html(date["content"]);
			$("#actionId").attr("value",date["id"]);

		});
	});
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
<STYLE TYPE="text/css">

<!--

BODY {background-image: URL(../Public/images/makeplan/background.png);

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
-->1
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
<a href="javascript:;"class=" btn-large theme-login" style="" id="loganniu"><img src="../Public/images/login.png"   style=" position: absolute;left: 822px;top: 70px;cursor: pointer;"></a>
<a href="<?php echo U('Index/index/register','','');?>"><img src="__IMG__/register.png" style="position: absolute;left: 920px;top: 70px;" id="reanniu"></a>
<div style="position: absolute;left: 822px;top: 0px;font-size:14px;color:white"id="dengluchenggong"></div>
<div id="tuichudenglu" style="position: absolute;left: 960px;top: 5px;font-size:14px;color:white;display:none;cursor: pointer;">退出登录</div>


<!-- 这一个div是左侧的条 -->
<div class="content2">
   <div class="content2tiao"><span style="color:white;font-size:19px;font-family: serif;
position:relative;top:15px;left:20px;">发起活动</span></div>
  <form action="<?php echo U('Index/makePlan/savePlan');?>" name="huodongsousuo" method="post">
    <div style="position:relative;left:10px;top:10px;font-size:14px;">活动类别</div>
     <input name="huodongleibie" id="huodongleibie" type="text" value="" style="position:relative;left:10px;top:15px;font-size:14px;border:1px solid #83a9e1;border-radius:4px;"/>
      <div style="position:relative;left:10px;top:20px;font-size:14px;">活动时间</div>
        <div style="position:relative;top:25px;left:10px;"><input name="mphuodongshijian" id="mphuodongshijian" type="text" value=""style="width:150px;" class="easyui-datebox" required="required"data-options="formatter:myformatter,parser:myparser" /> </div>
        <div style="position:relative;left:10px;top:35px;font-size:14px;">活动始发地</div>
         <input name="mpshifadi" id="mpshifadi" type="text" value="必填" style="position:relative;left:10px;top:40px;font-size:14px;border:1px solid #83a9e1;border-radius:4px;"/>
         <div style="position:relative;left:10px;top:50px;font-size:14px;">活动目的地</div>
         <input name="mpmudidi" id="mpmudidi" type="text" value="必填" style="position:relative;left:10px;top:55px;font-size:14px;border:1px solid #83a9e1;border-radius:4px;"/>
         <div style="position:relative;left:10px;top:65px;font-size:14px;">活动内容</div>
         <textarea name="mpcontent" cols="16" rows="4" maxlength="34"style="position:relative;left:10px;top:70px;font-size:15px;border: 1px solid #83a9e1;" >最多34字</textarea>
          <div style="position:relative;left:10px;top:80px;font-size:14px;">最大参与人数</div>
            <input name="mpcanyurenshu" id="mpcanyurenshu" type="text" value="必填" style="position:relative;left:10px;top:85px;font-size:14px;border:1px solid #83a9e1;border-radius:4px;"/>
            <div style="position:relative;left:10px;top:95px;font-size:14px;">发起人</div>
            <input name="mpfaqiren" id="mpfaqiren" type="text" value="必填" style="position:relative;left:10px;top:100px;font-size:14px;border:1px solid #83a9e1;border-radius:4px;"/>
             <div style="position:relative;left:10px;top:110px;font-size:14px;">活动备注</div>
              <textarea name="mpbeizhu" cols="16" rows="4" style="position:relative;left:10px;top:115px;font-size:15px;border: 1px solid #83a9e1;" >最多34字</textarea>
              <div style="position:absolute;top:615px;left:10px;color:#0032d3"><input name="checkbox" type="checkbox" checked="checked" value="checkbox" style="position:relative;top:-3px;" required="required">
     已阅读并同意相关法律条约
    </div>
    <div style="position:absolute;left:40px;top:650px; cursor: pointer;"><input type="image" src="../Public/images/makeplan/wancheng.png" style="border:0;" onclick="this.form.submit()"></div>
    </form>
</div>



<div class="zhongyang">
<img src="../Public/images/makeplan/mptiao.png" class="mptiao">
<div class="sousuotiao">
<!-- <div style="font-size:16px; color:white;position:relative; top:5px; left:5px; float:left;"> 活动搜索</div> -->
<form action="<?php echo U('Index/makePlan/makePlan');?>" name="huodongsousuo" method="post">
     <div style="position:absolute;top:48px;left:5px;font-size:14px; color:white;" > 始发地</div>
     <input name="shifadi" id="shifadi" type="text" value="" style="position:absolute;top:46px;left:55px;width:70px;font-size:14px;border-radius:4px;"/>
     <div style="position:absolute;top:48px;left:130px;font-size:14px; color:white;" > 目的地</div>
     <input name="mudidi" id="mudidi" type="text" value="" style="position:absolute;top:46px;left:180px;width:70px;font-size:14px;border-radius:4px;"/>
      <div style="position:absolute;top:48px;left:260px;font-size:14px; color:white;" > 活动类别</div>
         <input name="huodongleibie2" id="mudidi" type="text" value="" style="position:absolute;top:46px;left:325px;width:70px;font-size:14px;border-radius:4px;"/>
    <div style="position:absolute;top:48px;left:405px;font-size:14px; color:white;" > 活动时间</div>
    <div style="position:absolute;top:48px;left:465px;"><input id="huodongshijian" name="huodongshijian" type="text" style="width:100px;" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser"></div>
      <div style="position:absolute;top:48px;left:575px;font-size:14px; color:white;" > 发布时间</div>
    <div style="position:absolute;top:48px;left:635px;"><input id="fabushijian" name="fabushijian" type="text" style="width:100px;" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser"></div>
     <div style="position:absolute;left:748px;top:45px; cursor: pointer;"><input type="image" src="../Public/images/makeplan/sousuobiaozhi.png" style="border:0;" ></div>
   </form>
</div>

<div class="content">

<div style="font-size:17px;color:black;position:relative;top:10px;left:10px;float:left;">主题活动</div>
<div style="font-size:13px;color:black;float:left;position:relative;left:30px;top:13px;float:left;">全部</div>
<div style="font-size:13px;color:black;float:left;position:relative;left:40px;top:13px;float:left;">我发起的活动</div>
<div style="font-size:13px;color:black;float:left;position:relative;left:50px;top:13px;float:left;">我参与的活动</div>
<div style="position:relative;left:60px;top:16px;float:left;"><img src="../Public/images/makeplan/fengexian2.png"></div>
<div style="float:left;position:relative;top:50px;left:-283px;"><img src="../Public/images/makeplan/fengexian.png"></div>
<div class="makeplanlou">
  <?php if(is_array($content)): foreach($content as $key=>$v): ?><div class="lou" id="<?php echo ($v["id"]); ?>">
       <img src="../Public/images/makeplan/loubiao.png" style="float:left;">
       <div id="louhuodongmingcheng" class="louhuodongmingcheng" style="height:26px;"><?php echo ($v["theme"]); ?></div>
          <div style="position: absolute;font-size:13px;float:left;">活动时间:</div>
             <div id="louhuodongshijian" class="louhuodongshijian"><?php echo ($v["startTime"]); ?></div>
                <div style="position:absolute;left:150px;font-size:13px;float:left;">发布时间:</div>
                 <div id="loufabushijian" class="loufabushijian"><?php echo ($v["publishtime"]); ?></div>
                  <div style="position:absolute;top:48px;font-size:13px;float:left;">发起人数:</div>
                     <div id="loufaqirenshu" class="loufaqirenshu"><?php echo ($v["maxnumber"]); ?></div>
                       <div style="position:absolute;top:48px;left:150px;font-size:13px;float:left;">报名人数:</div>
                       <div id="loubaomingrenshu" class="loubaomingrenshu"><?php echo ($v["number"]); ?></div>
                       <div style="position:absolute;top:72px;font-size:13px;float:left;">活动状态:</div>
                            <div id="louhuodongzhuangtai" class="louhuodongzhuangtai"><?php echo ($v["status"]); ?></div>
                            <img src="../Public/images/makeplan/fengexian.png" style="position:absolute;top:103px;left:-27px;">

   </div><?php endforeach; endif; ?>
  <div><?php echo ($page); ?></div>

<!-- 重复上一个div就可以了 -->


  <!--  <a href=""><img src="../Public/images/makeplan/shangye.png" style="position:absolute;top:680px;left:30px;cursor: pointer;"></a>
   <a href=""><img src="../Public/images/makeplan/xiaye.png" style="position:absolute;top:680px;left:210px;cursor: pointer;"></a> -->
</div>

<div id="biaohuodongmingcheng" class="biaohuodongmingcheng"><?php echo ($content[0]['theme']); ?></div>
    <div class="biao">

       <div id="startTime" style="position:relative;font-size:14px;top:16px;left:25px;float:left">活动时间:</div>
        <div id="biaohuodongshijian"style="position:relative;font-size:14px;top:16px;left:25px"><?php echo ($content[0]['startTime']); ?></div>
          <div style="height:7px"><img src="../Public/images/makeplan/biaofenge.png" style="position:relative;top:16px;"></div>
            <div style="position:relative;font-size:14px;top:16px;left:25px;float:left">发布时间:</div>
         <div id="biaofabushijian"style="position:relative;font-size:14px;top:16px;left:25px"><?php echo ($content[0]['publishtime']); ?></div>
          <div style="height:7px"><img src="../Public/images/makeplan/biaofenge.png" style="position:relative;top:16px;"></div>
            <div style="position:relative;font-size:14px;top:16px;left:25px;float:left">活动始发地:</div>
         <div id="biaohuodongshifadi"style="position:relative;font-size:14px;top:16px;left:25px"><?php echo ($content[0]['startTime']); ?></div>
          <div style="height:7px"><img src="../Public/images/makeplan/biaofenge.png" style="position:relative;top:16px;"></div>
            <div style="position:relative;font-size:14px;top:16px;left:25px;float:left">活动目的地:</div>
         <div id="biaohuodongmudidi"style="position:relative;font-size:14px;top:16px;left:25px"><?php echo ($content[0]['intentarea']); ?></div>
          <div style="height:7px"><img src="../Public/images/makeplan/biaofenge.png" style="position:relative;top:16px;"></div>
            <div style="position:relative;font-size:14px;top:16px;left:25px;float:left">最大参与人数:</div>
         <div id="biaozuidacanyurenshu"style="position:relative;font-size:14px;top:16px;left:25px"><?php echo ($content[0]['maxnumber']); ?></div>
          <div style="height:7px"><img src="../Public/images/makeplan/biaofenge.png" style="position:relative;top:16px;"></div>
          <div style="position:relative;font-size:14px;top:16px;left:25px;float:left">报名人数:</div>
         <div id="biaobaomingrenshu"style="position:relative;font-size:14px;top:16px;left:25px"><?php echo ($content[0]['number']); ?></div>
          <div style="height:7px"><img src="../Public/images/makeplan/biaofenge.png" style="position:relative;top:16px;"></div>
          <div style="position:relative;font-size:14px;top:16px;left:25px;float:left">活动状态:</div>
         <div id="biaohuodongzhuangtai"style="position:relative;font-size:14px;top:16px;left:25px"><?php echo ($content[0]['remark']); ?></div>
          <div style="height:7px"><img src="../Public/images/makeplan/biaofenge.png" style="position:relative;top:16px;"></div>
           <div style="position:relative;font-size:14px;top:16px;left:25px;float:left">发起人:</div>
         <div id="biaofaqiren"style="position:relative;font-size:14px;top:16px;left:25px"><?php echo ($content[0]['initiator']); ?></div>
          <div style="height:7px"><img src="../Public/images/makeplan/biaofenge.png" style="position:relative;top:16px;"></div>
          <div style="position:relative;font-size:14px;top:16px;left:25px;float:left">活动内容:</div>
         <div id="biaohuodongneirong"style="position:relative;font-size:14px;top:16px;left:25px;width:280px;"><?php echo ($content[0]['content']); ?></div>
          <div style="height:7px"><img src="../Public/images/makeplan/biaofenge.png" style="position:relative;top:16px;"></div>
          <div style="position:relative;font-size:13px;top:21px;left:25px;float:left;color:#0032d3" >发起人信息</div>
          <div style="position:relative;font-size:13px;top:21px;left:45px;float:left;color:#0032d3" >已阅读并同意相关法律条约</div>
          <img src="../Public/images/makeplan/baoming.png" style="position:relative;left:80px;width:80px;top:15px;">
          <input type="hidden" id="actionId" value="">  <!-- //可以把这里做成表单，好提交 -->
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

</body>
</html>