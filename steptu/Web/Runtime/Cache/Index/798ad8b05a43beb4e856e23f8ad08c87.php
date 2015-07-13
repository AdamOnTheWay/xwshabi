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
	<form action="<?php echo U('Index/background/yonghuguanli');?>" name="yonghusousuo" method="post">用户搜索
		<br> 用户id&nbsp&nbsp
		<input name="yonghuid" type="text" value="">
		<br> 用户名&nbsp&nbsp
		<input name="yonghuming" type="text" value="">
		<br> 邮箱&nbsp&nbsp
		<input name="youxiang" type="text" value="">
		<br> 性别&nbsp&nbsp
		<input name="xingbie" type="text" value="">
		<br> 出生日期&nbsp&nbsp
		<input name="chushengriqi" type="text" value=""> *格式不要变
		<br> qq号&nbsp&nbsp
		<input name="qq" type="text" value="">
		<br> 现居住地址&nbsp&nbsp
		<input name="xianjuzhudizhi" type="text" value="">
		<br> 用户头像&nbsp&nbsp
		<input name="touxiang" type="text" value="">
		<br>
		<input type="submit" value="搜索" />
	</form>
	<br>
	<br>
	<br>
	<table border="1" cellspacing="10">

		<tr>
			<td>用户id</td>
			<td>用户名</td>
			<td>密码</td>
			<td>电话号码</td>
			<td>邮箱</td>
			<td>性别</td>
			<td>出生日期</td>
			<td>自我介绍</td>
			<td>qq号</td>
			<td>现居住地址</td>
			<td>用户头像</td>
		</tr>

		<!-- 以下是要重复的一行 自我介绍只显示前几个字吧。-->
		<?php if(is_array($content)): foreach($content as $key=>$u): ?><tr>
				<td id = "id<?php echo ($u["id"]); ?>" ><?php echo ($u["id"]); ?></td>
				<td id="name<?php echo ($u["id"]); ?>"><?php echo ($u["name"]); ?></td>
				<td id="password<?php echo ($u["id"]); ?>"><?php echo ($u["password"]); ?></td>
				<td id="phone<?php echo ($u["id"]); ?>"><?php echo ($u["phone"]); ?></td>
				<td id="email<?php echo ($u["id"]); ?>"><?php echo ($u["email"]); ?></td>
				<td id="sex<?php echo ($u["id"]); ?>"><?php echo ($u["sex"]); ?></td>
				<td id="birthday<?php echo ($u["id"]); ?>"><?php echo ($u["birthday"]); ?></td>
				<td id="comment<?php echo ($u["id"]); ?>"><?php echo ($u["comment"]); ?></td>
				<td id="qq<?php echo ($u["id"]); ?>"><?php echo ($u["qq"]); ?></td>
				<td id="address<?php echo ($u["id"]); ?>"><?php echo ($u["address"]); ?></td>
				<td id="image<?php echo ($u["id"]); ?>"><?php echo ($u["image"]); ?></td>
				<td style="cursor:pointer;" class="xiugai" name="<?php echo ($u["id"]); ?>">
					<font size="3" color="red">修改</font>
				</td>
				<td style="cursor:pointer;" name="<?php echo ($u["id"]); ?>" class="shanchu">
					<font size="3" color="red">删除</font>
				</td>
				<td style="cursor:pointer;">
					<font size="3" color="red">详情及修改</font>
				</td>
			</tr><?php endforeach; endif; ?>
		<?php echo ($page); ?>


	</table>

	<br>
	<br>
	<br>
	<div id="yonghuxinxi" style="display:none;">
		<form action="<?php echo U('Index/background/yhchange');?>" name="yonghuguanli" id="yonghuguanli" method="post">
			<br>用户id&nbsp&nbsp
			<input id="yonghuid" name="yonghuid" type="text" value="" readonly="ture">
			<br> 用户名&nbsp&nbsp
			<input id="yonghuming" name="yonghuming" type="text" value="" >
			<br> 密码&nbsp&nbsp
			<input id="mima" name="mima" type="text" value="">
			<br> 电话号码&nbsp&nbsp
			<input id="dianhuahaoma" name="dianhuahaoma" type="text" value="">
			<br> 邮箱&nbsp&nbsp
			<input id="youxiang" name="youxiang" type="text" value="">
			<br> 性别&nbsp&nbsp
			<input id="xingbie" name="xingbie" type="text" value="">
			<br> 出生日期&nbsp&nbsp
			<input id="chushengriqi" name="chushengriqi" type="text" value=""> *格式不要变
			<br> 自我介绍&nbsp&nbsp
			<textarea id="ziwojieshao" name="ziwojieshao" cols="16" rows="4">1223131</textarea>
			<br> qq号&nbsp&nbsp
			<input id="qq" name="qq" type="text" value="">
			<br> 现居住地址&nbsp&nbsp
			<input id="xianjuzhudizhi" name="xianjuzhudizhi" type="text" value="">
			<br> 用户头像&nbsp&nbsp
			<input id="yonghutouxiang" name="touxiang" type="text" value="">
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
          // namechangshi="name"+changshi;
          // alert($("#name"+changshi).html());
	     // document.getElementById("taocanid").innerHTML =changshi;
	     $("#yonghuid").val(changshi);
         $("#yonghuming").val($("#name"+changshi).html());
          $("#mima").val($("#password"+changshi).html());
        $("#dianhuahaoma").val($("#phone"+changshi).html());
          $("#youxiang").val($("#email"+changshi).html());
            $("#xingbie").val($("#sex"+changshi).html());
              $("#chushengriqi").val($("#birthday"+changshi).html());
                $("#ziwojieshao").val($("#comment"+changshi).html());
                  $("#qq").val($("#qq"+changshi).html());
                    $("#xianjuzhudizhi").val($("#address"+changshi).html());
                      $("#yonghutouxiang").val($("#image"+changshi).html());
	})

	$(".shanchu").click(function() {
		//alert($(this).attr("name"));
		url = '<?php echo U('Index/background/yhdelete');?>'

		$.post(url, {
			data: $(this).attr("name")
		}, function(data) {

			location.reload();
		});
	})
</script>