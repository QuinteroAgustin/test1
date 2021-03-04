<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS 4</title>
</head>
<body>
    <h1>JS 4 - surface et circonférence d'un cercle</h1>
    <p id="r"></p>
    <p id="s"></p>
    <p id="c"></p>
    <script>
        var rayon, surface, circon;
        rayon = prompt("Saisir le rayon du cercle");
        surface=(Math.PI*rayon**2).toFixed(2);
        circon=(2*Math.PI*rayon).toFixed(2);
        document.getElementById("r").innerHTML= "rayon : "+rayon;
        document.getElementById("s").innerHTML= "surface : "+surface;
        document.getElementById("c").innerHTML= "circonférence : "+circon;
    </script>

    
</body>
</html>