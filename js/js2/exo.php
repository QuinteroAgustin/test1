<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS 2</title>
</head>
<body>
    <h1>JS 2 - Convertir euro/dollars</h1>
    <script>
        var nb;
        //nb = prompt("Saisir un montant en euro");
        document.write("<p>Montant en euros : "+nb+"</p>");
        document.write("<p>Montant en dollars : "+nb/0.88351+"</p>");
    </script>

    <h1>JS 2b - Convertir euro/dollars</h1>
    <form action="">
        <label for="valeur">Entrez une valeur : </label>
        <input type="text" name="valeur" id="valeur">
        <button type="button" onclick="conversion()">Calculer</button>
    </form>
    <p id="euro"></p>
    <p id="dollar"></p>
    <script>
        function conversion(){
            var nb;
            nb=document.getElementById("valeur").value;
            document.getElementById("euro").innerHTML = "Montant en euro : "+ nb;
            document.getElementById("dollar").innerHTML = "Montant en dollar : "+ nb/0.88351;
        }
    </script>

    <h1>JS 2c - Convertir euro/dollars</h1>
    <form action="">
        <label for="valeur">Euro : </label>
        <input type="text" name="valeur1" id="valeur1">
        <button type="button" onclick="conversion2(1)">euro>dollar</button>
    </form>
    <br>
    <form action="">
        <label for="valeur">Dollar : </label>
        <input type="text" name="valeur2" id="valeur2">
        <button type="button" onclick="conversion2(2)">dollar>euro</button>
    </form>
    <p id="euro1"></p>
    <p id="dollar1"></p>
    <script>
        function conversion2(a){
            var euro, dollar;
            if(a==1){
                euro=document.getElementById("valeur1").value;
                dollar=euro/0.88351;
                document.getElementById("valeur2").value=dollar;
            }else{
                dollar=document.getElementById("valeur2").value;
                euro=dollar*0.88351;
                document.getElementById("valeur1").value=euro;
            }
            document.getElementById("euro1").innerHTML = "Montant en euro : "+euro;
            document.getElementById("dollar1").innerHTML = "Montant en dollar : "+dollar;
        }
    </script>
</body>
</html>