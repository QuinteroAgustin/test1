<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS 5</title>
</head>
<body>
    <h1>JS 5 - parité d'un nombre</h1>
    <p id="r"></p>
    <script>
        var n, valeur;
        n = prompt("Saisir un nombre");
        if(n%2==0){
            valeur="pair";
        }else{
            valeur="impair";
        }
        document.getElementById("r").innerHTML= n + " est " + valeur;
    </script>

    
</body>
</html>