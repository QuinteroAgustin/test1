<?php
    include('init.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poo12c details - DAO</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>po12 - Turtle ninja</h1>
    <?php
    $tortue = New TortueDAO;
    $tortue = $tortue->find($_GET['id']);
    echo "<h3>Détails de ".$tortue->get_nom()."</h3>";
    echo '<p>Fichier format [<a href="createpdftortue.php?id='.$tortue->get_id_tortue().'">PDF</a>]</p>';
    echo '<p>Fichier format [<a href="createjsontortue.php?id='.$tortue->get_id_tortue().'">JSON</a>]</p>';
    echo $tortue->afficher();
    echo "<img src=\"img/".$tortue->get_nom().".jpg\" alt=\"Image de ".$tortue->get_nom()."\"><br>";
    
    // Lecture de la description associée à la tortue
    $nom_fichier = "infiles/".$tortue->get_nom().".txt";
    $texte = file_get_contents($nom_fichier);
    if ($texte===false){
        $texte = "Erreur : impossible de lire le fichier ".$nom_fichier." !";
    }
    $html = nl2br($texte); //Transforme les sauts en balise <br/>
    echo $html; // Affichage de la description
    ?>
    
    
    <p>Revenir à <a href="index.php">page d'accueil</a></p>
</body>
</html>