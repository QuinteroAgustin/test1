<?php
    function autoload($class){
        include 'class/'.$class.'.php';
    }
    spl_autoload_register('autoload');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poo02</title>
</head>
<body>
    <h1>Poo 02 - animal</h1>
    <?php
    // Chien
    $chien = new Chien("Milou", "blanc");
    $chien->marcher();
    $chien->voler();
    $chien->grimper();
    $chien->parler();
    // Chat
    $chat = new Chat("Grumpy Cat", "noir et blanc");
    $chat->marcher();
    $chat->voler();
    $chat->grimper();
    $chat->parler();
    // Oiseau
    $oiseau = new Oiseau("Twitter", "bleu");
    $oiseau->marcher();
    $oiseau->voler();
    $oiseau->grimper();
    $oiseau->parler();
    // Poisson
    $poisson = new Poisson("Nemo", "orange");
    $poisson->marcher();
    $poisson->voler();
    $poisson->grimper();
    $poisson->parler();
    //Shark
    $shark = new Shark("Blue", "blanc");
    $shark->afficher();
    ?>
</body>
</html>