function calcul(){
    var nombre;
    nombre=document.getElementById("value").value;
    var result="<p>-- Table de "+nombre+" --</p>";
    for(var i=1;i<=10;i++){
        result+="<p>"+nombre+" x "+i+" = "+i*nombre+"</p>";
    }
    document.getElementById("result").innerHTML = result;
}