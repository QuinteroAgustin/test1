<?php

/**
 * sec17 - Sécurisation
 * Inscription
 */
// Initialisations
include "init.php";

// Connexion à la base
$dbh = db_connect();

$messages = array();  // Message d'erreur

// Récupère le contenu du formulaire
$login = isset($_POST['login']) ? $_POST['login'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$nom = isset($_POST['nom']) ? $_POST['nom'] : null;
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : null;
$submit = isset($_POST['submit']);

// Inscription
if ($submit) {
  $sql = "INSERT INTO user(login,password,nom, prenom, email, telephone) VALUES ('$login','$password','$nom','$prenom','$email','$telephone')";
  try {
    $nb = $dbh->exec($sql);
  } catch (PDOException $e) {
    die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
  }
  $messages[] = "$nb inscription(s)";
  } else {
  $messages[] = "Veuillez vous inscrire";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sec17 - Sécurisation</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="content">
    <h1>sec17 - Sécurisation</h1>
    <h2>Inscription</h2>
    <?php 
    if (isset($_SESSION["user"])){
      $user = $_SESSION["user"];
      echo "<p>".$user["prenom"]." ".$user["nom"]." est connecté</p>";
    }
    include "menu.php";
    ?>
    <?php
    if (count($messages) > 0) {
      echo "<ul>";
      foreach ($messages as $message) {
        echo "<li>" . $message . "</li>";
      }
      echo "</ul>";
    }
    ?>
    </p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <p>Login<br /><input type="text" name="login" id="login" value="<?= $login ?>"></p>
      <p>Password<br /><input type="text" name="password" id="password" value="<?= $password ?>"></p>
      <p>Nom<br /><input type="text" name="nom" id="nom" value="<?= $nom ?>"></p>
      <p>Prénom<br /><input type="prenom" name="prenom" id="prenom" value="<?= $prenom ?>"></p>
      <p>Email<br /><input type="text" name="email" id="email" value="<?= $email ?>"></p>
      <p>Téléphone<br /><input type="text" name="telephone" id="telephone" value="<?= $telephone ?>"></p>
      <p><input type="submit" name="submit" value="OK" /></p>
    </form>
  </div>
</body>

</html>