<?php 
    if(isset($_COOKIE['compteur'])){
        setcookie('compteur',$_COOKIE['compteur']+1);
    }else{
        setcookie('compteur',1);
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP25</title>
</head>
<body>
    <h1>php 25 - Compteur de visite</h1>
    <p><a href="page2.php">Page 2</a></p>
    <p><a href="page3.php">Page 3</a></p>
    <p><a href="raz.php">Raz compteur</a></p>
    <p>Compteur de visite : <?= $_COOKIE['compteur'] ?></p>
    <p>Aller au <a href="#top">Top</a></p>  
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>