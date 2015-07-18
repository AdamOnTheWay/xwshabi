<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>套餐详情</title>
	<script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>

	<script type="text/javascript" src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="__JS__/jquery.cookie.js"></script>
	<script type="text/javascript" src="../Public/js/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">

</head>

<body>
	上传套餐图片：(最好是png jpg gif)
	<form action="<?php echo U('Index/background/tcxqimage');?>" name="taocantupian" id="taocantupian" method="post" enctype="multipart/form-data">
		<input id="file" name="file" type="file" size="30" maxlength="32" value="上传图片" /> 套餐id&nbsp&nbsp
		<input name="taocanid" type="text" value="<?php echo ($tr["id"]); ?>" readonly="true">
		<br>
		<input type="submit" value="提交" />
	</form>
	<br>
	<br>
	<br> 套餐价格日历修改：
	<br>

	<br> 日历价格搜索：
	<br>
	<br>
	<form action="" name="rilijiagesousuo" id="rilijiagesousuo" method="post">
		日期&nbsp&nbsp
		<input name="riqi" type="text" value=""> 日期请按照格式填写
		<br> 价格&nbsp&nbsp
		<input name="jiage" type="text" value="">
		<br>

		<input type="submit" value="搜索" />

	</form>
	<br>
	<br>
	<table border="1" cellspacing="10">
		<tr>
			<td>日期</td>
			<td>价格</td>
			<td style="cursor:pointer;" id="zengjia">
				<font size="3" color="red">增加</font>
			</td>
		</tr>
		<!-- 这是一层的样式 -->
		<tr>
			<td>日期</td>
			<td>价格</td>
			<td style="cursor:pointer;" id="xiugai" name="日期">
				<font size="3" color="red">修改</font>
			</td>
			<td style="cursor:pointer;" name="日期" id="shanchu">
				<font size="3" color="red">删除</font>
			</td>
		</tr>
	</table>

	<div id="yonghuxinxi" style="display:none;">
		<form action="" name="rilijiage" id="rilijiage" method="post">
			日期&nbsp&nbsp
			<input name="riqi" type="text" value=""> 日期请按照格式填写
			<br> 价格&nbsp&nbsp
			<input name="jiage" type="text" value="">
			<br>

			<input type="submit" value="提交修改" /> &nbsp &nbsp &nbsp
			<input type="reset" value="重置" />
		</form>
	</div>


	<br>
	<br>
	<br> 请选择好是否属于优惠套餐以及套餐主题
	<br>
	<br>
	<form action="<?php echo U('Index/background/tcxq','','');?>" name="taocanxiangqingxiugai" method="post">
		套餐id&nbsp&nbsp
		<input name="taocanid" type="text" value="<?php echo ($tr["id"]); ?>" readonly="true">
		<br>
		<br> 套餐名&nbsp&nbsp
		<input name="taocanming" type="text" value="<?php echo ($tr["name"]); ?>">
		<br>
		<br> 套餐起始日期
		<input name="qishiriqi" type="text" value="<?php echo ($tr["startTime"]); ?>">按格式填写
		<br> 套餐截止日期
		<input name="jiezhiriqi" type="text" value="<?php echo ($tr["endTime"]); ?>">按格式填写
		<br> 是否属于优惠套餐：
		<select name="shifouyouhui">
			<option value="1">是</option>
			<option value="0">否</option>
		</select>
		<br>套餐主题:
		<select name="theme">
			<option value="wu">无</option>
			<option value="城市之间">城市之间</option>
			<option value="年休假">年休假</option>
			<option value="学子游">学子游</option>
			<option value="美食街">美食街</option>

		</select>
		<br>
		<br> 优惠价&nbsp&nbsp

		<input name="youhuijia" type="text" value="<?php echo ($tr["price"]); ?>">
		<br>
		<br> 套餐说明:
		<br>
		<br>
		<!-- 加载编辑器的容器 -->
		<script id="container" name="taocanshuoming" type="text/plain">

		</script>
		<br>
		<br> 优惠活动:
		<br>
		<br>
		<!-- 加载编辑器的容器 -->
		<script id="youhuihuodong" name="youhuihuodong" type="text/plain">
			这里写初始化内容
		</script>
		<br>
		<br> 产品特色:
		<br>
		<br>
		<!-- 加载编辑器的容器 -->
		<script id="chanpintese" name="chanpintese" type="text/plain">
			这里写初始化内容
		</script>
		<br>
		<br> 行程介绍:
		<br>
		<br>
		<!-- 加载编辑器的容器 -->
		<script id="xingchengjieshao" name="xingchengjieshao" type="text/plain">
			这里写初始化内容
		</script>
		<br>
		<br> 预订须知:
		<br>
		<br>
		<!-- 加载编辑器的容器 -->
		<script id="yudingxuzhi" name="yudingxuzhi" type="text/plain">
			这里写初始化内容
		</script>
		<br>
		<br>

		<input type="submit" value="提交修改" /> &nbsp &nbsp &nbsp
		<input type="reset" value="重置" />
	</form>

	<br>
	<br>
	<br>
	<br> 套餐评论：
	<br>
	<br> 这部分表还没写，我先不写呢大概同上










	<!-- 配置文件 -->
	<script type="text/javascript" src="/xwshabi/steptu/Web/Tpl/ueditor/ueditor.config.js"></script>
	<!-- 编辑器源码文件 -->
	<script type="text/javascript" src="/xwshabi/steptu/Web/Tpl/ueditor/ueditor.all.js"></script>
	<!-- 实例化编辑器 -->
	<script type="text/javascript">
		var editor = UE.getEditor('container');
		var editor = UE.getEditor('youhuihuodong');
		var editor = UE.getEditor('chanpintese');
		var editor = UE.getEditor('xingchengjieshao');
		var editor = UE.getEditor('yudingxuzhi');


		$("#shanchu").click(function() {
			// alert($(this).attr("name"));
			url = ""
			$.post(url, {
				data: $(this).attr("name")
			}, function(data) {
				location.reload();
			});
		})

		$("#xiugai").click(function() {
			url = ""
			$.post(url, {
				data: $(this).attr("name")
			}, function(data) {
				yonghuxinxi.style.display = "block";
			});
		})
		$("#zengjia").click(function() {
			yonghuxinxi.style.display = "block";
		})
	</script>



</body>

</html>