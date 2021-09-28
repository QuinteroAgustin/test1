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
$rows = load_from_csv(ROOT.DS.'files'.DS.'pays.csv');
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
  <h2>Liste des pays de l'Union Européenne</h2>
 
  <table>
    <tr>
      <?php
        echo '<th>ID</th>';
        foreach($rows[0] as $row){
          echo '<th>'.$row.'</th>';
        }
      ?>  
    </tr>
    <?php
      foreach($rows as $key => $row){
        if($key != 0){
          echo "<tr>";
          echo "<td>".$key."</td>";
        foreach($row as $col){
          echo "<td>".$col."</td>";
        }
        echo "</tr>";
        }
      }
    ?>
  </table>

</body>

</html>