<?php

/**
 * sec19 - Changement périodique d'un MdP
 * Changement du mot de passe
 */
// Initialisations
include "init.php";

$message="";


?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sec19 - Changement périodique d'un MdP</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="content">
    <h1>sec19 - Changement périodique d'un MdP</h1>
    <h2>changemement de mot de passe</h2>
    <?php include "menu.php"; ?>
    <p><?= $message; ?></p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <p>Nouveau password<br /><input type="password" name="new_password" id="new_password"></p>
      <p><input type="submit" name="submit" value="OK" /></p>
    </form>
  </div>
</body>

</html>