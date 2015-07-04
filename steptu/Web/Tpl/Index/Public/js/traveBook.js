///**
// * Created by Adam on 15/5/5.
// */
//$(document).ready(
//    function time(){
//    var d = new Date();
//    var str = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate();
//    document.getElementById("dataBox").innerHTML=str;
//    document.getElementById("dataBoxLetter").innerHTML=str;
//    document.getElementById("dataBox_2").innerHTML=str;
//}
//function readerNumber(){
//    var num = 0;
//    document.getElementById("readerNumber").innerHTML=num;
//}
//function replayNumber(){
//    var rep = 0;
//    document.getElementById("replayNumber").innerHTML=rep;
//}
//var like = 0;

//function likeNumber(){
//    var btn = document.getElementById('likeHeart');
//    btn.onclick = function() {
//        like++;
//    document.getElementById("likeNumber").innerHTML=like;
//}

function showFelling(){
    mainboxrealFelling.style.display="block";
    mainboxrealLetter.style.display="none";
}
function showLetter(){
    mainboxrealFelling.style.display="none";
    mainboxrealLetter.style.display="block";
}
$(document).ready(function(){
    $("#btnbox").find("a").eq(0).addClass("btn btn-primary");
    $("#btnbox").find("a").eq(1).addClass("btn btn-primary");
})