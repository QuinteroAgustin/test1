var a=Number(prompt("a :"));
var b=Number(prompt("b :"));
var c=Number(prompt("c :"));
var delta= Math.pow(b,2)-(4*a*c);
document.getElementById("delta").innerHTML="Delta = "+delta;
if(delta>0){
    document.getElementById("result").innerHTML="Deux solutions : d>0";
    var x1=(((-b)+Math.sqrt(delta))/(2*a));
    var x2=(((-b)-Math.sqrt(delta))/(2*a));
    document.getElementById("x1").innerHTML="x1 : "+x1;
    document.getElementById("x2").innerHTML="x2 : "+x2;
}else if(delta == 0){
    var x1=(-b/(2*a));
    document.getElementById("result").innerHTML="Une solution : d=0";
    document.getElementById("x1").innerHTML="x1 : "+x1;
}else if(delta <0){
    document.getElementById("result").innerHTML="Pas de solutions : d<0";
}