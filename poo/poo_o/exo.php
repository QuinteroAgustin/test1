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
    <title>POO1_n</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <h1>Creation de la classe voiture</h1>
    <?php
    // La voiture
    $voiture1 = new Voiture("voiture1");
    $voiture1->demarrer();
    $voiture1->avancer(100);
    $voiture1->afficher();
    // Le véhicule
    /*$vehicule1 = new Vehicule("vehicule1");
    $vehicule1->demarrer();
    $vehicule1->avancer(200);
    $vehicule1->afficher();*/
    // Le camion
    $camion1 = new Camion("camion1");
    $camion1->charger(5000);
    $camion1->demarrer();
    $camion1->avancer(300);
    $camion1->afficher();
    // Comptage des objets
    echo Vehicule::$nb . " véhicule(s) instancié(s)";
    ?>
</body>
</html>