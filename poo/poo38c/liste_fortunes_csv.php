<?php
/**
 * po38c : liste des fortunes
 */
require_once "init.php";

// import du fichier CSV
require_once "import.php";

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
  <h2>Liste des fortunes (directement à partir du CSV)</h2>
  <?php include "menu.php"; ?>
  <table>
    <caption>20 plus grandes entreprises mondiales classées par chiffre d'affaires en 2018</caption>
    <tr>
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
    </tr>
    <?php
  foreach ($rows as $row) {
      echo "<tr>";
      echo "<td>".$row[0]."</td>";
      echo "<td>".$row[1]."</td>";
      echo "<td>".$row[2]."</td>";
      echo "<td>".$row[3]."</td>";
      echo "<td>".$row[4]."</td>";
      echo "<td>".$row[5]."</td>";
      echo "<td>".$row[6]."</td>";
      echo "<td>".$row[7]."</td>";
      echo "<td>".$row[8]."</td>";
      echo "<td>".$row[9]."</td>";
      echo "</tr>";
  }
  ?>
    <table>
      <p>Il y a <?php echo count($rows); ?> fortunes(s)</p>
</body>
</html>