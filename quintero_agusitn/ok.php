<?php

/**
 * sec17 - Sécurisation
 * Confirmation
 */
// Initialisations
include "init.php";

$nom = isset($_GET['nom']) ? $_GET['nom'] : "???";
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : "???";

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>sec17 - Sécurisation</title>
</head>

<body>
  <div id="content">
    <h1>sec17 - Sécurisation</h1>
    <h2>Confirmation inscription</h2>
    <?php 
    include "menu.php";
    ?>
    <p><?= $prenom . " " . $nom ?>, vous êtes bien Inscrit !</p>
    <p>Revenir à l'<a href="inscription.php">inscription</a></p>
  </div>
</body>

</html>