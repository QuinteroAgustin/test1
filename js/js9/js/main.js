var taille, masse, indice, interpretation;
taille=Number(prompt("Saisissez la taille (m)"));
masse=Number(prompt("Saisissez la masse (kg)"));
indice=Number((masse/(taille**2)));
document.getElementById('taille').innerHTML ="Taille : "+taille;
document.getElementById('masse').innerHTML ="Masse : "+masse;
document.getElementById('indice').innerHTML ="Indice : "+indice;

if(Number(indice)<=16.5){
    interpretation="Dénutrition ou famine";
}else if(Number(indice)>16.5 && indice<=18.5){
    interpretation="Maigreur";
}else if(Number(indice)>18.5 && indice<=25){
    interpretation="Corpulence normale";
}else if(Number(indice)>25 && indice<=30){
    interpretation="Surpoids";
}else if(Number(indice)>30 && indice<=35){
    interpretation="Obésité modérée";
}else if(Number(indice)>35 && indice<=40){
    interpretation="Obésité sévère";
}else{
    interpretation="Obésité morbide ou massive";
}
document.getElementById('interpretation').innerHTML="Interpretation : "+interpretation;