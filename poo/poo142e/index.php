<?php
//Logger  partie 
include("log.php");
$tableau = pathinfo(__FILE__);
$filename = $tableau['basename'];
logToDisk($filename);
//fin Logger partie
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ph142 - Accueil</title>
</head>
<body>
    <h1>Ph142e - Terminator</h1>
    <h3>Page d'accueil</h3>
    <ul>
        <li>Page d'<a href="index.php">accueil</a></li>
        <li>Liste des <a href="films.php">films</a></li>
        <li>Liste des <a href="acteurs.php">acteurs</a></li>
        <li>Liste  des <a href="relations.php">relations film-acteur</a></li>
    </ul>
    <p>Bienvenur sur le ph142, la référance sur Terminator !</p>
    <p>Retour au menu : <a href="../index.php">Menu</a></p>
</body>
</html>