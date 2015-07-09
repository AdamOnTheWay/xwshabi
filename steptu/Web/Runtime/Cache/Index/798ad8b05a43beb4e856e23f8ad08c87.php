<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>用户管理</title>
		 <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>
   
    <script type="text/javascript" src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
      <script type="text/javascript" src="__JS__/jquery.cookie.js"></script>
<script type="text/javascript" src="../Public/js/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
  <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
  <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">

</head>
<body>

<table border="1" cellspacing="10">
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/yonghuguanli');?>'">用户管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/taocanguanli');?>'">套餐管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/haohuajiudianguanli');?>'">豪华酒店管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/lvyouchaoshijiudian');?>'">旅游超市酒店管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/shouyeguanli');?>'">首页管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/faqihuodongguanli');?>'">发起活动管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/faqihuodongguanli');?>'">旅游超市管理</td>
<!-- 以下陈亚东来做 包括用户管理详情页面-->
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/zhutilvyouguanli');?>'">主题旅游管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/guanyuyoujiguanli');?>'">关于游迹管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/lvyouzhiguanli');?>'">旅游志管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/taocandingdan');?>'">套餐订单管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/jiudiandingdan');?>'">酒店订单管理</td>
</table>

<br> <br> <br>
<form action="" name="yonghusousuo" method="post">用户搜索<br>
用户id&nbsp&nbsp<input name="yonghuid" type="text" value=""><br>
用户名&nbsp&nbsp<input name="yonghuming" type="text" value=""><br>
邮箱&nbsp&nbsp<input name="youxiang" type="text" value=""><br>
    		性别&nbsp&nbsp<input name="xingbie" type="text" value=""><br>
    	    出生日期&nbsp&nbsp <input name="chushengriqi" type="text" value="" > *格式不要变<br>
    	     qq号&nbsp&nbsp<input name="qq" type="text" value=""><br>
    	    现居住地址&nbsp&nbsp<input name="xianjuzhudizhi" type="text" value=""><br> 
    	     用户头像&nbsp&nbsp<input name="touxiang" type="text" value=""><br>
<input type="submit" value="搜索" />
</form>
<br> <br> <br>
<table border="1" cellspacing="10">
<tr><td>用户id号</td><td>用户名</td><td>密码</td><td>电话号码</td><td>邮箱</td><td>性别</td><td>出生日期</td><td>自我介绍</td><td>qq号</td><td>现居住地址</td><td>用户头像</td></tr>
<!-- 以下是要重复的一行 自我介绍只显示前几个字吧。-->

<tr><td>用户id号</td><td>用户名</td><td>密码</td><td>电话号码</td><td>邮箱</td><td>性别</td><td>出生日期</td><td>自我介绍</td><td>qq号</td><td>现居住地址</td><td>用户头像</td ><td style="cursor:pointer;" id="xiugai" name="用户id号"><font size="3" color="red"  >修改</font></td><td style="cursor:pointer;" name="用户id号" id="shanchu"><font size="3" color="red">删除</font></td><td style="cursor:pointer;"><font size="3" color="red">详情及修改</font></td></tr>


</table>
<br><br><br>
<div id="yonghuxinxi" style="display:none;">
<form action="" name="yonghuguanli" id="yonghuguanli" method="post">
	<div>用户id&nbsp&nbsp</div><br>
   	用户名&nbsp&nbsp<input name="yonghuming" type="text" value=""><br>
   		密码&nbsp&nbsp<input name="mima" type="text" value=""><br>
   			电话号码&nbsp&nbsp<input name="dianhuahaoma" type="text" value=""><br>
    	邮箱&nbsp&nbsp<input name="youxiang" type="text" value=""><br>
    		性别&nbsp&nbsp<input name="xingbie" type="text" value=""><br>
    	    出生日期&nbsp&nbsp <input name="chushengriqi" type="text" value="" > *格式不要变<br>
    	    自我介绍&nbsp&nbsp <textarea name="ziwojieshao" cols="16" rows="4" >1223131</textarea><br>
    	   qq号&nbsp&nbsp<input name="qq" type="text" value=""><br>
    	    现居住地址&nbsp&nbsp<input name="xianjuzhudizhi" type="text" value=""><br> 
    	     用户头像&nbsp&nbsp<input name="touxiang" type="text" value=""><br>
    <input type="submit" value="提交修改" />
   &nbsp &nbsp &nbsp
    <input type="reset" value="重置" /> 
</form>
</div>
</body>
</html>
<script type="text/javascript">
$("#xiugai").click(function(){
  url=""
 $.post(url,{data:$(this).attr("name")},function(data){
     yonghuxinxi.style.display="block";
  });

})

$("#shanchu").click(function(){
  // alert($(this).attr("name"));
  url=""
 $.post(url,{data:$(this).attr("name")},function(data){
    location.reload();
  });
})

</script>