var nb, mention;
nb=prompt("Saisissez la moyenne du BAC");
document.getElementById("note").innerHTML ="Note : "+nb;
if(nb>=10 && nb<12){
    mention="Pas de mention";
}else if(nb>=12 && nb<14){
    mention="Assez Bien";
}else if(nb>=14 && nb<16){
    mention="Bien";
}else if(nb>=16){
    mention="Très bien";
}else{
    mention="Refusé";
}
document.getElementById("mention").innerHTML = "Mention : "+mention;