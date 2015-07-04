/**
 * Created by Adam on 15/6/6.
 */
//$(document).ready(function(){
//    function showGradesRecoder(){
//        gradesExchange.style.display="none";
//        gradesRecoder.style.display="block";
//    }
//    function showGradesExchange(){
//        gradesExchange.style.display="block";
//        gradesRecoder.style.display="none";
//    }
//});
//

function showGradesRecoder(){
    gradesExchange.style.display="none";
    gradesRecoder.style.display="block";
}
function showGradesExchange(){
    gradesExchange.style.display="block";
    gradesRecoder.style.display="none";
}
function chooseOne(cb){
    var obj = document.getElementsByName("giveAComment");
    for (i=0; i<obj.length; i++){
        if (obj[i]!=cb){
            obj[i].checked = false;}
        else
            obj[i].checked = true;
    }
}
function showWriter(){
    realTravealBook.style.display="block";
    realLetter.style.display="none";
}
function showLetter(){
    realTravealBook.style.display="none";
    realLetter.style.display="block";
}