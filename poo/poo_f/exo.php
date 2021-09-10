<?php
    include('class/Voiture.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO1_f</title>
</head>
<body>
    <h1>Creation de la classe voiture</h1>
    <?php
    $voiture1 = new Voiture("voiture1");
    $voiture1->set_marque("Honda");
    $voiture1->afficher();
    $voiture2 = new Voiture("voiture2");
    $voiture2->set_marque("Renault");
    $voiture2->set_modele("Megane");
    $voiture2->set_compteur(0);
    $voiture2->demarrer();
    $voiture2->avancer(-200);
    $voiture2->arreter();
    echo "<p>Mon nom est " . $voiture2->get_nom() . "</p>";
    $voiture2->afficher();
    ?>
</body>
</html>