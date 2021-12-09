<?php
/**
 * po38c : liste des fortunes
 */
require_once "init.php";

// Requête vers l'API
$json = file_get_contents("https://www.thecocktaildb.com/api/json/v1/1/search.php?i=".$_GET['name']);
$ingredient = json_decode($json,true);
$i=$ingredient["ingredients"];

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
  <h2>Détails de <?= $i[0]["strIngredient"] ?></h2>
  <?php include "menu.php"; ?>
  <img src="https://www.thecocktaildb.com/images/ingredients/<?= $i[0]["strIngredient"] ?>-Medium.png" alt="aga">
  <ul>
      <li>ID : <?= $i[0]["idIngredient"] ?></li>
      <li>Nom : <?= $i[0]["strIngredient"] ?></li>
      <li>Description : <?= $i[0]["strDescription"] ?></li>
      <li>Type : <?= $i[0]["strType"] ?></li>
      <li>Alcoolisé : <?= $i[0]["strAlcohol"] ?></li>
      <li>Taux : <?= $i[0]["strABV"] ?></li>
  </ul>
  <p>Revenir à la <a href="liste_ingredients.php">Liste</a> des ingrédients</p>
</body>
</html>