<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>关于游记管理</title>
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

<br> <span style="font-size: 40px">关于游记:</span>
<br>
<br>
<form action="<?php echo U('Index/background/addAboutUs','','');?>" method="post">
    <!-- 加载编辑器的容器 -->
    <script id="guanyuyouji" name="aboutUs" type="text/plain">

    </script>
    <button type="submit">确认</button>
</form>
<br>
<br> <span style="font-size: 40px">联系我们:</span>
<br>
<br>
<!-- 加载编辑器的容器 -->
<form action="<?php echo U('Index/background/addcontactUs');?>" method="post">
    <script id="lianxiwomen" name="contactUs" type="text/plain">
			这里写初始化内容
		</script>
    <br>
    <button  type="submit">确认</button>
</form>
<br> <span style="font-size: 40px">一起合作:</span>
<br>
<br>
<!-- 加载编辑器的容器 -->
<form action="<?php echo U('Index/background/addcooperation');?>" method="post">
    <script id="yiqihezuo" name="cooperation" type="text/plain">
			这里写初始化内容
		</script>
    <button  type="submit">确认</button
</form>
<br>
<br> <span style="font-size: 40px">用户协议:</span>
<br>
<br>
<!-- 加载编辑器的容器 -->
<form action="<?php echo U('Index/background/adduserLaws');?>" method="post">
    <script id="yonghuxieyi" name="userLaws" type="text/plain">
			这里写初始化内容
		</script>
    <button  type="submit">确认</button>
</form>
<br>
<br> <span style="font-size: 40px">诚聘英才:</span>
<br>
<br>
<!-- 加载编辑器的容器 -->
<form action="<?php echo U('Index/background/addrecrult');?>" method="post">
    <script id="chengpinyingcai" name="recruit" type="text/plain">
			这里写初始化内容
		</script>
    <button  type="submit">确认</button>
</form>
<script type="text/javascript" src="/xwshabi/steptu/Web/Tpl/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/xwshabi/steptu/Web/Tpl/ueditor/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var editor = UE.getEditor('guanyuyouji');
    var editor = UE.getEditor('lianxiwomen');
    var editor = UE.getEditor('yiqihezuo');
    var editor = UE.getEditor('yonghuxieyi');
    var editor = UE.getEditor('chengpinyingcai');
</script>
</body>

</html>