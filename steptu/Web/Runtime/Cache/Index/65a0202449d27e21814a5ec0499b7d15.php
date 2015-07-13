<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="__CSS__/index.css" media="all" type="text/css">
	<title>游迹网</title>
	<script type="text/javascript" src="__JS__/jquery-easyui-1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="__JS__/jquery.cookie.js"></script>
	<script type="text/javascript" src="__JS__/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="__JS__/jquery-easyui-1.4.2/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="__JS__/jquery-easyui-1.4.2/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="__JS__/jquery-easyui-1.4.2/demo/demo.css">
	<link rel="stylesheet" href="__CSS__/css.css" media="all">

	<script>
		jQuery(document).ready(function($) {
			$('.theme-login').click(function() {
				$('.theme-popover-mask').fadeIn(100);
				$('.theme-popover').slideDown(200);
			})
			$('.theme-poptit .close').click(function() {
				$('.theme-popover-mask').fadeOut(100);
				$('.theme-popover').slideUp(200);
			})

		})
		$(document).ready(function() {

			// alert("dadf");

			if ($.cookie('username') != '' && $.cookie('username') != null && $.cookie('username') != undefined) {

				loganniu.style.display = "none";
				reanniu.style.display = "none";
				document.getElementById("dengluchenggong").innerHTML = $.cookie('username') + "&nbsp" + "&nbsp" + "<img src='../Public/images/dengluchenggong.png' >";
				tuichudenglu.style.display = "block";
			}

		});
	</script>
	<script type="text/javascript">
		function showjieguo() {
          $("#f1").submit();
		//  window.location.href="<?php echo U('Index/index/index2');?>";

		}
	</script>
</head>

