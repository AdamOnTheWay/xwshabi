<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Public/css/index.css" media="all" type="text/css">
    <title>我的评价</title>
    <script  src="/steptu/Web/Tpl/ueditor/ueditor.config.js"></script>
    <script src="/steptu/Web/Tpl/ueditor/ueditor.all.min.js"></script>
    <script src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="../Public/js/jquery.form.js"></script>
    <script src="../Public/js/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
    <script src="../Public/js/jquery-easyui-1.4.2/locale/easyui-lang-zh_CN.js"></script>
    <script src="../Public/js/jquery.cookie.js"></script>
    <script src="../Public/js/vipcenter.js"></script>
    <script src="../Public/js/login.js"></script>
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
    <link rel="stylesheet" href="../Public/css/css.css" media="all">
    <link href="../Public/css/vipCenter.css" rel="stylesheet" type="text/css">
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
        <img src="__IMG__/xuanchuan.png" class="xuanchuan">
        <img src="__IMG__/phone.png" class="phone">
        
    </div>
    
   
    <div class="mainbox"></div>

    <div class="container">
        <img src="../Public/images/vipCenter/headtitle.png"><br><br/>
        <div class="dearVIP">
            <img src="../Public/images/vipCenter/point.png">
            <div class="realDearVIP">
                尊敬的会员<span><?php echo ($user["name"]); ?></span>，欢迎你！<br/>
                手机号码：<span><?php echo ($user["phone"]); ?></span>  |  邮箱地址：<span><?php echo ($user["email"]); ?></span>
            </div>
        </div>
        <div class="border">
            <div class="empty"></div>
            <!--<div id="myEvaluation">  &lt;!&ndash;我的评价&ndash;&gt;-->
                <div class="myEvaluations">
                    <table>
                        <tr style="background-color: #9ccde7;height: 30px;text-align: left;font-size: 12px">
                            <th style="width: 400px">我的点评</th>
                            <th style="width: 150px">满意程度</th>
                            <th style="width: 150px">点评时间</th>
                        </tr>
                        <?php if(is_array($order)): foreach($order as $key=>$v): ?><tr>  <!-- 从这里开始循环，每增加一条评价，增加一个tr-->
                                <td><?php echo (htmlspecialchars_decode($v["content"])); ?></td>
                                <td><?php echo ($v["level"]); ?></td>
                                <td><?php echo ($v["time"]); ?></td>
                            </tr> <!-- 到这里循环结束--><?php endforeach; endif; ?>
                    </table>
                    <?php echo ($show); ?>
                </div>
            <?php if($juge == 1): ?><form class="operations" action="<?php echo U('Index/vipCenter/orderComment');?>" method="post" enctype="multipart/form-data">
                    <div class="giveAComment">
                        评分：
                        <label><input type="checkbox" name="level" value="满意" checked='checked' onclick="chooseOne(this)">满意</label>
                        <label><input type="checkbox" name="level" value="一般" onclick="chooseOne(this)">一般</label>
                        <label><input type="checkbox" name="level" value="不满意" onclick="chooseOne(this)">不满意</label>
                    </div>
                    <div class="giveAComment">
                        <span>评价：</span>
                        <ol>
                            <li>行程安排</li>
                            <li>旅游交通</li>
                            <li>餐饮服务</li>
                            <li>导游服务</li>
                            <li>酒店住宿</li>
                        </ol><br/>
                    </div>
                    <input type='hidden' value="<?php echo ($travelId); ?>" name='travelId'>
                    <label><textarea class="textarea" name="content" id="content"></textarea><br/></label>
                    <script type="text/javascript">
                            window.UEDITOR_HOME_URL = '/steptu/Web/Tpl/ueditor/';
                            window.UEDITOR_CONFIG.toolbars = [['undo', 'redo','|',
                                                               'bold', 'italic',
                                                                'emotion','date', 'time'
                                                               ]];
                            window.UEDITOR_CONFIG.scaleEnabled  = true;
                            window.UEDITOR_CONFIG.elementPathEnabled = false;
                            var ue = UE.getEditor('content',{initialFrameWidth:550,initialFrameHeight:80});
                     </script>
                <!--     <input id="imgfile" type="file" accept="image/gif, image/png, image/jpeg" name="image" /> -->
                    <div class="giveAComment">
                        <!-- <span>验证码：</span><label><input class="easyui-textbox" style="height: 20px;width: 50px"></label>
                        <img src="<?php echo U('Index/loginVerify/identify');?>" id="code"/><a href="javascript:void(change_code(this));">看不清</a> -->
                         <script>
                        //     var verifyURL = "<?php echo U('Index/loginVerify/identify','','');?>";
                        //     function change_code(){
                        //         document.getElementById("code").setAttribute("src",verifyURL +'/' + Math.random());
                        //         return false;
                        //     }
                         </script>
                    </div>
                    <button class="button" type="submit">上传</button>
                    <button class="button_1" type="reset">取消</button>
                </form>
            <!--</div>-->
              <?php else: endif; ?>
        </div>
    </div>

   <div class="navbar">
        <div class="userHead">
            <div class="imageBox">
                <img id="imgHead" src="../Public/images/vipCenter/head.png">
                <a onclick="fileSelect()">上传头像</a>  <!-- -->
            </div>
            <span><?php echo ($user["name"]); ?></span>
            <form id="form_face" method="post" enctype="multipart/form-data" style="width:auto;">  <!--  上传头像提交表单-->
                <input type="file" accept="image/gif, image/png, image/jpeg" name="fileToUpload" id="fileToUpload" onchange="fileSelected();" style="display:none;">
            </form>
            <script type="text/javascript">  <!--上传头像函数 -->
            function fileSelect() {
                document.getElementById("fileToUpload").click();
            }
            function fileSelected() {
                // 文件选择后触发次函数
                var option = {
                    url: "<?php echo U('Index/vipCenter/handUploadImage','','');?>",
                    success: showResponse

                };
                $('#form_face').ajaxForm(option).submit();

            }
            function showResponse(data){
                if (data["msg"] == 1) {
                     $("#imgHead").attr('src',"/travel/steptu/"+data["path"]);
                }else{
                    alert(data["path"]);
                }
            }
            </script>
        </div>
        <div class="realNavbar">
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myOrders','','');?>">我的订单</a>
            </div>
            <div class="realNavbarContent">
                    <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myGrades','','');?>">我的积分 | 奖励</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myEvaluations','','');?>/juge/3">我的评价</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myInformation','','');?>">我的信息</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="myMoneyPot.html">我的储钱罐旅行计划</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myTravealBook','','');?>">写给未来的信</a>
            </div>
            <div class="realNavbarContent">
                <img src="../Public/images/vipCenter/point.png"><a href="<?php echo U('Index/vipCenter/myFelling','','');?>">旅游随感</a>
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
                <li><strong>用户名：</strong><input class="ipt" id="loginUsername" type="text" name="log" value="jq22" size="20" /></li>
                <li><strong>密码：</strong><input class="ipt" id="loginPassword" type="password" name="pwd" value="***" size="20" /></li>
                <li><input class="btn btn-primary" id="loginButton" type="submit" name="submit" value=" 登 录 " /></li>
            </ol>
        </form>
    </div>
</div>
<div class="theme-popover-mask"></div>
</body>
</html>