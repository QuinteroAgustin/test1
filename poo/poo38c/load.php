<?php
/**
 * po38c : chargement dans MySQL du fichier CSV
 */
require_once "init.php";

// Import du fichier CSV
require_once "import.php";

// Import de la fonction de connexion à la BD
require_once "fonctions.inc.php";

// Fonction de conversion des montants numériques
function conv2num($chaine){
  $chaine = str_replace(",",".",$chaine);
  return $chaine;
}

// Génération du script SQL d'insertion
$sql = "";
$sql .= "USE `fortune20`;".PHP_EOL;
$sql .= "INSERT INTO `fortune`(`rang`, `nom`, `siege`, `pays`, `ca`, `benefice`, `nb_employes`, `branche`, `directeur`, `evolution`) VALUES ".PHP_EOL;
foreach ($rows as $row) {
  $sql .= "(";
  $sql .= "'".$row[0]."', ";  //rang
  $sql .= "'".$row[1]."', ";  // nom
  $sql .= "'".$row[2]."', ";  // siege
  $sql .= "'".$row[3]."', ";  // pays
  $sql .= "'".conv2num($row[4])."', ";;  // ca
  $sql .= "'".conv2num($row[5])."', ";;  // benefice
  $sql .= "'".conv2num($row[6])."', ";;  // nb_employes
  $sql .= "'".$row[7]."', ";   // branche
  $sql .= "'".$row[8]."', ";   // directeur
  $sql .= "'".$row[9]."'";  // evolution
  $sql .= "),".PHP_EOL;
}

// Enlève la dernière virgule qui est en trop
//$sql .="<<<";
$sql=rtrim($sql,PHP_EOL);
$sql=rtrim($sql,',');

// Connexion à la base de données
$dbh = connexion(); 


// Chargement des données
try {
  $sth = $dbh->prepare($sql);
  $sth->execute();
} catch (PDOException $ex) {
  die("Erreur lors de la requête SQL : ".$ex->getMessage());
}

// Comptage des données chargées
$sql = "select count(*) as nb from fortune";
try {
  $sth = $dbh->prepare($sql);
  $sth->execute();
  $row = $sth->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $ex) {
  die("Erreur lors de la requête SQL : ".$ex->getMessage());
}
$nb = $row['nb'];

/* //Test
echo "<pre>";
echo $sql;
echo "</pre>";
*/
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po38c</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
  <h1>po38c</h1>
  <h2>Chargement dans la base)</h2>
  <?php include "menu.php"; ?>
        <p>Chargement terminé ! </p>
        <p>Il y a <?php echo $nb ?> enregistrement(s) dans la base</p>
</body>
</html>