<?php

/**
 * sec18 - RésaVite
 * Connexion de l'utilisateur
 */
// Initialisations
include "init.php";

// Connexion à la base
$dbh = db_connect();

$messages = array();  // Message d'erreur

// Récupère le contenu du formulaire
$login = isset($_POST['login']) ? $_POST['login'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$submit = isset($_POST['submit']);

// Vérifie la connexion
if ($submit) {
  if(empty(trim($login))){
    $messages[] = "Le LOGIN est obligatoire.";
  }
  if(empty(trim($password))){
    $messages[] = "Le PASSWORD est obligatoire.";
  }

  //si il n'y a zero messages d'erreur
  if(empty($messages)){
    try {
      $sql = "select * from user where login=:login";
      $request=$dbh->prepare($sql);
      $request->execute(array(
        ":login" => $login
      ));
      $row=$request->fetch();
    } catch (PDOException $e) {
      die("<p>Erreur lors de la requête SQL : " . $e->getMessage() . "</p>");
    }
    if ($row===false){
      $messages[] = "login et/ou password invalide(s), veuillez réessayer !";
    } else {
      if (password_verify($password, $row['password']) == TRUE){
        // Connexion réussie, enregistrement en session
        $_SESSION["user"] = $row;
        header("Location: reservations.php");
      }else{
        $messages[] = "login et/ou password invalide(s), veuillez réessayer !";
      }
    }
  } else {
    $messages[] = "Veuillez vous connecter";
  }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sec18 - RésaVite</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="content">
    <h1>sec18 - RésaVite</h1>
    <h2>Connexion</h2>
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
      <p>Password<br /><input type="password" name="password" id="password" value="<?= $password ?>"></p>
      <p><input type="submit" name="submit" value="OK" /></p>
    </form>
  </div>
</body>

</html>