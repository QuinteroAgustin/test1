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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>po04b.php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    $compte1 = new Depot("Bill Gates",500);
    $compte1->set_siphano(TRUE);
    $compte1->set_cb(TRUE);
    $compte1->afficher();
    $compte1->crediter(100);
    $compte1->afficher();
    $compte2 = new Epargne("Donald Trump",2000);
    $compte2->set_interet(0.1);
    $compte2->afficher();
    $compte2->calc_interet();
    $compte2->afficher();
    $compte1 = NULL;
    $compte2 = NULL;
    ?>
</body>
</html>