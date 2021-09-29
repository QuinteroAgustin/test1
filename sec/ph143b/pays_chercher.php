<?php

/**
 * ph143b - Europa
 * Ajout d'un pays
 */
// Initialisations
include 'init.php';

// Connexion à la base
$dbh = db_connect();

$donne = isset($_POST['critere']) ? $_POST['critere'] : NULL;

// Affichage
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ph143b - Europa</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>ph143b - Europa</h1>
  <h2>Moteur de recherche sur les pays</h2>
  <?php include "menu.php"; ?>
  <form action="" method="POST">

    <p>Veuillez saisir un pays SVP</p>
    <form action="" method="POST">
        <label for="critere">Citère</label><br>
        <input type="text" name="critere" id="critere" value="<?php if($donne != NULL){echo $donne; } ?>"><br><br>

        <input type="submit" name="submit" id="submit" value="Rechercher">
        <input type="reset">
    </form>

    <?php
    
    if(isset($_POST['submit'])){
        $critere = $_POST['critere'] ? $_POST['critere'] : NULL;
        $sql="SELECT * FROM pays WHERE nom_fr LIKE '%".$critere."%' OR nom_local LIKE '%".$critere."%' OR capitale LIKE '%".$critere."%' OR langues LIKE '%".$critere."%' OR monnaie LIKE '%".$critere."%'";
        $request = $dbh->prepare($sql);
        $request->execute();
        $response = $request->fetchAll();
        echo '<br><table>';
            echo '<tr>';
                echo '<th>ID</th>';
                echo '<th>Nom</th>';
                echo '<th>Date d\'adhésion</th>';
                echo '<th>Code</th>';
                echo '<th>Nom local</th>';
                echo '<th>Capitale</th>';
                echo '<th>Langue(s) officielle(s)</th>';
                echo '<th>Monnaie</th>';
            echo '</tr>';
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
                echo '</tr>';            
            }
        echo '</table>';
        echo "<p>".count($response)." pays</p>";
    }
    ?>

  </form>
</body>

</html>