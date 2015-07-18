<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>首页管理</title>
		 <script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>

    <script type="text/javascript" src="__JS__/jquery-easyui-1.4.2/jquery.min.js"></script>
      <script type="text/javascript" src="__JS__/jquery.cookie.js"></script>
<script type="text/javascript" src="../Public/js/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
  <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
  <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
  <script language="javascript" src="/steptu/Web/Tpl/Index/background/city.js"></script>
</head>

 <body>
	<table border="1" cellspacing="10">
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/yonghuguanli');?>'">用户管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/taocanguanli');?>'">套餐管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/haohuajiudianguanli');?>'">豪华酒店管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/lvyouchaoshijiudian');?>'">旅游超市酒店管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/shouyeguanli');?>'">首页管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/faqihuodongguanli');?>'">发起活动管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/lvyouchaoshiguanli');?>'">旅游超市管理</td>
<!-- 以下陈亚东来做 包括用户管理详情页面-->
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/zhutilvyouguanli');?>'">主题旅游管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/guanyuyoujiguanli');?>'">关于游迹管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/lvyouzhiguanli');?>'">旅游志管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/taocandingdan');?>'">套餐订单管理</td>
<td style="cursor:pointer;" onclick="window.location.href='<?php echo U('Index/background/jiudiandingdan');?>'">酒店订单管理</td>
</table>
<br>
<br><br><br>
<form action="<?php echo U('Index/background/shouyeguanli');?>" name="lvyouzhi" id="lvyouzhi" method="post" enctype="multipart/form-data">
旅游志管理<br>图片：
<input id="file"  name="file" type="file" size="30" maxlength="32" value="上传图片"/><br>
内容:
 <textarea name="mpcontent" cols="29" rows="14"  ></textarea>
 <input type="submit" value="提交" />
</form>

</body>
</html>