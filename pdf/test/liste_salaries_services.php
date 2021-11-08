<?php
/**
 * Liste des salariés par service
 */
require_once "init.php";
// Crée le tableau d'objets métier "salarié"
$salaries=array();
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
  <h2>Liste des salariés par service</h2>
  <?php include "menu.php"; ?>
  <?php
  foreach ($services as $service) {
      echo '<h3> Service : ' . $service->get_libelle() . '</h3>';
      echo '<ul>';
      foreach ($service->get_salaries() as $salarie) {
          echo '<li>' . $salarie->lib_salarie() . '</li>';
      }
      echo '</ul>';
      echo"<p>Il y a ".count($service->get_salaries())." salarié(s) dans le service ".$service->get_libelle()."</p>";
  }
  ?>
  <br>
  <p>Il y a <?php echo count($services); ?> service(s)</p>
  <p>Liste au format <a href="liste_salaries_services_pdf.php">pdf</p>
</body>

</html>