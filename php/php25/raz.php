<?php 
    session_start(); 
    if(isset($_SESSION['compteur'])){
        $_SESSION['compteur']=0;
    }else{
        $_SESSION['compteur']=0;
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
    <p><a href="exo.php">Home</a></p>
    <p>Compteur de visite : <?= $_SESSION['compteur'] ?></p>
</body>
</html>