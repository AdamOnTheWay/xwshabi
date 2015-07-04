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
-->1
</STYLE>
<div class="quanbu">
<a href="<?php echo U('Index/travelStore/smsousuojieguo');?>"><img src="../Public/images/travelstore/zhu.png" class="zhu"></a>
<a href="<?php echo U('Index/travelStore/travelStore');?>"><img src="../Public/images/travelstore/chi.png" class="chi" onclick="showchi()"></a>
	<a href="<?php echo U('Index/travelStore/travelStore');?>"><img src="__IMG__/travelsm.png" class="travelsm"></a>
        <a href="<?php echo U('Index/vipCenter/myInformation');?>"><img src="__IMG__/personal.png" class="personal"></a>
        <a href="<?php echo U('Index/travelTheme/travelTheme');?>"> <img src="__IMG__/travel.png" class="travel" ></a>
        <a href="<?php echo U('Index/makePlan/makePlan');?>"> <img src="__IMG__/makeplan.png" class="makeplan"></a>
        <a href="<?php echo U('Index/index/index');?>"><img src="__IMG__/index.png" class="index"></a>
        <a href="<?php echo U('Index/travelBook/travelBook');?>"><img src="__IMG__/travelbook.png" class="travelbook"></a>
<img src="../Public/images/xuanchuan.png"class="xuanchuan">



