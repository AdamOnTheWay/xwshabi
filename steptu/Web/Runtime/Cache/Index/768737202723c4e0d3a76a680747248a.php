<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>旅游志管理</title>
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
<form action="<?php echo U('Index/background/lvyouzhiguanli');?>" name="" method="post" style="float: left">旅游志搜索
    <br> 旅游志id
    <input name="travelid" type="text" value="">
    <br> 旅游志名
    <input name="travelname" type="text" value="">
    <br> 作者
    <input name="userName" type="text" value="">
  <!--   <br>写作日期
    <input class="easyui-datebox">
 -->    <br/>旅游志内容关键字
    <input type="text" value="" naem="content">
    <br/>
    <input type="submit" value="搜索" />
</form>
<form action="" name="" method="post" style="float: left;margin-left: 100px">写给未来的信搜索
    <br> 未来的信id
    <input name="letterid" type="text" value="">
    <br> 未来的信名
    <input name="theme" type="text" value="">
    <br> 作者
    <input name="name" type="text" value="">
    <!-- <br>写作日期
    <input class="easyui-datebox"> -->
    <br/>未来的信内容关键字
    <input type="text" value="" name="lettercontent">
    <br/>
    <input type="submit" value="搜索" />
</form>
<div style="clear: both"></div>
<br>
<br>
<br>



<table border="1" cellspacing="10" style="float: left">

    <tr>
        <td> 旅游志id</td>
        <td>旅游志名</td>
        <td>作者</td>
        <td>写作日期</td>
    </tr>

  <?php if(is_array($travelContent)): foreach($travelContent as $key=>$v): ?><tr>
            <td> <?php echo ($v["id"]); ?></td>
            <td><?php echo ($v["name"]); ?></td>
            <td><?php echo ($v["userName"]); ?></td>
            <td><?php echo ($v["time"]); ?></td>
            <td style="cursor:pointer;" name="" class="shanchu">
                <font size="3" color="red" onclick="window.open('<?php echo U('Index/background/deleteTravel','','');?>/id/<?php echo ($v["id"]); ?>');">删除</font>
            </td>
            <td style="cursor:pointer;" >  <!--跳转到旅游志详情  -->
                <font size="3" color="red" onclick="window.open('<?php echo U('Index/background/lvyouzhixiangqing','','');?>/id/<?php echo ($v["id"]); ?>');">详情</font>
            </td>
        </tr><?php endforeach; endif; ?>
    <!-- 循环-->
</table>

<table border="1" cellspacing="10" style="float: left;margin-left: 100px">
    <tr>
        <td> 未来的信id</td>
        <td>未来的信名</td>
        <td>作者</td>
        <td>发送时间日期</td>
    </tr>
    <?php if(is_array($letterContent)): foreach($letterContent as $key=>$v): ?><tr>
            <td> <?php echo ($v["id"]); ?></td>
            <td><?php echo ($v["theme"]); ?></td>
            <td><?php echo ($v["name"]); ?></td>
            <td><?php echo ($v["time"]); ?></td>
            <td style="cursor:pointer;" name="" class="shanchu">
                <font size="3" color="red" onclick="window.open('<?php echo U('Index/background/deletletter','','');?>/id/<?php echo ($v["id"]); ?>');">删除</font>
            </td>
            <td style="cursor:pointer;" >  <!--跳转到未来的信详情 -->
                <font size="3" color="red" onclick="window.open('<?php echo U('Index/background/weilaidexinxiangqing','','');?>/id/<?php echo ($v["id"]); ?>');">详情</font>
            </td>
        </tr><?php endforeach; endif; ?>
    <!-- 循环-->
</table>
<?php echo ($page); ?>
<div style="clear: both"></div>
<br>
<br>
<br>

</body>

</html>
<script type="text/javascript">

    $(".shanchu").click(function() {
        url = '<?php echo U();?>';
        $.post(url, {
            data: $(this).attr("")
        }, function(data) {
            location.reload();
        });
    })

</script>