<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS 7</title>
</head>
<body>
    <h1>JS 7 - état de l'eau</h1>
    <p id="temp"></p>
    <p id="etat"></p>

    <h1>JS 7b - état de l'eau avec un formulaire</h1>
    <form action="">
        <label for="value">Tapez la température</label>
        <input type="number" name="value" id="value">&nbsp;
        <button type="button" onclick="edit(1)">+10</button>&nbsp;
        <button type="button" onclick="edit(2)">-10</button>
        <br>
        <button type="button" onclick="donne()">Submit</button>
    </form>
    
    <p id="temp2"></p>
    <p id="etat2"></p>

    <h1>JS 7c - état de l'eau sans soumission</h1>
    <form action="">
        <label for="value3">Tapez la température</label>
        <input type="number" name="value3" id="value3" onchange="changement()">&nbsp;
        <button type="button" onclick="edit2(1)">+10</button>&nbsp;
        <button type="button" onclick="edit2(2)">-10</button>
    </form>
    
    <p id="temp3"></p>
    <p id="etat3"></p>

    <script src="js/main.js"></script> 
</body>
</html>