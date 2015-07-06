<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../Public/css/index.css" media="all" type="text/css">
	<title>主题旅游</title>
	<script src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
	<script src="../Public/js/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
	<script src="../Public/js/jquery-easyui-1.4.2/locale/easyui-lang-zh_CN.js"></script>
	<link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
	<link rel="stylesheet" href="../Public/css/css.css" media="all">
	<link href="../Public/css/travelTheme.css" rel="stylesheet" type="text/css">
</head>
<body onload="likeNumber()">
<div class="quanbu">
	<div>
		<a href="<?php echo U('Index/travelStore/travelStore');?>"><img src="__IMG__/travelsm.png" class="travelsm"></a>
		<a href="<?php echo U('Index/vipCenter/myInformation');?>"><img src="__IMG__/personal.png" class="personal"></a>
		<a href="<?php echo U('Index/travelTheme/travelTheme');?>"> <img src="__IMG__/travel.png" class="travel" ></a>
		<a href="<?php echo U('Index/makePlan/makePlan');?>"> <img src="__IMG__/makeplan.png" class="makeplan"></a>
		<a href="<?php echo U('Index/index/index');?>"><img src="__IMG__/index.png" class="index"></a>
		<a href="<?php echo U('Index/travelBook/travelBook');?>"><img src="__IMG__/travelbook.png" class="travelbook"></a>
		<img src="../Public/images/xuanchuan.png" class="xuanchuan">
		<img src="../Public/images/phone.png" class="phone">
		<img src="../Public/images/register.png" class="register">
	</div>
	<div ><a href="javascript:;" class=" btn-large theme-login"><img src="../Public/images/login.png"class="login"></a>
	</div>

	<div class="mainbox"></div>
	<div class="alternative">
		<div class="themeTitle">主题旅游</div>
		<div class="alternativeDetial">
			<a href="<?php echo U(Index/travelTheme/travelTheme,'class=城市之间');?>">城市之间</a>
		</div>
		<div class="alternativeDetial">
			<a href="<?php echo U(Index/travelTheme/travelTheme,'class=年休假');?>">年休假</a>
		</div>
		<div class="alternativeDetial">
			<a href="<?php echo U(Index/travelTheme/travelTheme,'class=学子游');?>">学子游</a>	
		</div>
		<div class="alternativeDetial">
			<a href="<?php echo U(Index/travelTheme/travelTheme,'class=美食街');?>">美食街</a>	
		</div>
		<div class="alternativeDetial">
		<a href="<?php echo U(Index/travelTheme/travelTheme,'class=城市之间');?>">城市之间</a>	
		</div>
		<div class="alternativeDetial">
			<a href="<?php echo U(Index/travelTheme/travelTheme,'class=城市之间');?>">城市之间</a>	
		</div>
		<div class="alternativeDetial">
				<a href="<?php echo U(Index/travelTheme/travelTheme,'class=城市之间');?>">城市之间</a>
		</div>
		<div class="moreinfomation">更多>></div>
	</div>
	<div class="searchNavbar">
		<img src="../Public/images/travelTheme/headtitle.png"><br/>
		<form class="searchContainer" action="<?php echo U('Index/travelTheme/search');?>" method="post">
			<ol>
				<li style="font-weight: bolder;font-size: 14px">旅游搜索</li>
				<li>始发地
					<label>
					<select class="easyui-combobox" style="width: 50px" name='startPos'>
							<option></option>
						<?php if(is_array($startPos)): foreach($startPos as $key=>$v): ?><option><?php echo ($v["startPos"]); ?></option><?php endforeach; endif; ?>
					</select>
					</label>
				</li>
				<li>目的地<label>
					<select class="easyui-combobox" style="width: 50px" name='endPos'>
							<option></option>
						<?php if(is_array($endPos)): foreach($endPos as $key=>$v): ?><option><?php echo ($v["endPos"]); ?></option><?php endforeach; endif; ?>
					</select></label>
				</li>
				<li>价位
					<label>
					<select class="easyui-combobox" style="width: 60px" name='price'>
						<option></option>
						<option>0~300</option>
						<option>300~700</option>
						<option>700~100000</option>
					</select>
				</label>
				</li>
				<li>起始时间
					<label>
					<input class="easyui-datebox" style="width: 60px" name='startTime'>
					</label>
				</li>
				<li>截止时间
					<label>
						<input class="easyui-datebox" style="width: 60px" name='endTime'>
					</label>
				</li>
				<li>行程
					<label>
						<input class="easyui-textbox" style="width: 30px">
					</label>
				</li>
				<li>
					<input type="submit" value="" style="background: url('../Public/images/travelTheme/search.png');height: 25px;width: 25px;border: none;padding: 0">
				</li>
			</ol>
		</form>
	</div>
	<div class="container">
		<div class="mainboxreal">
			<?php if(is_array($list)): foreach($list as $key=>$v): ?><div class="travealThemeContent">  <!--从这里开始循环-->
					<img src="../Public/images/travelTheme/picture.jpg">
					<span style="color: #046bb3;font-size: 13px"><?php echo ($v["status"]); ?>：<?php echo ($v["name"]); ?></span><br/>
					<span style="color: #ff8004;font-size: 8px"><?php echo ($v["description"]); ?></span><br/>
					<span style="color: #ff6204;font-weight: bolder;font-size: 20px">￥<?php echo ($v["price"]); ?></span>
					<div class="operation">
						<a href="<?php echo U('Index/package/package');?>">详情</a> | 预定 <!-- 预定的id还没有加上去 -->
					</div>
				</div>  <!--到这里循环结束--><?php endforeach; endif; ?>
		</div>
		<p><?php echo ($page); ?></p>
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
</body>
</html>