var dateheure=setInterval(myTime, 1000);
function myTime(){
    var date= new Date();
    document.getElementById("heure").innerHTML=date.toLocaleTimeString();
    document.getElementById("date").innerHTML=date.toLocaleDateString();
}