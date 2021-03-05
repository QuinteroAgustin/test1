var n;
n=prompt("Saisir une valeur de température");
document.getElementById("temp").innerHTML = "Température : "+ n;
if(n<0){
    document.getElementById("etat").innerHTML = "Etat : Solide";
}else if(n>=0 && n<100){
    document.getElementById("etat").innerHTML = "Etat : Liquide";
}else{
    document.getElementById("etat").innerHTML = "Etat : Gazeux";
}

function edit(a){
    if(a == 1){
        document.getElementById("value").value = Number(document.getElementById("value").value)+Number(10);
    }else{
        document.getElementById("value").value = Number(document.getElementById("value").value)-Number(10);
    }
}

function donne(){
    var val;
    val = document.getElementById("value").value;
    document.getElementById("temp2").innerHTML = "Température : "+ val;
    if(val<0){
        document.getElementById("etat2").innerHTML = "Etat : Solide";
    }else if(val>=0 && val<100){
        document.getElementById("etat2").innerHTML = "Etat : Liquide";
    }else{
        document.getElementById("etat2").innerHTML = "Etat : Gazeux";
    }
}

function changement(){
    var val;
    val = document.getElementById("value3").value;
    document.getElementById("temp3").innerHTML = "Température : "+ val;
    if(val<0){
        document.getElementById("etat3").innerHTML = "Etat : Solide";
    }else if(val>=0 && val<100){
        document.getElementById("etat3").innerHTML = "Etat : Liquide";
    }else{
        document.getElementById("etat3").innerHTML = "Etat : Gazeux";
    }
}

function edit2(a){
    if(a == 1){
        document.getElementById("value3").value = Number(document.getElementById("value3").value)+Number(10);
    }else{
        document.getElementById("value3").value = Number(document.getElementById("value3").value)-Number(10);
    }
    document.getElementById("value3").onchange();
}