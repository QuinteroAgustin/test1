<?php
/**
 * po43 : liste des fortunes
 */
require_once "init.php";

// Requête vers l'API
$json = file_get_contents("https://www.thecocktaildb.com/api/json/v1/1/list.php?i=list");
$ingredients = json_decode($json,true);

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
  <h2>Liste des Ingredients</h2>
  <?php include "menu.php"; ?>
  <table>
    <tr>
      <th>Rang</th>
      <th>Nom</th>
      <th>Détails</th>
    </tr>
    <?php
  foreach ($ingredients["drinks"] as $key => $ingredient) {
      echo "<tr>";
      echo "<td>".$key."</td>";
      echo "<td>".$ingredient['strIngredient1']."</td>";
      echo "<td><a href=\"ingredient_details.php?name=".$ingredient['strIngredient1']."\">".$ingredient['strIngredient1']."</a></td>";
      echo "</tr>";
  }
  ?>
    <table>
      <p>Il y a <?= count($ingredients["drinks"]); ?> fortunes(s)</p>
</body>
</html>