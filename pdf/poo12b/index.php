<?php
    include('init.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poo12c - DAO</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>po 12 - Turtle chinois</h1>
    <img src="img/tortues_ninja.jpg" alt="oklm">
    <h3>Liste des tortues</h3>
    <?php
    $tortues = New TortueDAO;
    $tortues = $tortues->findAll();
    echo "<table><tr><th>ID</th><th>Nom</th><th>Surnom</th><th>Couleur</th><th></th></tr>";
    foreach ($tortues as $tortue){
        echo "<tr>";
        echo "<td>".$tortue->get_id_tortue()."</td>";
        echo "<td>".$tortue->get_nom()."</td>";
        echo "<td>".$tortue->get_surnom()."</td>";
        echo "<td>".$tortue->get_couleur()."</td>";
        echo "<td><a href=\"detail.php?id=".$tortue->get_id_tortue()."\">détails</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<p>".count($tortues)." Tortues(s)</p>";
    ?>
</body>
</html>