<?php
/**
 * Liste des services
 */
require_once "init.php";
// Crée le tableau d'objets métier "service"
$services=array();
$dao = new ServiceDAO(); 
$services = $dao->findAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>pdf</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
  <h1>pdf</h1>
  <h2>Liste des services</h2>
  <?php include "menu.php"; ?>
  <table>
  <tr><th>ID</th><th>Libellé</th></tr>
  <?php  
  foreach ($services as $service) {
    echo "<tr>";
    echo "<td>".$service->get_id()."</td>";
    echo "<td>".$service->get_libelle()."</td>";
    echo "</tr>";
  }
  ?>
  <table>
  <p>Il y a <?php echo count($services); ?> service(s)</p>
  <p>Liste au format <a href="liste_services_pdf.php">pdf</p>
</body>
</html>