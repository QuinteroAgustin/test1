<?php
/**
 * po43 : details des ingrédients
 */
require_once "init.php";

// Requête vers l'API
$json = file_get_contents("https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=".$_GET['id']);
$cocktail = json_decode($json,true);
$c=$cocktail["drinks"];
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
  <h2>Détails de <?= $c[0]["strDrink"] ?></h2>
  <?php include "menu.php"; ?>
  <img src="<?= $c[0]["strDrinkThumb"]."/preview" ?>" alt="aga">
  <ul>
      <li>ID : <?= $c[0]["idDrink"] ?></li>
      <li>Nom : <?= $c[0]["strDrink"] ?></li>
      <li>Ingredients : 
        <?php 
        $ing = '';
          for($i=1; $i<16; $i++){
            if($c[0]['strIngredient'.$i] != NULL){
              $ing .= $c[0]['strIngredient'.$i].',';
            }
          }
        echo rtrim($ing, ',');
        ?>
      </li>
      <li>Instructions : <?= $c[0]["strInstructions"] ?></li>
  </ul>
  <p>Revenir à la <a href="liste_cocktails.php?lettre=a">Liste</a> des cocktails</p>
</body>
</html>