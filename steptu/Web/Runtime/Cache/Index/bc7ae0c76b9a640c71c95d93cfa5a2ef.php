<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>旅游超市(吃)管理</title>
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
	<br>
	<br>
	<br>
	<h3>吃管理</h3>
	<form action="<?php echo U('Index/background/lvyouchaoshiguanli');?>" name="chisousuo" method="post">吃店搜索
		<br> 吃店id&nbsp&nbsp <?php echo ($user["id"]); ?>
		<input name="chidian" type="text" value="">
		<br> 吃店名&nbsp&nbsp
		<input name="chidianming" type="text" value="">
		<br> 吃店地址&nbsp&nbsp
		<input name="chidiandizhi" type="text" value="">
		<br> 吃店电话&nbsp&nbsp
		<input name="chidiandianhua" type="text" value="">
		<br>
		<br>
		<input type="submit" value="搜索" />
	</form>
	<br>
	<br>
	<br>
	<table border="1" cellspacing="10">
		<tr>
			<td>吃店id</td>
			<td>吃店名</td>
			<td>吃店地址</td>
			<td>吃店电话</td>
			<td style="cursor:pointer;" id="zengjia">
				<font size="3" color="red">增加</font>
			</td>

		</tr>

		<!-- 以下是一层 name需要你渲染上去对应的套餐id-->
<?php if(is_array($content)): foreach($content as $key=>$u): ?><tr>
			<td><?php echo ($u["id"]); ?></td>
			<td id="name<?php echo ($u["id"]); ?>"><?php echo ($u["storeName"]); ?></td>
			<td id="dizhi<?php echo ($u["id"]); ?>"><?php echo ($u["area"]); echo ($u["xiangxidizhi"]); ?></td>
			<td id="phone<?php echo ($u["id"]); ?>"><?php echo ($u["phone"]); ?></td>
			<td style="cursor:pointer;" class="xiugai" name="<?php echo ($u["id"]); ?>">
				<font size="3" color="red">修改</font>
			</td>
			<td style="cursor:pointer;" name="<?php echo ($u["id"]); ?>" class="shanchu">
				<font size="3" color="red">删除</font>
			</td>

		</tr><?php endforeach; endif; ?>
<?php echo ($page); ?>
	</table>
	<br>
	<br>
	<br>
	<div id="yonghuxinxi" style="display:none;">
		<form action="<?php echo U('Index/background/chiadd');?>" name="yonghuguanli" id="yonghuguanli" method="post">
			吃店id&nbsp&nbsp
			<input id="chidianid" name="chidianid" type="text" value="" readonly="true">
			<br> 吃店名&nbsp&nbsp
			<input id="chidianming" name="taocanming" type="text" value="">
			<br>
			<br> 吃店地址&nbsp&nbsp
			<input id="chidiandizhi" name="youhuijia" type="text" value="">
			<br> 吃店电话&nbsp&nbsp
			<input id="chidiandianhua" name="phone" type="text" value="">
			<br>

			<input type="submit" value="提交修改" /> &nbsp &nbsp &nbsp
			<input type="reset" value="重置" />
		</form>
	</div>
</body>

</html>
<script type="text/javascript">
	$(".xiugai").click(function() {
		yonghuxinxi.style.display = "block";
		var changshi = $(this).attr("name");
		namechangshi = "name" + changshi;
		// alert($("#name"+changshi).html());
		// document.getElementById("taocanid").innerHTML =changshi;
		$("#chidianid").val(changshi);
		$("#chidianming").val($("#name" + changshi).html());
		$("#chidiandizhi").val($("#dizhi" + changshi).html());
		$("#chidiandianhua").val($("#phone" + changshi).html());
	})

	$(".shanchu").click(function() {
		//alert($(this).attr("name"));
		url = '<?php echo U('Index/background/chidelete');?>'
		$.post(url, {
			data: $(this).attr("name")
		}, function(data) {
			location.reload();
		});
	})

	$("#zengjia").click(function() {
		$("#chidianid").val("kong");
		$("#chidianming").val("");
		$("#chidiandizhi").val("");
		$("#chidiandianhua").val("");
		yonghuxinxi.style.display = "block";


	})
</script>