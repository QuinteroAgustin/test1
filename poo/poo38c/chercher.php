<?php
/**
 * po38c : liste des fortunes
 */
require_once "init.php";

$dao = New FortuneDAO();
$submit=isset($_POST['submit']);
$critere=isset($_POST['critere'])?$_POST['critere']:null;
if($submit && $critere!= null){
  $fortunes = $dao->chercher($critere);
}else{
  $fortunes = $dao->findAll();
}

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
  <h2>Liste des fortunes</h2>
  <?php include "menu.php"; ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="critere">Critère</label><br>
    <input type="text" name="critere" id="critere"><br><br>
    <input type="submit" value="Rechercher" name="submit">&nbsp;
    <input type="reset" value="Rénitialiser">
  </form>
  <table>
    <caption><?= count($fortunes); ?> plus grandes entreprises mondiales classées par chiffre d'affaires en 2018</caption>
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
      echo "</tr>";
  }
  ?>
    <table>
      <p>Il y a <?= count($fortunes); ?> fortunes(s)</p>
</body>
</html>