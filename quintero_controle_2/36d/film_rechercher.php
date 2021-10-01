<?php
$critere = isset($_POST['critere']) ? $_POST['critere'] : NULL;
//include de la bdd
include('db.php');
$db = db_connect();
if(isset($_POST['submit'])){
    //requete sql
    $sql = "SELECT * FROM mcu WHERE title LIKE '%".$critere."%' OR directors LIKE '%".$critere."%' OR screenwriters LIKE '%".$critere."%' OR producers LIKE '%".$critere."%' OR status LIKE '%".$critere."%'";
    $request = $db->prepare($sql);
    $request->execute();
    $films = $request->fetchAll(PDO::FETCH_ASSOC);
}else{
    $sql = "SELECT * FROM mcu ORDER BY id";
    $request = $db->prepare($sql);
    $request->execute();
    $films = $request->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>36b - marvel rechercher</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>ph 36b - MCU avec moteur de recherche</h1>
    <img src="img/mcu_logo.png" alt="???">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="film_rechercher.php">Rechercher</a></li>
    </ul>
    
    <br>

    <form action="" method="POST">
        <label for="critere">Critère</label><br>
        <input type="text" name="critere" id="critere" value="<?php if($critere){ echo $critere; } ?>"><br><br>

        <input type="submit" value="Rechercher" name="submit"> <input type="reset" value="Rénitialiser"><br><br>
    </form>

    <?php 
        if(isset($_POST['submit'])){
            echo '<table>';
                echo '<tr>';
                    echo '<th>Titre</th>';
                    echo '<th>Phase</th>';
                    echo '<th>Poster</th>';
                    echo '<th>Date sortie USA</th>';
                    echo '<th>Réalisateur(s)</th>';
                    echo '<th>Auteur(s)</th>';
                    echo '<th>Producteur(s)</th>';
                    echo '<th>Status</th>';
                    echo '<th>Actions</th>';
                echo '</tr>';
                foreach($films as $film){
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
            echo '</table>';
            echo "<p>Il y a ".count($films)." film(s)</p>";
        }else{
            echo '<table>';
                echo '<tr>';
                    echo '<th>Titre</th>';
                    echo '<th>Phase</th>';
                    echo '<th>Poster</th>';
                    echo '<th>Date sortie USA</th>';
                    echo '<th>Réalisateur(s)</th>';
                    echo '<th>Auteur(s)</th>';
                    echo '<th>Producteur(s)</th>';
                    echo '<th>Status</th>';
                    echo '<th>Actions</th>';
                echo '</tr>';
                foreach($films as $film){
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
            echo '</table>';
            echo "<p>Il y a ".count($films)." film(s)</p>";
        }
    ?>
</body>
</html>