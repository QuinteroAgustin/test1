<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS 3</title>
</head>
<body>
    <h1>JS 3 - Moyenne des températures</h1>
    <p id="t1"></p>
    <p id="t2"></p>
    <p id="t3"></p>
    <p id="somme"></p>
    <p id="moyenne"></p>
    <script>
        var nb, somme=0, moyenne=0;
        let temp = [];
        for(var i=1;i<4;i++){
            nb = prompt("Saisir la température "+ i);
            temp[i-1]=nb;
            somme=Number(somme)+Number(nb);
        }
        moyenne=somme/3;
        document.getElementById("t1").innerHTML= "t1 : "+temp[0];
        document.getElementById("t2").innerHTML= "t2 : "+temp[1];
        document.getElementById("t3").innerHTML= "t3 : "+temp[2];
        document.getElementById("somme").innerHTML= "somme : "+somme;
        document.getElementById("moyenne").innerHTML= "moyenne : "+moyenne;
    </script>

    
</body>
</html>