/**
 * Created by Adam on 15/6/11.
 */
$(document).ready(function () {
    var show1 = document.getElementById('loginAndRegister'); //设置一个变量用于接收id的元素
    var show2 = document.getElementById('afterLogin');
    $("#loginButton").click(function() {
        var loginUsername = $("#loginUsername").val();
        var loginPassword = $("#loginPassword").val();
        $.cookie("loginUsername", loginUsername, { expires: 7 });
        $.cookie("loginPassword", loginPassword, { expires: 7 });
    });
    var loginUsername = $.cookie("loginUsername");
    var loginPassword = $.cookie("loginPassword");
    if (loginUsername && loginPassword) {
        //alert("登录成功！");
        show2.style.display="block";
        show1.style.display="none";
    } else {
        show1.style.display="block";
        show2.style.display="none";
    }

    $("#exitLogin").click(function() {
        alert("您已退出当前登录！");
        $.cookie("loginUsername", loginUsername, { expires: -1 });
        $.cookie("loginPassword", loginPassword, { expires: -1 });
        show2.style.display="none";
        show1.style.display="block";
    });
});