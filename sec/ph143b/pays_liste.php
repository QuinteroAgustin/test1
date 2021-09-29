<?php
/**
 * ph143 - Europa
 * Liste des pays
 */
// Initialisations
include 'init.php';

// Connexion à la base
$dbh=db_connect();
// Time to work !
$sql = "SELECT * FROM pays";
$request = $dbh->prepare($sql);
$request->execute();
$response = $request->fetchAll();
// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ph143 - Europa</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>ph143 - Europa</h1>
  <?php include "menu.php"; ?>
  <h2>Liste des pays de l'Union Européenne</h2>

  <table>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Date d'adhésion</th>
      <th>Code</th>
      <th>Nom local</th>
      <th>Capitale</th>
      <th>Langue(s) officielle(s)</th>
      <th>Monnaie</th>
      <th></th>
    </tr>
    <?php
      foreach($response as $value){
        echo "<tr>";
        echo "<td>".$value['id_pays']."</td>";
        echo "<td>".$value['nom_fr']."</td>";
        echo "<td>".$value['date_adhesion']."</td>";
        echo "<td>".$value['code']."</td>";
        echo "<td>".$value['nom_local']."</td>";
        echo "<td>".$value['capitale']."</td>";
        echo "<td>".$value['langues']."</td>";
        echo "<td>".$value['monnaie']."</td>";
        echo "<td><a href='pays_modifier.php?id=".$value['id_pays']."'>Modifier</a> <a href='pays_supprimer.php?id=".$value['id_pays']."'>Supprimer</a></td>";
        echo "</tr>";
      }
    ?>
  </table>
  <p><?= count($response) ?> pays</p>
  <p><a href="pays_ajouter.php">Ajouter</a> un pays</p>
</body>

</html>