var taille, masse, indice, interpretation;
taille=prompt("Saisissez la taille (m)");
masse=prompt("Saisissez la masse (kg)");
indice=masse/(taille**2);
document.getElementById('taille').innerHTML ="Taille : "+taille;
document.getElementById('masse').innerHTML ="Masse : "+masse;
document.getElementById('indice').innerHTML ="Indice : "+indice;