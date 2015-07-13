<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>套餐管理</title>
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
	<form action="<?php echo U('Index/background/taocanguanli');?>" name="taocansousuo" method="post">套餐搜索
		<br> 套餐id&nbsp&nbsp <?php echo ($user["id"]); ?>
		<input name="taocanid" type="text" value="">
		<br> 套餐名&nbsp&nbsp
		<input name="taocanming" type="text" value="">
		<br> 是否属于优惠套餐：
		<select name="shifouyouhui">
			<option value="1">是</option>
			<option value="0">否</option>
		</select>
		<br>
		<br> 优惠价&nbsp&nbsp
		<input name="youhuijia" type="text" value="">
		<br>
		<input type="submit" value="搜索" />
	</form>
	<br>
	<br>
	<br>

	<table border="1" cellspacing="10">
		<tr>
			<td>套餐id</td>
			<td>套餐名</td>
			<td>优惠价</td>
			<td>是否属于优惠套餐</td>
			<td style="cursor:pointer;" id="zengjia">
				<font size="3" color="red">增加</font>
			</td>
		</tr>

		<!-- 以下是一层 name需要你渲染上去对应的套餐id-->
		<?php if(is_array($content)): foreach($content as $key=>$u): ?><tr>
			<td ><?php echo ($u["id"]); ?></td>
			<td id="name<?php echo ($u["id"]); ?>" ><?php echo ($u["name"]); ?></td>
			<td id="price<?php echo ($u["id"]); ?>"><?php echo ($u["price"]); ?></td>
			<td id="ifdiscount<?php echo ($u["id"]); ?>"><?php echo ($u["ifdiscount"]); ?></td>
			<td style="cursor:pointer;" class="xiugai" name="<?php echo ($u["id"]); ?>">
				<font size="3" color="red">修改</font>
			</td>
			<td style="cursor:pointer;" name="<?php echo ($u["id"]); ?>" class="shanchu">
				<font size="3" color="red">删除</font>
			</td>
			<td style="cursor:pointer;" onclick="window.open('<?php echo U('Index/background/taocanxiangqing','','');?>?id=<?php echo ($u["id"]); ?>');">
				<font size="3" color="red">详情及修改</font>
			</td>
		</tr><?php endforeach; endif; ?>
	<?php echo ($page); ?>
	</table>
	<br>
	<br>
	<br>
	<div id="yonghuxinxi" style="display:none;">
		<form action="<?php echo U('Index/background/tcadd');?>" name="yonghuguanli" id="yonghuguanli" method="post">
			套餐id&nbsp&nbsp <input id="taocanid" type="text" value="" readonly="true">
			<br> 套餐名&nbsp&nbsp
			<input id="taocanming" name="taocanming" type="text" value="">
			<br> 是否属于优惠套餐：
			<select name="shifouyouhui">
				<option value="1">是</option>
				<option value="0">否</option>
			</select>
			<br>
			<br> 优惠价&nbsp&nbsp
			<input id="youhuijia" name="youhuijia" type="text" value="">
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
          var changshi=$(this).attr("name");
          namechangshi="name"+changshi;
          // alert($("#name"+changshi).html());
	     // document.getElementById("taocanid").innerHTML =changshi;
	     $("#taocanid").val(changshi);
         $("#taocanming").val($("#name"+changshi).html());
          $("#youhuijia").val($("#price"+changshi).html());
			// alert("123")
	})

	$(".shanchu").click(function() {
		//alert($(this).attr("name"));
		url = '<?php echo U('Index/background/tcdelete');?>'
		$.post(url, {
			data: $(this).attr("name")
		}, function(data) {
			location.reload();
		});
	})

	$("#zengjia").click(function() {
$("#taocanming").val("");
          $("#youhuijia").val("");
		 $("#taocanid").val("kong");
			yonghuxinxi.style.display = "block";
		

	})
</script>