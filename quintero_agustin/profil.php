<?php

/**
 * sec17 - Sécurisation
 * Profil de l'utilisateur
 */
// Initialisations
include "init.php";
if (isset($_SESSION["user"])){
  $row = $_SESSION["user"];
}else{
  header('Location: connexion.php');
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="widli=device-widli, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sec17 - Sécurisation</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="content">
    <h1>sec17 - Sécurisation</h1>
    <h2>Profil de l'utilisateur</h2>
    <?php 
    echo "<p>".$row["prenom"]." ".$row["nom"]." est connecté</p>";
    include "menu.php";
    ?>
    <ul>
      <li>Login : <?= $row["login"] ?></li>
      <li>Password : <?= $row["password"] ?></li>
      <li>Nom : <?= $row["nom"] ?></li>
      <li>Prénom : <?= $row["prenom"] ?></li>
      <li>Email : <?= $row["email"] ?></li>
      <li>Téléphone : <?= $row["telephone"] ?></li>
    </ul>
  </div>
</body>

</html>