<body>

	<STYLE TYPE="text/css">
		<!-- BODY {
			background-image: URL(__IMG__/background.png);
			background-position: center top;
			background-repeat: no-repeat;
		}

		a {
			color: #444444;
		}

		a:hover {
			color: red;
			font-weight: bolder;
		}

		-->
	</STYLE>


	<div class="quanbu">

		<div class="contentbg"></div>
		<div class="content">
			<!--优惠套餐条-->
			<img src="__IMG__/youhuitiao1.png" class="youhuitiao1">
			<a href="<?php echo U('Index/travelStore/travelStore');?>"><img src="__IMG__/youhuitiao2.png" class="youhuitiao2"></a>
			<!--以下这一段是优惠套餐滚动实现-->
			<div style="position:absolute;top:30px;left:30px;">
				<div class="rollBox">
					<div class="zuogun" onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp1()" onmouseout="ISL_StopUp()" onmouseover="document.images['zuoguntu'].src='__IMG__/zuogun1.png'">
						<img id="zuoguntu" src="__IMG__/zuogun.png">
					</div>
					<div class="Cont" id="ISL_Cont">
						<div class="ScrCont">
							<div id="List1">
								<!-- 图片列表 begin -->

								<div class="pic">
									<a href="<?php echo U('Index/package/package');?>?id=<?php echo ($season[0]["id"]); ?>" target="_blank">
										<img src="<?php echo ($season[0]["image"]); ?>.jpg" width="145" height="145" alt="一号图片" onload="return imgzoom(this,600);" onclick="javascript:window.open(<?php echo U('Index/package/package');?>?id=<?php echo ($season[0]["id"]); ?>);" style="cursor:pointer;" />
									</a>
									<a href="<?php echo U('Index/package/package');?>?id=<?php echo ($season[0]["id"]); ?>" target="_blank">
										<div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($season[0]["name"]); ?></div>
										<div style="font-size:15px;font-family: SimHei;color:#ff8004;"><?php echo ($season[0]["price"]); ?>起</div>
									</a>

								</div>

								<div class="pic">
									<a href="<?php echo U('Index/package/package');?>?id=<?php echo ($season[1]["id"]); ?>" target="_blank">
										<img src="<?php echo ($season[1]["image"]); ?>.jpg" width="145" height="145" alt="二号图片" onload="return imgzoom(this,600);" onclick="javascript:window.open(<?php echo U('Index/package/package');?>?id=<?php echo ($season[1]["id"]); ?>);" style="cursor:pointer;" />
									</a>
									<a href="<?php echo U('Index/package/package');?>?id=<?php echo ($season[1]["id"]); ?>" target="_blank">
										<div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($season[1]["name"]); ?></div>
										<div style="font-size:15px;font-family: SimHei;color:#ff8004;"><?php echo ($season[1]["price"]); ?>起</div>
									</a>

								</div>
								<div class="pic">
									<a href="<?php echo U('Index/package/package');?>?id=<?php echo ($season[2]["id"]); ?>" target="_blank">
										<img src="<?php echo ($season[2]["image"]); ?>.jpg" width="145" height="145" alt="三号图片" onload="return imgzoom(this,600);" onclick="javascript:window.open(<?php echo U('Index/package/package');?>?id=<?php echo ($season[2]["id"]); ?>);" style="cursor:pointer;" />
									</a>
									<a href="<?php echo U('Index/package/package');?>?id=<?php echo ($season[2]["id"]); ?>" target="_blank">
										<div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($season[2]["name"]); ?></div>
										<div style="font-size:15px;font-family: SimHei;color:#ff8004;"><?php echo ($season[2]["price"]); ?>起</div>
									</a>

								</div>
								<div class="pic">
									<a href="<?php echo U('Index/package/package');?>?id=<?php echo ($season[3]["id"]); ?>" target="_blank">
										<img src="<?php echo ($season[3]["image"]); ?>.jpg" width="145" height="145" alt="四号图片" onload="return imgzoom(this,600);" onclick="javascript:window.open(<?php echo U('Index/package/package');?>?id=<?php echo ($season[3]["id"]); ?>);" style="cursor:pointer;" />
									</a>
									<a href="<?php echo U('Index/package/package');?>?id=<?php echo ($season[3]["id"]); ?>" target="_blank">
										<div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($season[3]["name"]); ?></div>
										<div style="font-size:15px;font-family: SimHei;color:#ff8004;"><?php echo ($season[3]["price"]); ?>起</div>
									</a>

								</div>
								<div class="pic">
									<a href="<?php echo U('Index/package/package');?>?id=<?php echo ($season[4]["id"]); ?>" target="_blank">
										<img src="<?php echo ($season[4]["image"]); ?>.jpg" width="145" height="145" alt="五号图片" onload="return imgzoom(this,600);" onclick="javascript:window.open(<?php echo U('Index/package/package');?>?id=<?php echo ($season[4]["id"]); ?>);" style="cursor:pointer;" />
									</a>
									<a href="<?php echo U('Index/package/package');?>?id=<?php echo ($season[4]["id"]); ?>" target="_blank">
										<div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($season[4]["name"]); ?></div>
										<div style="font-size:15px;font-family: SimHei;color:#ff8004;"><?php echo ($season[4]["price"]); ?>起</div>
									</a>

								</div>
								<div class="pic">
									<a href="<?php echo U('Index/package/package');?>?id=<?php echo ($season[5]["id"]); ?>" target="_blank">
										<img src="<?php echo ($season[5]["image"]); ?>.jpg" width="145" height="145" alt="您自定义" onload="return imgzoom(this,600);" onclick="javascript:window.open(<?php echo U('Index/package/package');?>?id=<?php echo ($season[5]["id"]); ?>);" style="cursor:pointer;" />
									</a>
									<a href="<?php echo U('Index/package/package');?>?id=<?php echo ($season[5]["id"]); ?>" target="_blank">
										<div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($season[5]["name"]); ?></div>
										<div style="font-size:15px;font-family: SimHei;color:#ff8004;"><?php echo ($season[5]["price"]); ?>起</div>
									</a>

								</div>
								<div class="pic">
									<a href="<?php echo U('Index/package/package');?>?id=<?php echo ($season[6]["id"]); ?>" target="_blank">
										<img src="<?php echo ($season[6]["image"]); ?>.jpg" width="145" height="145" alt="您自定义" onload="return imgzoom(this,600);" onclick="javascript:window.open(<?php echo U('Index/package/package');?>?id=<?php echo ($season[6]["id"]); ?>);" style="cursor:pointer;" />
									</a>
									<a href="<?php echo U('Index/package/package');?>?id=<?php echo ($season[6]["id"]); ?>" target="_blank">
										<div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($season[6]["name"]); ?></div>
										<div style="font-size:15px;font-family: SimHei;color:#ff8004;"><?php echo ($season[6]["price"]); ?>起</div>
									</a>

								</div>
								<!-- 图片列表 end -->
							</div>
							<div id="List2"></div>
						</div>
					</div>
					<div class="yougun" onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown1()" onmouseout="ISL_StopDown()" onmouseover="document.images['youguntu'].src='/steptu/Web/Tpl/Index/Public/images/yougun1.png'">
						<img id="youguntu" src="/steptu/Web/Tpl/Index/Public/images/yougun.png">
					</div>
				</div>

			</div>
			<!--以上这一段是优惠套餐滚动实现-->

			<img src="__IMG__/zhutiao.png" class="zhutiao">
			<div></div>
			<!--旅游志标题条-->
			<img src="__IMG__/lvyouzhi1.png" class="lvyouzhi">
			<a href="<?php echo U('Index/travelBook/travelBook');?>"><img src="__IMG__/lvyouzhi2.png" class="lvyouzhi2"></a>
			<div class="lvyouzhicontent">
				<img src="" style="width:150px;height:150px;margin:15px 0 0 15px;">

				<div style=" word-wrap:break-word; word-break:break-all;width:150px;margin:5px 0 0 15px;font-size:14px;"><?php echo ($note[0]["note"]); ?></div>

			</div>
			<div class="zhuhaohuaform">

				<form action="<?php echo U('Index/index/index2');?>" name="zhuxianghaohua" method="post" id="f1">
					<div style="position:absolute;left:0px;top:0px;font-size:15px;font-family: SimHei;">目的地</div>
					<input name="destination" type="text" style="position:absolute;width:95px;left:70px;top:-3px;border-radius:4px;" />
					<div style="position:absolute;left:0px;top:40px;font-size:15px;font-family: SimHei;">入住时间</div>
					<div style="position:absolute;width:90px;left:70px;top:37px;">
						<input name="intime" type="text" style="width:100px;" class="easyui-datebox" required="required" data-options="formatter:myformatter,parser:myparser" />
					</div>
					<div style="position:absolute;left:0px;top:80px;font-size:15px;font-family: SimHei;">离店时间</div>
					<div style="position:absolute;width:120px;left:70px;top:77px;">
						<input name="outtime" type="text" style="width:100px;" class="easyui-datebox" required="required" data-options="formatter:myformatter,parser:myparser" />
					</div>
					<div style="position:absolute;left:0px;top:120px;font-size:15px;font-family: SimHei;">酒店品牌</div>
					<select name="brand" style="position:absolute;width:100px;left:70px;top:117px;font-size:18px;">
						<?php if(is_array($hdn)): foreach($hdn as $key=>$hd): ?><option value="<?php echo ($hd["hotelName"]); ?>" name='brand'><?php echo ($hd["hotelName"]); ?></option><?php endforeach; endif; ?>
						<!-- <option value="洲际酒店">洲际酒店</option> -->
					</select>

					<div style="position:absolute;left:50px;top:180px;">
						<input type="image" src="__IMG__/search.png" style="border:0;" onclick="showjieguo()" />

					</div>

				</form>

			</div>
			<img src="__IMG__/zhufenge.png" class="zhufenge">
			<div class="zhuhaohuatu" id="zhuhaohuatu">

				<div id="demo" style="height:250px;width:280px; overflow:hidden; ">
					<div id="demo1">

						<a href="<?php echo U('Index/travelStore/jiudian','','');?>/id/3" target="_blank">
							<div id="jiudiantu">
								<img src="__IMG__/xilaideng.png" border="0" />
								<div id="jiudianming" style="position:relative;left:190px;top:-80px;font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($hds[0]["hotelName"]); ?>
									<div id="jiudianjiage" style="font-size:15px;font-family: SimHei;color:#ff8004;">￥<?php echo ($hds[0]["price"]); ?></div>
								</div>
							</div>
						</a>

						<a href="http://www.16sucai.com" target="_blank">
							<div id="jiudiantu">
								<img src="__IMG__/xilaideng.png" border="0" />
								<div id="jiudianming" style="position:relative;left:190px;top:-80px;font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($hds[1]["hotelName"]); ?>
									<div id="jiudianjiage" style="font-size:15px;font-family: SimHei;color:#ff8004;">￥<?php echo ($hds[1]["price"]); ?></div>
								</div>
							</div>
						</a>

						<a href="http://www.16sucai.com" target="_blank">
							<div id="jiudiantu">
								<img src="__IMG__/xilaideng.png" border="0" />
								<div id="jiudianming" style="position:relative;left:190px;top:-80px;font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($hds[2]["hotelName"]); ?>
									<div id="jiudianjiage" style="font-size:15px;font-family: SimHei;color:#ff8004;">￥<?php echo ($hds[2]["price"]); ?></div>
								</div>
							</div>
						</a>

						<a href="http://www.16sucai.com" target="_blank">
							<div id="jiudiantu">
								<img src="__IMG__/xilaideng.png" border="0" />
								<div id="jiudianming" style="position:relative;left:190px;top:-80px;font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($hds[3]["hotelName"]); ?>
									<div id="jiudianjiage" style="font-size:15px;font-family: SimHei;color:#ff8004;">￥<?php echo ($hds[3]["price"]); ?></div>
								</div>
							</div>
						</a>

						<a href="http://www.16sucai.com" target="_blank">
							<div id="jiudiantu">
								<img src="__IMG__/xilaideng.png" border="0" />
								<div id="jiudianming" style="position:relative;left:190px;top:-80px;font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($hds[4]["hotelName"]); ?>
									<div id="jiudianjiage" style="font-size:15px;font-family: SimHei;color:#ff8004;">￥<?php echo ($hds[4]["price"]); ?></div>
								</div>
							</div>
						</a>

						<a href="http://www.16sucai.com" target="_blank">
							<div id="jiudiantu">
								<img src="__IMG__/xilaideng.png" border="0" />
								<div id="jiudianming" style="position:relative;left:190px;top:-80px;font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($hds[5]["hotelName"]); ?>
									<div id="jiudianjiage" style="font-size:15px;font-family: SimHei;color:#ff8004;">￥<?php echo ($hds[5]["price"]); ?></div>
								</div>
							</div>
						</a>

						<a href="http://www.16sucai.com" target="_blank">
							<div id="jiudiantu">
								<img src="__IMG__/xilaideng.png" border="0" />
								<div id="jiudianming" style="position:relative;left:190px;top:-80px;font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($hds[6]["hotelName"]); ?>
									<div id="jiudianjiage" style="font-size:15px;font-family: SimHei;color:#ff8004;">￥<?php echo ($hds[6]["price"]); ?></div>
								</div>
							</div>
						</a>

					</div>
					<div id="demo2">

				</div>
				</div>

			</div>

			<div style="position: absolute;left: 230px;top: 280px;height: 234px;width: 288px;display:none" id="zhuhaohuajieguo">
				<div style="position:absolute;left:10px;width:130px;height:100px;">
					<img src="<?php echo ($hs[0]["image"]); ?>" style="width:130px;height:70px;">
					<div style="font-size:13px;width:130px;"><?php echo ($hs[0]["hotelName"]); ?>
						<span style="position:absolute;left:90px;color:#ff8004;">￥<?php echo ($hs[0]["price"]); ?></span>
					</div>
				</div>

			<div style="position:absolute;left:150px;width:130px;height:100px;">
				<img src="" style="width:130px;height:70px;">
				<div style="font-size:13px;width:130px;"><?php echo ($hs[1]["hotelName"]); ?>
					<span style="position:absolute;left:90px;color:#ff8004;">￥<?php echo ($hs[1]["price"]); ?></span>
				</div>
			</div>

			<div style="position:absolute;left:10px;top:120px;width:130px;height:100px;">
				<img src="" style="width:130px;height:70px;">
				<div style="font-size:13px;width:130px;"><?php echo ($hs[2]["hotelName"]); ?>
					<span style="position:absolute;left:90px;color:#ff8004;">￥<?php echo ($hs[2]["price"]); ?></span>
				</div>
			</div>

			<div style="position:absolute;left:150px;top:120px;width:130px;height:100px;">
				<img src="" style="width:130px;height:70px;">
				<div style="font-size:13px;width:130px;"><?php echo ($hs[3]["hotelName"]); ?>
					<span style="position:absolute;left:90px;color:#ff8004;">￥<?php echo ($hs[3]["price"]); ?></span>
				</div>
			</div>

			</div>

		</div>

		<a href="<?php echo U('Index/travelStore/travelStore');?>">
			<img src="__IMG__/travelsm.png" class="travelsm">
		</a>
		<a href="<?php echo U('Index/vipCenter/myInformation');?>">
			<img src="__IMG__/personal.png" class="personal">
		</a>
		<a href="<?php echo U('Index/travelTheme/travelTheme');?>">
			<img src="__IMG__/travel.png" class="travel">
		</a>
		<a href="<?php echo U('Index/makePlan/makePlan');?>">
			<img src="__IMG__/makeplan.png" class="makeplan">
		</a>
		<a href="<?php echo U('Index/index/index');?>">
			<img src="__IMG__/index.png" class="index">
		</a>
		<a href="<?php echo U('Index/travelBook/travelBook');?>">
			<img src="__IMG__/travelbook.png" class="travelbook">
		</a>
		<img src="__IMG__/xuanchuan.png" class="xuanchuan">
		<img src="__IMG__/logo1.png" style="position: absolute;left: 420px;top: 30px;width:300px;">
		<!-- <img src="__IMG__/logo.png"class="logo"> -->
		<img src="__IMG__/phone.png" class="phone">

		<a href="<?php echo U('Index/index/register','','');?>">
			<img src="__IMG__/register.png" class="register" id="reanniu">
		</a>


		<div id="loganniu">
			<a href="javascript:;" class=" btn-large theme-login">
				<img src="__IMG__/login.png" class="login">
			</a>
		</div>

		<div>
			<div class="bottom"></div>
			<div class="bottomsm">
				<span class="bottombiao">旅游超市</span>
				<div class="bottomxuanxiang">
					<a href="<?php echo U('Index/travelStore/smsousuojieguo');?>">住</a>
					<br>
					<a href="<?php echo U('Index/travelStore/travelStore');?>">吃货</a>
				</div>
			</div>
			<div class="bottompersonal">
				<span class="bottombiao">会员中心</span>
				<div class="bottomxuanxiang1">
					<a href="<?php echo U('Index/vipCenter/myOrders');?>"> 我的订单</a>
					<br>
					<a href="<?php echo U('Index/vipCenter/myGrades');?>">我的积分</a>
					<br>
					<a href="<?php echo U('Index/vipCenter/myEvaluations');?>"> 我的评价</a>
					<br>
					<a href="<?php echo U('Index/vipCenter/myInformation');?>">我的信息</a>
					<br>
					<a href="<?php echo U('Index/vipCenter/myMoneyPot');?>">我的储钱罐旅行计划</a>
					<br>
				</div>
			</div>
			<div class="bottombook">
				<span class="bottombiao">旅游志</span>
				<div class="bottomxuanxiang">
					<a href="<?php echo U('Index/travelBook/travelBook');?>">旅游随感</a>
					<br>
					<a href="<?php echo U('Index/travelBook/letterList');?>"> 写给未来的信</a></div>
			</div>
			<div class="weishenme">
				<span class="bottombiao">主题旅游</span>
				<div class="bottomxuanxiang"><a href="/travel/steptu/index.php/travelTheme/travelTheme/class/学子游">城市之间</a>
					<br>
					<a href="<?php echo U(Index/travelTheme/travelTheme,'class=学子游','');?>"> 学子游</a>
					<br>
					<a href="<?php echo U(Index/travelTheme/travelTheme,'class=年休假','');?>">年休假</a>
					<br>
					<a href="<?php echo U(Index/travelTheme/travelTheme,'class=美食街','');?>">美食游</a></div>
			</div>
			<div class="bottomaboutus">
				<span class="bottombiao">关于游记</span>
				<div class="bottomxuanxiang">
					<a href="<?php echo U('Index/index/aboutUs');?>">关于我们</a>
					<br>
					<a href="<?php echo U('Index/index/aboutUs');?>">联系我们</a>
					<br>
					<a href="<?php echo U('Index/index/aboutUs');?>">一起合作</a>
					<br>
					<a href="<?php echo U('Index/index/aboutUs');?>">用户协议</a>
					<br>
					<a href="<?php echo U('Index/index/aboutUs');?>">诚聘英才</a></div>
			</div>
		</div>
		<img src="../Public/images/steptu.png" class="steptu">
		<img src="../Public/images/banquan.png" class="banquan">
		<img src="../Public/images/renzhengwang.png" class="renzhengwang">
		<img src="../Public/images/kexin.png" class="kexin">
		<img src="../Public/images/chengxin.png" class="chengxin">


		<div style="position: absolute;left: 822px;top: 0px;font-size:14px;color:white" id="dengluchenggong"></div>
		<div id="tuichudenglu" style="position: absolute;left: 960px;top: 5px;font-size:14px;color:white;display:none;cursor: pointer;">退出登录</div>
	</div>

	<script src="__JS__/index.js" type="text/javascript"></script>

	<div id="asdfq">
		<div class="theme-popover" id="theme-popover">
			<div class="theme-poptit">
				<a href="javascript:;" title="关闭" class="close" id="close">×</a>
				<h3>旅行是一种生活</h3>
			</div>
			<div class="theme-popbod dform">
				<form class="theme-signin" name="loginform" action="<?php echo U('Index/loginVerify/loginVerify');?>" method="post">
					<ol>
						<li>
							<h4>请登录</h4>
						</li>
						<li>
							<strong>用户名：</strong>
							<input class="ipt" id="name" type="text" name="log" value="" size="20" />
						</li>
						<li>
							<strong>密码：</strong>
							<input class="ipt" id="psw" type="password" name="pwd" value="" size="20" />
						</li>
						<li>
							<input class="btn btn-primary" name="submit" value=" 登 录 " id="dlanniu" />
						</li>
					</ol>
				</form>
			</div>
		</div>
		<div class="theme-popover-mask" id="theme-popover-mask"></div>
	</div>

