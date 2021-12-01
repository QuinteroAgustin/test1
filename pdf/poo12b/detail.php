<?php
    include('init.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>po12b details - DAO</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>po12 - Turtle ninja</h1>
    <?php
    $tortue = New TortueDAO;
    $tortue = $tortue->find($_GET['id']);
    echo "<h3>Détails de ".$tortue->get_nom()."</h3>";
    echo $tortue->afficher();
    echo "<img src=\"img/".$tortue->get_nom().".jpg\" alt=\"Image de ".$tortue->get_nom()."\">";
    ?>$
    
    <p>Revenir à <a href="index.php">page d'accueil</a></p>
</body>
</html>