<div class="zhongyang">
<img src="../Public/images/travelstore/smtiao.png" style="">
<div class="content11">
	<div class="zhusousuo2">
   <form action="" name="smzhusousuo" method="post">
        <div style="font-size:14px; float:left;position:absolute;top:10px;left:10px;">目的地</div>
        <input name="zhusousuomudidi" id="zhusousuomudidi" type="text" value="" style="position:absolute;top:10px;left:60px;width:240px;font-size:15px;border-radius:1px;border:1.5px solid #AAAAAA;"/>
        <div style="position:absolute;top:45px;left:10px;font-size:14px">入住日期</div>
        <div style="position:absolute;top:42px;left:76px;"><input id="smruzhuri" type="text" style="width:120px;" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser"></div>
        <div style="position:absolute;top:45px;left:222px;font-size:14px;font-size:14px">退房日期</div>
          <div style="position:absolute;top:42px;left:283px;"><input id="smtuifangri" type="text" style="width:120px;" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser"></div>
          <div style="position:absolute;top:77px;left:10px;font-size:13px;color:#AAAAAA;">价格</div>

               <div  class="buxian11" id="buxian1">不限</div>
                <input type="checkbox" id="150price" style="position:absolute;top:80px;left:125px;"onclick="ceshi()" name="p0">
                <div  style="position:absolute;top:77px;left:140px;font-size:13px;">￥150以下</div>
                <input type="checkbox" id="300price" style="position:absolute;top:80px;left:215px;"onclick="ceshi()" name="p1">
                <div  style="position:absolute;top:77px;left:230px;font-size:13px;">￥150-300</div>
                <input type="checkbox" id="450price" style="position:absolute;top:80px;left:305px;"onclick="ceshi()" name="p2">
                <div  style="position:absolute;top:77px;left:320px;font-size:13px;">￥301-450</div>
                <input type="checkbox" id="600price" style="position:absolute;top:80px;left:395px;"onclick="ceshi()" name="p3">
                <div  style="position:absolute;top:77px;left:410px;font-size:13px;">￥451-600</div>
                <input type="checkbox" id="700price" style="position:absolute;top:80px;left:485px;"onclick="ceshi()" name="p4">
                <div  style="position:absolute;top:77px;left:500px;font-size:13px;">￥600以上</div>

          <div style="position:absolute;top:107px;left:10px;font-size:13px;color:#AAAAAA;">位置</div>
          <div  id="buxian2" class="buxian22" onclick="showbuxian2()">不限</div>
                <div style="position:absolute;top:107px;left:125px;cursor: pointer;" onclick="showshangyequ()">商业区<img src="../Public/images/travelstore/xiajiantou.png" style="position:relative;top:-2px;"id="shangyequtu" ></div>
                <div style="position:absolute;top:107px;left:195px;cursor: pointer;" onclick="showjichang()">机场/火车站<img src="../Public/images/travelstore/xiajiantou.png" style="position:relative;top:-2px;"id="jichangtu"></div>
                <div style="position:absolute;top:107px;left:295px;cursor: pointer;" onclick="showxingzhengqu()">行政区/下辖市县<img src="../Public/images/travelstore/xiajiantou.png"style="position:relative;top:-2px;" id="xingzhengqutu"></div>
                 <div style="position:absolute;top:107px;left:425px;cursor: pointer;"onclick="showjingdian()">景点<img src="../Public/images/travelstore/xiajiantou.png" style="position:relative;top:-2px;"id="jingdiantu"></div>





          <img src="../Public/images/travelstore/fengexian.png" style="position:absolute;top:130px;left:20px;">
          <div class="weizhixianshi11" id="shangyequ"><span class="weizhiziti">称呼去</span></div>
          <div class="weizhixianshi11" id="jichang"><span class="weizhiziti">称呼去</span><span class="weizhiziti">称呼去</span><span class="weizhiziti">称呼去</span></div>
          <div class="weizhixianshi11" id="xingzhengqu"><span class="weizhiziti" >金牛区</span><span class="weizhiziti" >金牛区</span><span class="weizhiziti" >金牛区</span><span class="weizhiziti" >金牛区</span></div>
          <div class="weizhixianshi11" id="jingdian"><span class="weizhiziti">称呼去</span><span class="weizhiziti">称呼去</span></div>

         <input type="hidden" name="yincang" id="yincang"  value="不限" />

         <div style="position:absolute;top:103px;left:620px; cursor: pointer;"><input type="image" src="../Public/images/travelstore/sousuotu.png" style="border:0;" ></div>
     </form>


	</div>

   <div class="zhusousuoxianshi">
       <div class="jiudianlou">
       	<!-- 这是一层酒店的楼 -->
				<?php if(is_array($content)): foreach($content as $key=>$v): ?><div class="jiudianceng">
             <img src="../Public/images/travelstore/fengexian2.png">
              <div  class="jiudiancengshu">1</div>
            <a href="<?php echo U('Index/travelStore/jiudian','','');?>/id/<?php echo ($v["id"]); ?>" target="_blank" > <span class="jiudianming"><?php echo ($v["hotelName"]); ?></span></a>
              <div class="jiudianjiage">￥<?php echo ($v["price"]); ?>&nbsp<span class="jiudianjiageqi">起</span></div>
              <img src="../Public/images/travelstore/ditubiaozhi.png" class="ditubiaozhi" name="成都市一环路东一段">
              <div class="jiudiancengdizhi">地址：<?php echo ($v["area"]); ?></div>
              <div class="jiudiancengpingjia">评价：满意&nbsp10&nbsp一般&nbsp10&nbsp不满意&nbsp10&nbsp</div>
            </div><?php endforeach; endif; ?>
					<?php echo ($page); ?>
          	<!-- 这是一层酒店的楼 -->
            <!-- <div class="jiudianceng">
             <img src="../Public/images/travelstore/fengexian2.png">
              <div  class="jiudiancengshu">1</div>
              <span class="jiudianming">XX酒店</span>
              <div class="jiudianjiage">￥300&nbsp<span class="jiudianjiageqi">起</span></div>
              <img src="../Public/images/travelstore/ditubiaozhi.png" class="ditubiaozhi">
              <div class="jiudiancengdizhi">地址：成都市一环路东一段</div>
              <div class="jiudiancengpingjia">评价：满意&nbsp10&nbsp一般&nbsp10&nbsp不满意&nbsp10&nbsp</div>
            </div> -->
						<!--这是一层酒店的楼 -->
            <!-- <div class="jiudianceng">
             <img src="../Public/images/travelstore/fengexian2.png">
              <div  class="jiudiancengshu">1</div>
              <span class="jiudianming">XX酒店</span>
              <div class="jiudianjiage">￥300&nbsp<span class="jiudianjiageqi">起</span></div>
              <img src="../Public/images/travelstore/ditubiaozhi.png" class="ditubiaozhi">
              <div class="jiudiancengdizhi">地址：XXX市XXX路XXXX街</div>
              <div class="jiudiancengpingjia">评价：满意&nbsp10&nbsp一般&nbsp10&nbsp不满意&nbsp10&nbsp</div>
            </div> -->
							<!--这是一层酒店的楼 -->
            <!-- <div class="jiudianceng">
             <img src="../Public/images/travelstore/fengexian2.png">
              <div  class="jiudiancengshu">1</div>
              <span class="jiudianming">XX酒店</span>
              <div class="jiudianjiage">￥300&nbsp<span class="jiudianjiageqi">起</span></div>
              <img src="../Public/images/travelstore/ditubiaozhi.png" class="ditubiaozhi">
              <div class="jiudiancengdizhi">地址：XXX市XXX路XXXX街</div>
              <div class="jiudiancengpingjia">评价：满意&nbsp10&nbsp一般&nbsp10&nbsp不满意&nbsp10&nbsp</div>
            </div> -->
						<!-- 这是一层酒店的楼 -->
            <!-- <div class="jiudianceng">
             <img src="../Public/images/travelstore/fengexian2.png">
              <div  class="jiudiancengshu">1</div>
              <span class="jiudianming">XX酒店</span>
              <div class="jiudianjiage">￥300&nbsp<span class="jiudianjiageqi">起</span></div>
              <img src="../Public/images/travelstore/ditubiaozhi.png" class="ditubiaozhi">
              <div class="jiudiancengdizhi">地址：XXX市XXX路XXXX街</div>
              <div class="jiudiancengpingjia">评价：满意&nbsp10&nbsp一般&nbsp10&nbsp不满意&nbsp10&nbsp</div>
            </div> -->
						<!-- 这是一层酒店的楼 -->
            <!-- <div class="jiudianceng">
             <img src="../Public/images/travelstore/fengexian2.png">
              <div  class="jiudiancengshu">1</div>
              <span class="jiudianming">XX酒店</span>
              <div class="jiudianjiage">￥300&nbsp<span class="jiudianjiageqi">起</span></div>
              <img src="../Public/images/travelstore/ditubiaozhi.png" class="ditubiaozhi">
              <div class="jiudiancengdizhi">地址：XXX市XXX路XXXX街</div>
              <div class="jiudiancengpingjia">评价：满意&nbsp10&nbsp一般&nbsp10&nbsp不满意&nbsp10&nbsp</div>
            </div> -->
       </div>

     <div class="baidudituyinru">
     <div id="allmap"></div>
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
<div class="theme-popover-mask"></div>
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

