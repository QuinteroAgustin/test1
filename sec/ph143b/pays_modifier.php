<?php

/**
 * ph143b - Europa
 * Modification d'un pays
 */
// Initialisations
include 'init.php';

// Connexion à la base
$dbh = db_connect();
if(isset($_POST['submit'])){
  $id = $_GET['id'];
  $nom_fr=isset($_POST['nom_fr']) ? $_POST['nom_fr'] : NULL ;
  $date_adhesion=isset($_POST['date']) ? $_POST['date'] : NULL ;
  $code=isset($_POST['code']) ? $_POST['code'] : NULL ;
  $nom_local=isset($_POST['nom_local']) ? $_POST['nom_local'] : NULL ;
  $capitale=isset($_POST['capitale']) ? $_POST['capitale'] : NULL ;
  $langues=isset($_POST['langues']) ? $_POST['langues'] : NULL ;
  $monnaie=isset($_POST['monnaie']) ? $_POST['monnaie'] : NULL ;
  $sql = "UPDATE pays SET nom_fr=:nom_fr, date_adhesion=:date_adhesion, code=:code, nom_local=:nom_local, capitale=:capitale, langues=:langues, monnaie=:monnaie WHERE id_pays = :id";
  $request = $dbh->prepare($sql);
  $request->execute(array(
    ':id' => $id,
    ':nom_fr' => $nom_fr,
    ':date_adhesion' => $date_adhesion,
    ':code' => $code,
    ':nom_local' => $nom_local,
    ':capitale' => $capitale,
    ':langues' => $langues,
    ':monnaie' => $monnaie,
  ));
  echo 'Pays bien édité !<br>';
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
  <h2>Modification d'un pays</h2>
  <?php include "menu.php"; ?>
  <form action="" method="POST">

  <p>Veuillez réaliser la modification de <?= $response['nom_fr'] ?> SVP</p>
    <input type="text" value="<?= $response['id_pays'] ?>"disabled hidden>
    <label for="nom_fr">Nom fr</label><br>
    <input type="text" name="nom_fr" id="nom_fr" value="<?= $response['nom_fr'] ?>" ><br>

    <label for="date">Date</label><br>
    <input type="date" name="date" id="date" value="<?= $response['date_adhesion'] ?>" ><br>

    <label for="code">Code ISO</label><br>
    <input type="text" name="code" id="code" value="<?= $response['code'] ?>" ><br>

    <label for="nom_local">Nom local</label><br>
    <input type="text" name="nom_local" id="nom_local" value="<?= $response['nom_local'] ?>" ><br>

    <label for="capitale">Capitale</label><br>
    <input type="text" name="capitale" id="capitale" value="<?= $response['capitale'] ?>" ><br>

    <label for="langues">Langues</label><br>
    <input type="text" name="langues" id="langues" value="<?= $response['langues'] ?>" ><br>

    <label for="monnaie">Monnaie</label><br>
    <input type="text" name="monnaie" id="monnaie" value="<?= $response['monnaie'] ?>" ><br><br>

    <input type="submit" name="submit" id="submit" value="Moddifier">
    <input type="reset" >

  </form>

</body>

</html>