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
    <title>po04.php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    $compte1 = new Compte("Bill Gates",500);
    $compte1->afficher();
    $compte1->crediter(100);
    $compte1->crediter(200);
    $compte1->debiter(10000);
    $compte1->afficher();
    $compte2 = new Compte("Donald Trump",100);
    $compte2->set_devise("F");
    $compte2->set_devise("$");
    $compte2->afficher();
    $compte2->crediter(500);
    $compte2->crediter(-200);
    $compte2->debiter(50);
    $compte2->afficher();
    $compte1 = NULL;
    $compte2 = NULL;
    ?>
</body>
</html>