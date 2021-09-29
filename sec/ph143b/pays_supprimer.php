<?php

/**
 * ph143b - Europa
 * Suppression d'un pays
 */
include 'init.php';

// Connexion à la base
$dbh = db_connect();
if(isset($_POST['submit'])){
  $id = $_GET['id'];
  $sql = "DELETE FROM pays WHERE id_pays = :id";
  $request = $dbh->prepare($sql);
  $request->execute(array(
    ':id' => $id
  ));
  echo 'Pays bien supprimé !<br>';
  echo "<a href=\"index.php\">Accueil</a>";
  die();
}
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM pays WHERE id_pays = :id";
  $request = $dbh->prepare($sql);
  $request->execute(array(
    ':id' => $id
  ));
  $response = $request->fetch(PDO::FETCH_ASSOC);
}else{
  echo 'ID du pays manquant !<br>';
  echo "<a href=\"index.php\">Accueil</a>";
  die();
}

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
  <form action="" method="POST">

    <p>Veuillez valider la suppression de <?= $response['nom_fr'] ?> SVP</p>
    <input type="text" value="<?= $response['id_pays'] ?>" disabled hidden>
    <label for="nom_fr">Nom fr</label><br>
    <input type="text" name="nom_fr" id="nom_fr" value="<?= $response['nom_fr'] ?>" disabled><br>

    <label for="date">Date</label><br>
    <input type="date" name="date" id="date" value="<?= $response['date_adhesion'] ?>" disabled><br>

    <label for="code">Code ISO</label><br>
    <input type="text" name="code" id="code" value="<?= $response['code'] ?>" disabled><br>

    <label for="nom_local">Nom local</label><br>
    <input type="text" name="nom_local" id="nom_local" value="<?= $response['nom_local'] ?>" disabled><br>

    <label for="capitale">Capitale</label><br>
    <input type="text" name="capitale" id="capitale" value="<?= $response['capitale'] ?>" disabled><br>

    <label for="langues">Langues</label><br>
    <input type="text" name="langues" id="langues" value="<?= $response['langues'] ?>" disabled><br>

    <label for="monnaie">Monnaie</label><br>
    <input type="text" name="monnaie" id="monnaie" value="<?= $response['monnaie'] ?>" disabled><br><br>

    <input type="submit" name="submit" id="submit" value="Supprimer">
    <input type="reset" disabled>

  </form>

</body>

</html>