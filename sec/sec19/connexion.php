<?php

/**
 * sec19 - Changement périodique d'un MdP
 * Connexion
 */
// Initialisations
include "init.php";

$message = '';


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
    <h2>Connexion</h2>
    <?php include "menu.php"; ?>
    <p><?= $message ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <p>Login<br /><input type="text" name="login" id="login" value="<?= $login ?>"></p>
      <p>Password<br /><input type="password" name="password" id="password"></p>
      <p><input type="submit" name="submit" value="OK" /></p>
    </form>
  </div>
</body>

</html>