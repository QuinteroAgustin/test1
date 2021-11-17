var result="<p></p>";
for(var i=1;i<=100;i++){
    if(i%2==0){
        result+="<li>"+i+"</li>";
    }
}
document.getElementById("result").innerHTML =result;