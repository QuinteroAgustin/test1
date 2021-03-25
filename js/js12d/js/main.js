function calcul(){
    var nombre;
    var result="<p></p>";
    nombre=document.getElementById("value").value;
    for(var i=1;i<=10;i++){
        result+="<p>"+nombre+" * "+i+" = "+i*nombre+"</p>";
    }
    document.getElementById("result").innerHTML = result;
}