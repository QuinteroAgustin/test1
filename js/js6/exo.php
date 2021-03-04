<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS 5</title>
</head>
<body>
    <h1>JS 6 - plus grand nombre parmi trois</h1>
    <p id="a"></p>
    <p id="b"></p>
    <p id="c"></p>
    <p id="maxi"></p>
    <script>
        var nb, maxi=0;
        let tab = [];
        for(var i=0;i<3;i++){
            nb = prompt("Saisir la valeur " + Number(i+1));
            tab[i]=nb;
            if(nb>maxi){
                maxi=nb;
            }
        }
        document.getElementById("a").innerHTML= "a : "+tab[0];
        document.getElementById("b").innerHTML= "a : "+tab[1];
        document.getElementById("c").innerHTML= "a : "+tab[2];
        document.getElementById("maxi").innerHTML= "maxi : "+maxi;
    </script>

    
</body>
</html>