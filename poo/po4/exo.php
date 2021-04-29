<?php
    include('voiture.php');
    $v1= new Voiture("Lulu");
    $v2= new Voiture();


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO1_e</title>
</head>
<body>
    <h1>Creation de la classe voiture</h1>
    <?php
    $v1->setMarque('Dacia');
    $v1->model ='trololol';
    $v1->afficher();
    $v2->afficher();
    ?>
</body>
</html>