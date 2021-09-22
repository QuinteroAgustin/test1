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
        $pneu1 = new Pneu("michelin", "185/65 R15", "2.2", "avg");
        $pneu2 = new Pneu("michelin", "185/65 R15", "2.2", "avd");
        $pneu3 = new Pneu("michelin", "185/65 R15", "2.2", "arg");
        $pneu4 = new Pneu("michelin", "185/65 R15", "2.2", "ard");
        $voiture1->monter_pneu($pneu1);
        $voiture1->monter_pneu($pneu2);
        $voiture1->monter_pneu($pneu3);
        $voiture1->monter_pneu($pneu4);
        $voiture1->afficher();
        $voiture1->afficher_pneus();
        echo "<p>Il y a ". $voiture1->nb_pneus(). " pneu(s) monté(s)</p>";
        } catch (Mon_exception $ex) {
        echo "<p>Message = ".$ex->getMessage()."</p>";
        echo "<p>Code = ".$ex->getCode()."</p>";
        }
        echo Vehicule::$nb . " véhicule(s) instancié(s)";
    ?>
</body>
</html>