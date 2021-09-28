<?php

/**
 * ph143b - Europa
 * Suppression d'un pays
 */
include 'init.php';

// Connexion à la base
$dbh = db_connect();

// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ph143b - Europa</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>ph143b - Europa</h1>
  <h2>Suppression d'un pays</h2>
  <?php include "menu.php"; ?>
  <p><?php echo $message; ?>
  </p>

<?php // time to work !?>

</body>

</html>