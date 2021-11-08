<?php
/**
 * Liste des salariés
 */
require_once "init.php";
// Crée le tableau d'objets métier "salarié"
$salaries=array();
$dao = new SalarieDAO(); 
$salaries = $dao->findAll(); 
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
  <h2>Liste des salariés</h2>
  <?php include "menu.php"; ?>
  <p>[<a href="ajouter_salarie.php">Ajouter</a>] un salarié</p>
  <table>
  <tr><th>ID</th><th>Matricule</th><th>Nom</th><th>Prénom</th><th>Service</th><th>Actions</th></tr>
  <?php  
  foreach ($salaries as $salarie) {
    echo "<tr>";
    echo "<td>".$salarie->get_id()."</td>";
    echo "<td>".$salarie->get_matricule()."</td>";
    echo "<td>".$salarie->get_nom()."</td>";
    echo "<td>".$salarie->get_prenom()."</td>";
    echo "<td>".$salarie->get_id_service()."</td>";
    echo '<td>[<a href="modifier_salarie.php?id='.$salarie->get_id().'">Modifier</a>]';
    echo '&nbsp[<a href="supprimer_salarie.php?id='.$salarie->get_id().'">Supprimer</a>]</td>';
    echo "</tr>";
  }
  ?>
  <table>
  <p>Il y a <?php echo count($salaries); ?> salarié(s)</p>
  <p>Liste au format <a href="liste_salaries_pdf.php">pdf</p>
</body>
</html>