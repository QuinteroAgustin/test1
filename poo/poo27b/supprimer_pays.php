<?php
/**
 * po27a : liste des pays
 */
require_once "init.php";

$submit=isset($_POST['submit']) ? $_POST['submit'] : NULL;
$id=isset($_GET['id']) ? $_GET['id'] : NULL;

$paysDAO = new PaysDAO();
$paysDAO = $paysDAO->find($id);


if(isset($submit)){
  $paysDAO = new PaysDAO();
  $paysDAO = $paysDAO->delete($id);
  echo "Nombre de pays supprimé : ".$paysDAO ."</br>";
  echo "<a href=\"liste_pays.php\">Liste des pays</a>";
  die();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>po27b</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
  <h1>po27b</h1>
  <h2>Modifier un pays</h2>
  <?php include "menu.php"; ?>
  <form action="" method="POST">

    <label for="code">Code</label><br>
    <input type="number" name="code" id="code" value="<?= $paysDAO->get_code() ?>" disabled><br><br>

    <label for="alpha2">Alpha2</label><br>
    <input type="text" name="alpha2" id="alpha2" value="<?= $paysDAO->get_alpha2() ?>" disabled><br><br>

    <label for="alpha3">Alpha3</label><br>
    <input type="text" name="alpha3" id="alpha3" value="<?= $paysDAO->get_alpha3() ?>" disabled><br><br>

    <label for="nom_en">Nom (EN)</label><br>
    <input type="text" name="nom_en" id="nom_en" value="<?= $paysDAO->get_nom_en() ?>" disabled><br><br>
    
    <label for="nom_fr">Nom (FR)</label><br>
    <input type="text" name="nom_fr" id="nom_fr" value="<?= $paysDAO->get_nom_fr() ?>" disabled><br><br>

    <input type="submit" value="OK" name="submit">
  </form>
</body>
</html>