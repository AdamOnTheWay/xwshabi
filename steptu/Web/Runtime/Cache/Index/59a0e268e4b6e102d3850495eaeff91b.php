<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>豪华酒店管理管理</title>
	<script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>

	<script type="text/javascript" src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
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
	<form action="<?php echo U('Index/background/haohuajiudianguanli');?>" name="haohuajiudiansousuo" method="post">豪华酒店搜索
		<br> 豪华酒店id&nbsp&nbsp
		<input name="haohuajiudianid" type="text" value="">
		<br> 豪华酒店名&nbsp&nbsp
		<input name="haohuajiudianming" type="text" value="">
		<br> 豪华酒店价格&nbsp&nbsp
		<input name="haohuajiudianjiage" type="text" value="">
		<br> 豪华酒店所在地&nbsp&nbsp
		<input name="haohuajiudiansuozaidi" type="text" value="">
		<br>
		<input type="submit" value="搜索" />
	</form>
	<br>
	<br>
	<br>
	<table border="1" cellspacing="10">
		<tr>
			<td>豪华酒店id</td>
			<td>豪华酒店名</td>
			<td> 豪华酒店价格</td>
			<td>豪华酒店所在地</td>
			<td>最早可入住日期</td>
			<td>最晚可离店日期</td>
			<td style="cursor:pointer;" id="zengjia">
				<font size="3" color="red">增加</font>
			</td>
		</tr>

		<!-- 以下是一层 name需要你渲染上去对应的套餐id-->
		<?php if(is_array($content)): foreach($content as $key=>$u): ?><tr>
			<td><?php echo ($u["id"]); ?></td>
			<td id="name<?php echo ($u["id"]); ?>"><?php echo ($u["hotelName"]); ?></td>
			<td id="price<?php echo ($u["id"]); ?>"><?php echo ($u["price"]); ?></td>
			<td id="area<?php echo ($u["id"]); ?>"><?php echo ($u["area"]); ?></td>
			<td id="start<?php echo ($u["id"]); ?>"><?php echo ($u["startTime"]); ?></td>
			<td id="end<?php echo ($u["id"]); ?>"><?php echo ($u["endTime"]); ?></td>
			<td style="cursor:pointer;" class="xiugai" name="<?php echo ($u["id"]); ?>">
				<font size="3" color="red">修改</font>
			</td>
			<td style="cursor:pointer;" name="<?php echo ($u["id"]); ?>" class="shanchu">
				<font size="3" color="red">删除</font>
			</td>
			<td style="cursor:pointer;" onclick="window.open('<?php echo U('Index/background/jiudianxiangqing');?>?id=<?php echo ($u["id"]); ?>');">
				<font size="3" color="red">详情及修改</font>
			</td>
		</tr><?php endforeach; endif; ?>
	<?php echo ($page); ?>
	</table>
	<br>
	<br>
	<br>
	<div id="yonghuxinxi" style="display:none;">
		<form action="" name="yonghuguanli" id="yonghuguanli" method="post">
			豪华酒店id&nbsp&nbsp <input id="haohuajiudianid" type="text" value="" readonly="true">
			<br> 豪华酒店名&nbsp&nbsp
			<input id="haohuajiudianming" name="haohuajiudianming" type="text" value="">
			<br> 豪华酒店价格&nbsp&nbsp
			<input id="haohuajiudianjiage" name="haohuajiudianjiage" type="text" value="">
			<br> 豪华酒店所在地&nbsp&nbsp
			<br>
			<div class="info">
				<div>
					<select id="s_province" name="s_province"></select>&nbsp;&nbsp;
					<select id="s_city" name="s_city"></select>&nbsp;&nbsp;
					<select id="s_county" name="s_county"></select>
					<script class="resources library" src="/steptu/Web/Tpl/Index/background/city.js" type="text/javascript"></script>

					<script type="text/javascript">
						_init_area();
					</script>
				</div>
				<div id="show"></div>
			</div>

			&nbsp 具体地址：
			<input id="haohuajutidizhi" name="haohuajutidizhi" type="text" value="">
			<br>
			<br> 最早可入住日期&nbsp&nbsp
			<input id="zuizaokeruzhu" name="zuizaokeruzhu" type="text" value="">按照格式填写
			<br> 最晚可离店日期&nbsp&nbsp
			<input id="zuiwanlidian" name="zuiwanlidian" type="text" value="">按照格式填写
			<br>
			<input type="submit" value="提交修改" /> &nbsp &nbsp &nbsp
			<input type="reset" value="重置" />
		</form>
	</div>


	<script type="text/javascript">
		var Gid = document.getElementById;
		var showArea = function() {
			Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +
				Gid('s_city').value + " - 县/区" +
				Gid('s_county').value + "</h3>"
		}
		Gid('s_county').setAttribute('onchange', 'showArea()');
	</script>
</body>

</html>
<script type="text/javascript">
	$(".xiugai").click(function() {
		  yonghuxinxi.style.display = "block";
          var changshi=$(this).attr("name");
          // namechangshi="name"+changshi;
          // alert($("#name"+changshi).html());
	     // document.getElementById("taocanid").innerHTML =changshi;
	     $("#haohuajiudianid").val(changshi);
         $("#haohuajiudianming").val($("#name"+changshi).html());
          $("#haohuajiudianjiage").val($("#price"+changshi).html());
          $("#haohuajutidizhi").val($("#area"+changshi).html());
          $("#zuizaokeruzhu").val($("#start"+changshi).html());
          $("#zuiwanlidian").val($("#end"+changshi).html());
	})

	$(".shanchu").click(function() {
		// alert($(this).attr("name"));
		url = '<?php echo U('Index/background/hhjddelete');?>'
		$.post(url, {
			data: $(this).attr("name")
		}, function(data) {
			location.reload();
		});
	})

	$("#zengjia").click(function() {

		yonghuxinxi.style.display = "block";
         
	     $("#haohuajiudianid").val("kong");
         $("#haohuajiudianming").val("");
          $("#haohuajiudianjiage").val("");
          $("#haohuajutidizhi").val("");
          $("#zuizaokeruzhu").val("");
          $("#zuiwanlidian").val("");

	})
</script>