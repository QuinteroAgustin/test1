<?php  include("sql.php"); 
$sql="SELECT ligne.libelle, station.nom FROM ligne, station WHERE station.id_ligne = ligne.id_ligne";
$request = db_connect()->prepare($sql);
$request->execute();
$response = $request->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 34</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>ph34 : metro31</h1>
    <h3>Liste des stations par ligne</h3>
    <table>
        <tr>
            <th>Ligne</th>
            <th>Station</th>
        </tr>
        <?php 
            foreach($response as $station){
                echo "<tr>";
                echo "<td>".$station['libelle']."</td>";
                echo "<td>".$station['nom']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <p><?= count($response); ?> station(s)</p>
    <p>Retour au <a href="exo.php">menu</a></p>
</body>
</html>