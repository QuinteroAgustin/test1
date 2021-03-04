<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 12</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body id="top">
    <h1>Php 12</h1>

    <?php
    
    $chaine ="l'élève a dépassé le maître";
    echo $chaine."</br>";
    $nb_char = mb_strlen($chaine);
    echo "taille de la chaine : ".$nb_char."</br>";
    $pos1 = mb_stripos($chaine, "le"); 
    echo "position du le : ".$pos1."</br>";
    $pos2 = mb_stripos($chaine,"é"); 
    echo "position du é : ".$pos2."</br>";
    $nbchare=mb_substr_count($chaine, "é");
    echo "nb de é : ".$nbchare."</br>";

    ?> 
    
    <p>Aller au <a href="#top">Top</a></p>  
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>