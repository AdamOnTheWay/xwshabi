var t = new Date();
    var mydate=new Date("05/10/2015")
    var mydate1=new Date("05/12/2015")
    var da = t.getFullYear() + "-" + (t.getMonth() + 1) + "-" + t.getDate();
    document.getElementById("chufashijianshuru").value=da;
//c:容器,y:年,m:月,a:出发时间json,f:是否显示双日历,fu:回调调
    var para = { 'c': 'calendarcontainer',
        'y': t.getFullYear(),
        'm': t.getMonth() + 1,
        'a': {
            'd1': da, //最早时间
            'd2': '2015-08-05'//最晚时间
        },
        'f': 0, //显示双日历用1，单日历用0

        'clickfu': function (to) {//回调函数，to为点击对象，点击日期是调用的函数,参数to为点击的日期的节点对象，可以把用户选定的日期通过此函数存入服务端或cookies，具体请自行编写
            //alert(dateCompare(to.id, '2015-05-05'));
            if (to.id != "" & dateCompare(to.id, '2015-08-05') & dateCompare(da, to.id)) {
                //alert(to);当点击
                //alert(to.id + "--")
              
                document.getElementById("chufashijianshuru").value=to.id;
            }
        },
        'showFu': function (d) {	//回调函数，d为要显示的当前日期，主要用于判断是否要在该日期的格子里显示出指定的内容，在日期格子里额外显示内容的函数,返回值必须为字符串，参数d为显示的日期对象（日期类型）
            //回调显示价格{date，price,num}
            if (mydate.toLocaleDateString() == d.toLocaleDateString()) {
                //if (dateCompare(d.id, '2015-05-05') & dateCompare(da, to.id))
                // alert(d.getFullYear() + "-" + (d.getMonth() + 1) + "-" + d.getDate());
                return "<br/><em class='sss'>￥770</em>";
            }
           else if (mydate1.toLocaleDateString() == d.toLocaleDateString()) {
                //if (dateCompare(d.id, '2015-05-05') & dateCompare(da, to.id))
                // alert(d.getFullYear() + "-" + (d.getMonth() + 1) + "-" + d.getDate());
                return "<br/><em class='sss'>￥770</em>";
            }
            else {
                return "";
            }
        }

    }

    CreateCalendar(para, "para"); //参数前一个是对象，后一个是对象名称

    function dateCompare(startdate, enddate) {
        var arr = startdate.split("-");
        var starttime = new Date(arr[0], arr[1], arr[2]);
        var starttimes = starttime.getTime();

        var arrs = enddate.split("-");
        var lktime = new Date(arrs[0], arrs[1], arrs[2]);
        var lktimes = lktime.getTime();

        if (starttimes > lktimes) {
            return false;
        }
        else
            return true;

    }  


    <!--//--><![CDATA[/><!--
//图片滚动列表 mengjia 070816
var Speed = 10; //速度(毫秒)
var Space = 5; //每次移动(px)
var PageWidth = 168; //翻页宽度
var fill = 0; //整体移位
var MoveLock = false;
var MoveTimeObj;
var Comp = 0;
var AutoPlayObj = null;
GetObj("List2").innerHTML = GetObj("List1").innerHTML;
GetObj('ISL_Cont').scrollLeft = fill;
GetObj("ISL_Cont").onmouseover = function(){clearInterval(AutoPlayObj);}
GetObj("ISL_Cont").onmouseout = function(){AutoPlay();}
AutoPlay();
function GetObj(objName){if(document.getElementById){return eval('document.getElementById("'+objName+'")')}else{return eval('document.all.'+objName)}}
function AutoPlay(){ //自动滚动
 clearInterval(AutoPlayObj);
 AutoPlayObj = setInterval('ISL_GoDown();ISL_StopDown();',6000); //间隔时间
}
function ISL_GoUp(){ //上翻开始
 if(MoveLock) return;
 clearInterval(AutoPlayObj);
 MoveLock = true;
 MoveTimeObj = setInterval('ISL_ScrUp();',Speed);
document.images['zuoguntu'].src='../Public/images/zuogun1.png'
}
function ISL_StopUp(){ //上翻停止
 clearInterval(MoveTimeObj);
 if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0){
  Comp = fill - (GetObj('ISL_Cont').scrollLeft % PageWidth);
  CompScr();
 }else{
  MoveLock = false;
 }
 document.images['zuoguntu'].src='../Public/images/zuogun.png'
 AutoPlay();
 
}
function ISL_StopUp1(){ //上翻停止
 clearInterval(MoveTimeObj);
 if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0){
  Comp = fill - (GetObj('ISL_Cont').scrollLeft % PageWidth);
  CompScr();
 }else{
  MoveLock = false;
 }
 document.images['zuoguntu'].src='../Public/images/zuogun1.png'
 AutoPlay();
 
}
function ISL_ScrUp(){ //上翻动作
 if(GetObj('ISL_Cont').scrollLeft <= 0){GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft + GetObj('List1').offsetWidth}
 GetObj('ISL_Cont').scrollLeft -= Space ;
}
function ISL_GoDown(){ //下翻
 clearInterval(MoveTimeObj);
 if(MoveLock) return;
 clearInterval(AutoPlayObj);
 MoveLock = true;
 ISL_ScrDown();
 MoveTimeObj = setInterval('ISL_ScrDown()',Speed);
 document.images['youguntu'].src='../Public/images/yougun1.png'
}
function ISL_StopDown(){ //下翻停止
 clearInterval(MoveTimeObj);
 if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0 ){
  Comp = PageWidth - GetObj('ISL_Cont').scrollLeft % PageWidth + fill;
  CompScr();
 }else{
  MoveLock = false;
 }
 document.images['youguntu'].src='../Public/images/yougun.png'
 AutoPlay();
 
}
function ISL_StopDown1(){ //下翻停止
 clearInterval(MoveTimeObj);
 if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0 ){
  Comp = PageWidth - GetObj('ISL_Cont').scrollLeft % PageWidth + fill;
  CompScr();
 }else{
  MoveLock = false;
 }
 document.images['youguntu'].src='../Public/images/yougun1.png'
 AutoPlay();
 
}

function ISL_ScrDown(){ //下翻动作
 if(GetObj('ISL_Cont').scrollLeft >= GetObj('List1').scrollWidth){GetObj('ISL_Cont').scrollLeft = GetObj('ISL_Cont').scrollLeft - GetObj('List1').scrollWidth;}
 GetObj('ISL_Cont').scrollLeft += Space ;
}
function CompScr(){
 var num;
 if(Comp == 0){MoveLock = false;return;}
 if(Comp < 0){ //上翻
  if(Comp < -Space){
   Comp += Space;
   num = Space;
  }else{
   num = -Comp;
   Comp = 0;
  }
  GetObj('ISL_Cont').scrollLeft -= num;
  setTimeout('CompScr()',Speed);
 }else{ //下翻
  if(Comp > Space){
   Comp -= Space;
   num = Space;
  }else{
   num = Comp;
   Comp = 0;
  }
  GetObj('ISL_Cont').scrollLeft += num;
  setTimeout('CompScr()',Speed);
 }
}