</body>
<script type="text/javascript">
	$("#dlanniu").click(function() {
		// console.log($data['code']);
		// alert("用户名/密码 错误！");
		var url = '<?php echo U('Index/loginVerify/loginVerify');?>';
		$.post(url, {
			log: $("#name").val(),
			pwd: $("#psw").val()
		}, function(data) {
			console.log($.cookie('username'));
			// alert(data['address'][2]);

			// console.log(shishi);
			if (data.code == 1) {
				alert("登陆成功");
				var shishi = $.cookie('username');
				document.getElementById("close").click();
				loganniu.style.display = "none";
				reanniu.style.display = "none";
				document.getElementById("dengluchenggong").innerHTML = shishi + "&nbsp" + "&nbsp" + "<img src='../Public/images/dengluchenggong.png' >";
				tuichudenglu.style.display = "block";
				// theme-popover.style.display=none;
				//  theme-popover-mask.style.display="none";
			} else {
				alert("用户名/密码 错误！")
			};
		})
	})
	$("#tuichudenglu").click(function() {
		var url = '<?php echo U('Index/loginVerify/tuichudenglu');?>';
		$.post(url, function() {
			document.getElementById("dengluchenggong").innerHTML = "";
			loganniu.style.display = "block";
			reanniu.style.display = "block";
			tuichudenglu.style.display = "none";
		})



	});
</script>

</html>