<?php
/**
 * po26a : liste des départements
 */
require_once "init.php";
// Crée le tableau d'objets métier "Departement"
$departements=array();
$dao = new DepartementDAO(); 
$departements = $dao->findAll(); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po26a</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
  <h1>po26a</h1>
  <h2>Liste des départements</h2>
  <?php include "menu.php"; ?>
  <table>
  <tr><th>ID</th><th>Libellé</th><th>Région</th></tr>
  <?php  
  foreach ($departements as $departement) {
    echo "<tr>";
    echo "<td>".$departement->get_id()."</td>";
    echo "<td>".$departement->get_libelle()."</td>";
    echo "<td>".$departement->get_id_region()."</td>";
    echo "</tr>";
  }
  ?>
  <table>
  <p>Il y a <?php echo count($departements); ?> département(s)</p>
</body>
</html>