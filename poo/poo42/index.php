<?php
//include de la bdd
    include('init.php');
    $films = New MarvelDAO();
    $films = $films->findAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO42 - marvel</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>POO42 - MCU avec un DAO</h1>
    <img src="img/mcu_logo.png" alt="???">
    <li><a href="film_rechercher.php">Rechercher</a></li>
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
        foreach($films as $film){
            echo '<tr>';
                echo '<td>'.$film->get_title().'</td>';
                echo '<td>'.$film->get_phase().'</td>';
                $id = sprintf("%02d",$film->get_id());
                $file = "img/".$id.".jpg";
                if(file_exists($file)){
                    echo "<td><img src=\"".$file."\" height=\"100\"></td>";
                }else{
                    echo '<td>???</td>';
                }
                echo '<td>'.$film->get_us_release_date().'</td>';
                echo '<td>'.$film->get_directors().'</td>';
                echo '<td>'.$film->get_screenwriters().'</td>';
                echo '<td>'.$film->get_producers().'</td>';
                echo '<td>'.$film->get_status().'</td>';
                echo '<td><a href="film_modifier.php?id='.$film->get_id().'">Modifier</a> <a href="film_supprimer.php?id='.$film->get_id().'">Supprimer</a></td>';
            echo '</tr>';
        }
        ?>
    </table>
    <p>Il y a <?= count($films) ?> film(s)</p>
    <p><a href="film_ajouter.php">Ajouter</a> un film</p>
</body>
</html>