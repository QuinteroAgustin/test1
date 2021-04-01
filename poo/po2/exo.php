<?php
    include('voiture.php');
    $v1= new Voiture();
    $v2= new Voiture("gus", "renault", "megan");
    $v3= new Voiture("loic","lambo");


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO1</title>
</head>
<body>
    <h1>Creation de la classe voiture</h1>
    <?php
    $v1->afficher();
    $v2->demarrer()->avancer(130)->arreter()->afficher();
    $v3->demarrer()->allerA()->arreter()->afficher();

    ?>
</body>
</html>