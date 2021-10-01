<?php
//include de la bdd
    include('db.php');
    $db = db_connect();
    $sql = "SELECT * FROM mcu ORDER BY id";
    $request = $db->prepare($sql);
    $request->execute();
    $response = $request->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>36b - marvel</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>ph 36b - MCU avec une BD</h1>
    <img src="img/mcu_logo.png" alt="???">
    <br>
    <table>
        <tr>
            <th>Titre</th>
            <th>Phase</th>
            <th>Poster</th>
            <th>Date sortie USA</th>
            <th>Réalisateur(s)</th>
            <th>Auteur(s)</th>
            <th>Producteur(s)</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php
        foreach($response as $film){
            echo '<tr>';
                echo '<td>'.$film['title'].'</td>';
                echo '<td>'.$film['phase'].'</td>';
                $id = sprintf("%02d",$film['id']);
                $file = "img/".$id.".jpg";
                if(file_exists($file)){
                    echo "<td><img src=\"".$file."\" height=\"100\"></td>";
                }else{
                    echo '<td>???</td>';
                }
                echo '<td>'.$film['us_release_date'].'</td>';
                echo '<td>'.$film['directors'].'</td>';
                echo '<td>'.$film['screenwriters'].'</td>';
                echo '<td>'.$film['producers'].'</td>';
                echo '<td>'.$film['status'].'</td>';
                echo '<td><a href="film_modifier.php?id='.$film['id'].'">Modifier</a> <a href="film_supprimer.php?id='.$film['id'].'">Supprimer</a></td>';
            echo '</tr>';
        }
        ?>
    </table>
    <p>Il y a <?= count($response) ?> film(s)</p>
    <p><a href="film_ajouter.php">Ajouter</a> un film</p>
</body>
</html>