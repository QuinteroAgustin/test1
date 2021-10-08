<?php
/**
 * po27a : liste des pays
 */
require_once "init.php";
// Crée le tableau d'objets métier "Pays"
$dao = new PaysDAO(); 
$les_pays = $dao->findAll(); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po27a</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
  <h1>po27a</h1>
  <h2>Liste des pays</h2>
  <?php include "menu.php"; ?>
  <table>
  <tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Code</th>
    <th>Alpha2</th>
    <th>Alpha3</th>
    <th>Nom (EN)</th>
  </tr>
  <?php  
  foreach ($les_pays as $pays) {
    echo "<tr>";
    echo "<td>".$pays->get_id_pays()."</td>";
    echo "<td>".$pays->get_nom_fr()."</td>";
    echo "<td>".$pays->get_code()."</td>";
    echo "<td>".$pays->get_alpha2()."</td>";
    echo "<td>".$pays->get_alpha3()."</td>";
    echo "<td>".$pays->get_nom_en()."</td>";
    echo "</tr>";
  }
  ?>
  <table>
  <p>Il y a <?php echo count($les_pays); ?> pays(s)</p>
</body>
</html>