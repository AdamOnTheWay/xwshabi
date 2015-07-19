<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>酒店订单管理</title>
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
<form action="<?php echo U('');?>" name="" method="post">酒店订单搜索
    <br> 酒店订单id
    <input name="id" type="text" value="">
  
    <br/>住客姓名
    <input type="text" value="" name='name'>
    <br/>联系手机
    <input type="text" value="" name="phone">
    <br/> 
    <input type="submit" value="搜索" />
</form>
<br>
<br>
<br>

<table border="1" cellspacing="10">
    <tr>
        <td>酒店订单id</td>
        <td>酒店订单名</td>
        <td>住客姓名</td>
        <td>联系电话</td>
        <td>总的花费</td>
        <td>酒店链接</td>
    </tr>

    <!-- 以下是一层 name需要你渲染上去对应的套餐id-->
    <?php if(is_array($content)): foreach($content as $key=>$u): ?><tr>
            <td><?php echo ($u["id"]); ?></td>
            <td><?php echo ($u["content"]); ?></td>
            <td><?php echo ($u["name"]); ?></td>
            <td><?php echo ($u["phone"]); ?></td>
            <td><?php echo ($u["price"]); ?></td>
            <td>酒店链接</td>
            <td><a href="#">套餐的链接</a> </td>
            <td style="cursor:pointer;" class="xiugai" name="">
                <font size="3" color="red">修改</font>
            </td>
            <td style="cursor:pointer;" name="" class="shanchu">
                <font size="3" color="red">删除</font>
            </td>
        </tr><?php endforeach; endif; ?>
    <?php echo ($page); ?>
</table>
<br>
<br>
<br>
<div id="jiudianyudingxinxi" style="display:none;">
    <form action="<?php echo U('');?>" name="" id="" method="">
        <br> 酒店订单id
        <input name="" type="text" value="">
        <br> 酒店订单名
        <input name="" type="text" value="">
        <br> 入住时间
        <input name="" type="text" value="">
        <br> 入住天数
        <input name="" type="number" value="">
        <br/>预定间数
        <input name="" type="text" value="">
        <br/>住客姓名
        <input type="text" value="">
        <br/>联系手机
        <input type="text" value="">
        <br/>
        <input type="submit" value="提交修改" /> &nbsp &nbsp &nbsp
        <input type="reset" value="重置" />
    </form>
</div>

</body>

</html>
<script type="text/javascript">


    $(".xiugai").click(function() {
        jiudianyudingxinxi.style.display = "block";
//        var changshi=$(this).attr("name");
//        namechangshi="name"+changshi;
//
//        // document.getElementById("taocanid").innerHTML =changshi;
//        $("#taocanid").val(changshi);
//        $("#taocanming").val($("#name"+changshi).html());
//        $("#youhuijia").val($("#price"+changshi).html());
//        $("#shifoushuyu").val($("#ifdiscount"+changshi).html());
    });

    $(".shanchu").click(function() {
        //alert($(this).attr("name"));
        url = '<?php echo U();?>';
        $.post(url, {
            data: $(this).attr("")
        }, function(data) {
            location.reload();
        });
    })


</script>