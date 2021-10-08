<?php
/*
/ Controle n°4
/ @auteur Gus 
*/
//On include la classe calculatrice
    include('classes/Calculatrice.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poo19b</title>
</head>
<body>
    <h1>Po 19b - Calculatrice</h1>
    <?php
    try{
        $calc= new Calculatrice();
        $nb1=2;
        $nb2=3;
        $resultat = $calc->addition($nb1,$nb2);
        echo "<p>$nb1+$nb2=".$resultat."</p>";
        $resultat = $calc->soustraction($nb1,$nb2);
        echo "<p>$nb1-$nb2=".$resultat."</p>";
        $resultat = $calc->division($nb1,$nb2);
        echo "<p>$nb1/$nb2=".$resultat."</p>";
        $resultat = $calc->multiplication($nb1,$nb2);
        echo "<p>$nb1*$nb2=".$resultat."</p>";
        $resultat = $calc->division($nb1,0);
        echo "<p>$nb1/0=".$resultat."</p>";

    }catch (Exception $ex){
        echo "<p> Erreur : " . $ex->getMessage() . "</p>";
    }
    
    ?>
    <a href="../index.php">Accueil</a>
</body>
</html>