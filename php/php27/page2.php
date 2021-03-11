<?php 
    session_start(); 
    if(isset($_SESSION['compteurpage2'])){
        $_SESSION['compteurpage2']=$_SESSION['compteurpage2']+1;
    }else{
        $_SESSION['compteurpage2']=1;
    }
    if(!isset($_SESSION['compteurpage3'])){
        $_SESSION['compteurpage3']=0;
    }
    if(!isset($_SESSION['compteuraccueil'])){
        $_SESSION['compteuraccueil']=0;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP27</title>
</head>
<body>
    <h1>php 27 - Compteur de visite</h1>
    <p><a href="exo.php">Home</a></p>
    <p><a href="page3.php">Page 3</a></p>
    <p><a href="raz.php">Raz compteur</a></p>
    <p><?= $_SESSION['compteuraccueil'] ?> Visites sur la pages d'accueil</p>
    <p><?= $_SESSION['compteurpage2'] ?> Visites de la page 2</p>
    <p><?= $_SESSION['compteurpage3'] ?> visites de la page 3</p>
    <p>Nr de session : <?= session_id(); ?> </p>
    <p>Nom de session : <?= session_name() ?> </p>
</body>
</html>