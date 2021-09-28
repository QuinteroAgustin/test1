<?php
/**
 * ph143 - Europa
 * Chargement du fichier CSV dans la base MySQL
 */
// Initialisations
include 'init.php';

// Connexion à la base
$dbh = db_connect();

// Time to work !
  $rows = load_from_csv(ROOT.DS.'files'.DS.'pays.csv', 2);
  $sql = file_get_contents(ROOT.DS."sql".DS."europa.sql").PHP_EOL;
  //generation du SQL
  $sql .= "USE europa;".PHP_EOL;
  $sql .= "INSERT INTO pays (nom_fr, date_adhesion, code, nom_local, capitale, langues, monnaie) VALUES".PHP_EOL;
  foreach($rows as $row){
    $sql .= "(";
    $sql .= $dbh->quote($row[0], PDO::PARAM_STR).", ";
    $sql .= $dbh->quote(convertir_date($row[1]), PDO::PARAM_STR).", ";
    $sql .= $dbh->quote($row[2], PDO::PARAM_STR).", ";
    $sql .= $dbh->quote($row[3], PDO::PARAM_STR).", ";
    $sql .= $dbh->quote($row[4], PDO::PARAM_STR).", ";
    $sql .= $dbh->quote($row[5], PDO::PARAM_STR).", ";
    $sql .= $dbh->quote($row[6], PDO::PARAM_STR);
    $sql .= "),".PHP_EOL;
  }
  $sql = rtrim($sql, PHP_EOL);
  $sql = rtrim($sql, ',');

  try{
    $sth=$dbh->prepare($sql);
    $sth->execute();
  }catch(PDOException $ex){
    die("Erreur lors de la requête SQL : ".$ex->getMessage());
  }

// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ph143 - Europa</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>ph143 - Europa</h1>
  <h2>Chargement des pays</h2>
  <?php
  include "menu.php";
  ?>
</body>
</html>