<?php
    include('voiture.php');
    $v1= new Voiture();
    $v1->nom = "Voiture 1";
    echo $v1->nom."<br>";
    $v1->marque = "Lambo";
    $v1->model = "Urakan";
    $v1->compteur = 0;
    $v1->demarrer();
    $v1->allerA();
    $v1->arreter();

    $v2= new Voiture();
    $v2->nom = "Voiture 2";
    echo $v2->nom."<br>";
    $v2->marque = "Renauld";
    $v2->model = "Megan";
    $v2->compteur = 0;
    $v2->demarrer();
    $v2->allerA();
    $v2->arreter();

    $v3= new Voiture();
    $v3->nom = "Voiture 3";
    echo $v2->nom."<br>";
    $v3->marque = "CAT";
    $v3->model = "Pelleteuse";
    $v3->compteur = 0;
    $v3->demarrer();
    $v3->allerA();
    $v3->arreter();


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
    $v2->afficher();
    $v3->afficher();
    echo "<br>";
    echo $v1->nom." : ".$v1->compteur."<br>";
    echo $v2->nom." : ".$v2->compteur."<br>";
    echo $v3->nom." : ".$v3->compteur."<br>";
    if($v1->compteur > $v2->compteur && $v1->compteur > $v3->compteur){
        $win = $v1->nom;
    }elseif($v2->compteur > $v1->compteur && $v2->compteur > $v3->compteur){
        $win = $v2->nom;
    }else{
        $win = $v3->nom;
    }
    echo "Le winer est : ".$win;
    ?>
</body>
</html>