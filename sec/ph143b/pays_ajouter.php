<?php

/**
 * ph143b - Europa
 * Ajout d'un pays
 */
// Initialisations
include 'init.php';

// Connexion à la base
$dbh = db_connect();
if(isset($_POST['submit'])){
  $nom_fr=isset($_POST['nom_fr']) ? $_POST['nom_fr'] : NULL ;
  $date=isset($_POST['date']) ? $_POST['date'] : NULL ;
  $code=isset($_POST['code']) ? $_POST['code'] : NULL ;
  $nom_local=isset($_POST['nom_local']) ? $_POST['nom_local'] : NULL ;
  $capitale=isset($_POST['capitale']) ? $_POST['capitale'] : NULL ;
  $langues=isset($_POST['langues']) ? $_POST['langues'] : NULL ;
  $monnaie=isset($_POST['monnaie']) ? $_POST['monnaie'] : NULL ;
  if($nom_fr != NULL && $date != NULL && $code != NULL && $nom_local != NULL && $capitale != NULL && $langues != NULL && $monnaie != NULL){
    $sql="INSERT INTO pays 
    (nom_fr, date_adhesion, code, nom_local, capitale, langues, monnaie) 
    VALUES 
    (:nom_fr, :date_adhesion, :code, :nom_local, :capitale, :langues, :monnaie)";
    $request = $dbh->prepare($sql);
    $request->execute(array(
      ":nom_fr" => $nom_fr,
      ":date_adhesion" => $date,
      ":code" => $code,
      ":nom_local" => $nom_local,
      ":capitale" => $capitale,
      ":langues" => $langues,
      ":monnaie" => $monnaie
    ));
    echo 'Pays ajouté !<br>';
    echo "<a href=\"index.php\">Accueil</a>";
    die();
  }else{
    echo 'Des champs sont vide !<br>';
    echo "<a href=\"index.php\">Accueil</a>";
    die();
  }
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
  <h2>Ajout d'un pays</h2>
  <?php include "menu.php"; ?>
  <form action="" method="POST">

    <p>Veuillez saisir un pays SVP</p>

    <label for="nom_fr">Nom fr</label><br>
    <input type="text" name="nom_fr" id="nom_fr"><br>

    <label for="date">Date</label><br>
    <input type="date" name="date" id="date"><br>

    <label for="code">Code ISO</label><br>
    <input type="text" name="code" id="code"><br>

    <label for="nom_local">Nom local</label><br>
    <input type="text" name="nom_local" id="nom_local"><br>

    <label for="capitale">Capitale</label><br>
    <input type="text" name="capitale" id="capitale"><br>

    <label for="langues">Langues</label><br>
    <input type="text" name="langues" id="langues"><br>

    <label for="monnaie">Monnaie</label><br>
    <input type="text" name="monnaie" id="monnaie"><br><br>

    <input type="submit" name="submit" id="submit">
    <input type="reset">

  </form>
</body>

</html>