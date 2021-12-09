<?php
/**
 * po38c : liste des fortunes
 */
require_once "init.php";



?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po43</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body>
  <h1>po43</h1>
  <h2>Liste des Cocktails</h2>
  <?php include "menu.php"; ?>
  <table>
    <tr>
      <th>ID</th>
      <th>Rang</th>
      <th>Nom</th>
      <th>Siège social</th>
      <th>Pays</th>
      <th>Chiffre d'affaires (millions $)</th>
      <th>Bénéfice (millions $)</th>
      <th>Employés</th>
      <th>Branche</th>
      <th>Directeur général (CEO)</th>
      <th>Évolution 2017</th>
      <th>Actions</th>
    </tr>
    <?php
  foreach ($fortunes as $fortune) {
      echo "<tr>";
      echo "<td>".$fortune->get_id_fortune()."</td>";
      echo "<td>".$fortune->get_rang()."</td>";
      echo "<td>".$fortune->get_nom()."</td>";
      echo "<td>".$fortune->get_siege()."</td>";
      echo "<td>".$fortune->get_pays()."</td>";
      echo "<td>".$fortune->get_ca()."</td>";
      echo "<td>".$fortune->get_benefice()."</td>";
      echo "<td>".$fortune->get_nb_employes()."</td>";
      echo "<td>".$fortune->get_branche()."</td>";
      echo "<td>".$fortune->get_directeur()."</td>";
      echo "<td>".$fortune->get_evolution()."</td>";
      echo '<td><a href="fortune_modifier.php?id_fortune='.$fortune->get_id_fortune().'">Modifier</a>&nbsp;<a href="fortune_supprimer.php?id_fortune='.$fortune->get_id_fortune().'">Supprimer</a></td>';
      echo "</tr>";
  }
  ?>
    <table>
      <p>Il y a <?= count($fortunes); ?> fortunes(s)</p>
</body>
</html>