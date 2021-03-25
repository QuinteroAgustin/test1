var n, taille=10;
n=prompt("Saisir un nb");
document.getElementById("title").innerHTML="-- Table de "+n+" --";
for(var i=1;i<=taille;i++){
    document.write(n+" x "+i+" = "+n*i+"<br>");
}