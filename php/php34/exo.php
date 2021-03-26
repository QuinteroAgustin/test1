<?php  include("sql.php"); 
$sql="SELECT id_station, nom FROM station";
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
    <h3>Liste des stations du métro toulousain</h3>
    <p>Liste des <a href="stations.php">stations par ligne</a></p>
    <p>Liste des <a href="terminus.php">terminus par ligne</a></p>

    <table>
        <tr>
            <th>ID</th>
            <th>Ligne</th>
        </tr>
        <?php 
            foreach($response as $station){
                echo "<tr>";
                echo "<td>".$station['id_station']."</td>";
                echo "<td>".$station['nom']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <p><?= count($response); ?> station(s)</p>
    <p>Retour au <a href="../../index.php">menu</a></p>
</body>
</html>