<?php
    include('sql.php');
    $sql="select * from film";
    $request=db_connect()->prepare($sql);
    $request->execute();
    $response=$request->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Films</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>Ph142 - Terminator</h1>
    <h3>Liste des Films</h3>
    <ul>
        <li>Page d'<a href="index.php">accueil</a></li>
        <li>Liste des <a href="films.php">films</a></li>
        <li>Liste des <a href="acteurs.php">acteurs</a></li>
        <li>Liste  des <a href="relations.php">relations film-acteur</a></li>
    </ul>
    <br>
    <table>
        <tr>
            <th>Titre</th>
            <th>Réalisateur</th>
            <th>Année</th>
            <th></th>
        </tr>
        <?php
            foreach($response as $film){
                echo "<tr>";
                echo "<td>".$film['titre']."</td>";
                echo "<td>".$film['realisateur']."</td>";
                echo "<td>".$film['annee']."</td>";
                echo "<td><a href=\"manage/film_modifier.php?id_film=".$film['id_film']."\">Modifier</a> <a href=\"manage/film_supprimer.php?id_film=".$film['id_film']."\">Supprimer</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <p><?= count($response) ?> film(s)</p>
    <p><a href="manage/film_ajouter.php">Ajouter</a> un film</p>
</body>
</html>