</body>
</html>
<script type="text/javascript">

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
      // console.log(data.shangyequ.length);
      // alert(data.jichang[1].station);
      var i = 1;
      var tianjia="";
        console.log(data.jichang.length);

      for (;i<=(data.shangyequ.length); i++) {
        tianjia+="<span class='weizhiziti'>"+data.shangyequ[i-1].business+"</span>"
      };
       i=1;
       console.log(tianjia);
       document.getElementById("shangyequ").innerHTML=tianjia;
       tianjia="";
       // console.log(tianjia);

     for (;i<=(data.jichang.length); i++) {
        tianjia+="<span class='weizhiziti'>"+data.jichang[i-1].station+"</span>"
      };
      i=1;
      // console.log(tianjia);
       document.getElementById("jichang").innerHTML=tianjia;
       tianjia=""
        

        for (;i<=(data.xingzhengqu.length); i++) {
        tianjia+="<span class='weizhiziti'>"+data.xingzhengqu[i-1].xian+"</span>"
      };
      i=1;
       document.getElementById("xingzhengqu").innerHTML=tianjia;
       tianjia=""
        for (;i<=(data.jingdian.length); i++) {
        tianjia+="<span class='weizhiziti'>"+data.jingdian[i-1].jingdian+"</span>"
      };
      i=1;
       document.getElementById("jingdian").innerHTML=tianjia;
       tianjia=""


     $(".weizhiziti").click(function(){
    buxian2.style.color="black"
    $(".weizhiziti").removeClass("weizhiziti2");

    $(this).addClass("weizhiziti2");
    weizhishangchuan=$(this).html();
     $("#yincang").val(weizhishangchuan);
      // alert($("#yincang").val());

  });





    }
      )

   }
  )
 

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

  $(".ditubiaozhi").click(function(){
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
   $(".jiudiancengdizhi").click(function(){
    // alert($(this).attr("name"));

    zidingdizhi=$(this).html();
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
</script>