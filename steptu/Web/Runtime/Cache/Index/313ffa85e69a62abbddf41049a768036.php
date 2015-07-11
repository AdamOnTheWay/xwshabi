<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../Public/css/index.css" media="all" type="text/css">
	<title>旅游志</title>
	<script src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="__JS__/jquery.cookie.js"></script>
	<script type="text/javascript" src="__JS__/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
	<link rel="stylesheet" href="../Public/css/css.css" media="all">
	<link href="../Public/css/travelBook.css" rel="stylesheet" type="text/css">
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
	<div class="quanbu">
	<div>
		<a href="<?php echo U('Index/travelStore/travelStore');?>"><img src="__IMG__/travelsm.png" class="travelsm"></a>
        <a href="<?php echo U('Index/vipCenter/myInformation');?>"><img src="__IMG__/personal.png" class="personal"></a>
        <a href="<?php echo U('Index/travelTheme/travelTheme');?>"> <img src="__IMG__/travel.png" class="travel" ></a>
        <a href="<?php echo U('Index/makePlan/makePlan');?>"> <img src="__IMG__/makeplan.png" class="makeplan"></a>
        <a href="<?php echo U('Index/index/index');?>"><img src="__IMG__/index.png" class="index"></a>
        <a href="<?php echo U('Index/travelBook/travelBook');?>"><img src="__IMG__/travelbook.png" class="travelbook"></a>
		<img src="../Public/images/xuanchuan.png" class="xuanchuan">
		<img src="__IMG__/logo1.png" style="position: absolute;left: 420px;top: 30px;width:300px;">
		<img src="../Public/images/phone.png" class="phone">
		<a href="javascript:;"class=" btn-large theme-login" style="" id="loganniu"><img src="../Public/images/login.png"   style=" position: absolute;left: 822px;top: 70px;cursor: pointer;"></a>
		<a href="<?php echo U('Index/index/register','','');?>"><img src="__IMG__/register.png" style="position: absolute;left: 920px;top: 70px;" id="reanniu"></a>
	</div>

	<div class="mainbox"></div>

	<div class="container">
		<img src="../Public/images/travelBook/headtitle.png"><br><br/>
		<img src="../Public/images/travelBook/title.png"><br/>
		<div id="mainboxrealLetter">
			<img src="../Public/images/travelBook/hot.png" style="padding-left: 1%;height: 30px"><img src="../Public/images/travelBook/newest.png" style="padding-left: 1%;height: 30px">
			<div class="letterContents">
				<?php if(is_array($listLetters)): foreach($listLetters as $key=>$s): ?><div class="letterRealContents"><!--从这里开始循环 -->
						<div class="realContents">
							<div class="textword" >
								<div class="information" style="margin-top: 5px">
									<img src="../Public/images/travelBook/headimg.png" class="imgeye" style="float: left">
									<div class="titlebox">
										<p><a href="<?php echo U('letter','','');?>/id/<?php echo ($s["id"]); ?>"><b><?php echo ($s["theme"]); ?></b></a></p><br/>
										<?php echo ($s["name"]); ?> &nbsp;&nbsp;&nbsp;&nbsp;<span id="dataBoxLetter" style="float: right"></span>
									</div>
								</div>
								<div class="passage">
									this is a passage
									额。。。这个页面的代码被覆盖了。。。我会尽快重新写 o(╯□╰)o
								</div>
							</div>
						</div>
					</div><?php endforeach; endif; ?>
			<div class="btnbox" style="margin-top: 10px">
				<?php echo ($pageLetters); ?>
			</div>
			</div>
		</div>
		</div>
	<div>
		<div class="bottom"></div>
		<div class="bottomsm">
			<span class="bottombiao">旅游超市</span>
			<div class="bottomxuanxiang">
				<a href="<?php echo U('Index/travelStore/smsousuojieguo');?>">住</a><br>
				<a href="<?php echo U('Index/travelStore/travelStore');?>">吃货</a>
			</div>
		</div>
		<div class="bottompersonal">
			<span class="bottombiao">会员中心</span>
			<div class="bottomxuanxiang1">
				<a href="<?php echo U('Index/vipCenter/myOrders');?>"> 我的订单</a><br>
				<a href="<?php echo U('Index/vipCenter/myGrades');?>">我的积分</a> <br>
				<a href="<?php echo U('Index/vipCenter/myEvaluations');?>"> 我的评价</a><br>
				<a href="<?php echo U('Index/vipCenter/myInformation');?>">我的信息</a> <br>
				<a href="<?php echo U('Index/vipCenter/myMoneyPot');?>">我的储钱罐旅行计划</a><br>
			</div>
		</div>
		<div class="bottombook">
			<span class="bottombiao">旅游志</span>
			<div class="bottomxuanxiang">
				<a href="<?php echo U('Index/travelBook/travelBook');?>">旅游随感</a> <br>
				<a href="<?php echo U('Index/travelBook/letterList');?>"> 写给未来的信</a></div>
		</div>
		<div class="weishenme">
			<span class="bottombiao">主题旅游</span>
			<div class="bottomxuanxiang"><a href="<?php echo U('Index/travelTheme/travelTheme');?>">城市之间</a><br>
				<a href="<?php echo U('Index/travelTheme/travelTheme');?>"> 学子游</a><br>
				<a href="<?php echo U('Index/travelTheme/travelTheme');?>">年休假</a><br>
				<a href="<?php echo U('Index/travelTheme/travelTheme');?>">美食游</a></div></div>
		<div class="bottomaboutus"><span class="bottombiao">关于游记</span><div class="bottomxuanxiang">
			<a href="<?php echo U('Index/index/aboutUs');?>">关于我们</a><br>
			<a href="<?php echo U('Index/index/aboutUs');?>">联系我们</a><br>
			<a href="<?php echo U('Index/index/aboutUs');?>">一起合作</a><br>
			<a href="<?php echo U('Index/index/aboutUs');?>">用户协议</a><br>
			<a href="<?php echo U('Index/index/aboutUs');?>">诚聘英才</a></div>
		</div>
	</div>
	<img src="../Public/images/steptu.png" class="steptu">
	<img src="../Public/images/banquan.png" class="banquan">
	<img src="../Public/images/renzhengwang.png" class="renzhengwang">
	<img src="../Public/images/kexin.png" class="kexin">
	<img src="../Public/images/chengxin.png" class="chengxin">
		<div style="position: absolute;left: 822px;top: 0px;font-size:14px;color:white"id="dengluchenggong"></div>
		<div id="tuichudenglu" style="position: absolute;left: 960px;top: 5px;font-size:14px;color:white;display:none;cursor: pointer;">退出登录</div>

		<div class="twoBtn">
		 <a style="top: 247px;left: 37%" href="<?php echo U('Index/travelBook/travelBook');?>"> 旅 游 随 感 </a>
        <a style="top: 247px;left: 54%" href="<?php echo U('Index/travelBook/letterList');?>">写 给 未 来 的 信</a>
	</div>
</div>
	<script src="__JS__/index.js" type="text/javascript"></script>

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
</body>
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
</html>