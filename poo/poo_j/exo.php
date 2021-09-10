<?php
    //include "class/Voiture.php";
    function my_autoloader($classe) {
        include 'class/'.$classe.'.php';
    }
    spl_autoload_register('my_autoloader');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO1_j</title>
</head>
<body>
    <h1>Creation de la classe voiture</h1>
    <?php
    $voiture1 = new Voiture("voiture1");
    $voiture1->afficher();
    $vehicule1 = new Vehicule("vehicule1");
    $vehicule1->afficher();
    $camion1 = new Camion("camion1");
    $camion1->charger(5000);
    $camion1->charger(200);
    $camion1->charger(-1000);
    $camion1->afficher();

    ?>
</body>
</html>