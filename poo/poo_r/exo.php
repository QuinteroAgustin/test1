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
    try {
        $voiture1 = new Voiture("voiture1");
        $voiture1->avancer(100); // Erreur
        $voiture1->afficher();
        $camion1 = new Camion("camion1");
        $camion1->charger(-5000); // Erreur
        $camion1->demarrer();
        $camion1->avancer(300);
        $camion1->afficher();
        } catch (Mon_exception $ex) {
            echo "<p>Mon_exception</p>";
            echo "<p>Message = ".$ex->getMessage()."</p>";
            echo "<p>Code = ".$ex->getCode()."</p>";
        }
        echo "<p>".Vehicule::$nb . " véhicule(s) instancié(s)</p>";
    ?>
</body>
</html>