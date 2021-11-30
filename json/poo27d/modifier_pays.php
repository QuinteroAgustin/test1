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
  $code=isset($_POST['code']) ? $_POST['code'] : NULL;
  $alpha2=isset($_POST['alpha2']) ? $_POST['alpha2'] : NULL;
  $alpha3=isset($_POST['alpha3']) ? $_POST['alpha3'] : NULL;
  $nom_en=isset($_POST['nom_en']) ? $_POST['nom_en'] : NULL;
  $nom_fr=isset($_POST['nom_fr']) ? $_POST['nom_fr'] : NULL;
  
  $values=array(
    'id_pays' => $id,
    'code' => $code,
    'alpha2' => $alpha2,
    'alpha3' => $alpha3,
    'nom_en' => $nom_en,
    'nom_fr' => $nom_fr
  );
  $pays = new Pays($values);
  $paysDAO = new PaysDAO();
  $paysDAO = $paysDAO->update($pays);
  echo "Nombre de pays modifié : ".$paysDAO ."</br>";
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
  <title>po27d</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
  <h1>po27d</h1>
  <h2>Modifier un pays</h2>
  <?php include "menu.php"; ?>
  <form action="" method="POST">

    <label for="code">Code</label><br>
    <input type="number" name="code" id="code" value="<?= $paysDAO->get_code() ?>"><br><br>

    <label for="alpha2">Alpha2</label><br>
    <input type="text" name="alpha2" id="alpha2" value="<?= $paysDAO->get_alpha2() ?>"><br><br>

    <label for="alpha3">Alpha3</label><br>
    <input type="text" name="alpha3" id="alpha3" value="<?= $paysDAO->get_alpha3() ?>"><br><br>

    <label for="nom_en">Nom (EN)</label><br>
    <input type="text" name="nom_en" id="nom_en" value="<?= $paysDAO->get_nom_en() ?>"><br><br>
    
    <label for="nom_fr">Nom (FR)</label><br>
    <input type="text" name="nom_fr" id="nom_fr" value="<?= $paysDAO->get_nom_fr() ?>"><br><br>

    <input type="submit" value="OK" name="submit">
  </form>
</body>
</html>