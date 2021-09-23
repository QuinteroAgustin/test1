<?php
    include('sql.php');
    $sql="select titre, prenom, nom from film, acteur, film_acteur WHERE film.id_film = film_acteur.id_film AND acteur.id_acteur = film_acteur.id_acteur";
    $request=db_connect()->prepare($sql);
    $request->execute();
    $response=$request->fetchAll();
    //Logger  partie 
    include("log.php");
    $tableau = pathinfo(__FILE__);
    $filename = $tableau['basename'];
    logToDisk($filename);
    //fin Logger partie
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relations film-acteur</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>Ph142e - Terminator</h1>
    <h3>Relations film-acteur</h3>
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
            <th>Nom</th>
            <th>Prénom</th>
            <th></th>
        </tr>
        <?php
            foreach($response as $relation){
                echo "<tr>";
                echo "<td>".$relation['titre']."</td>";
                echo "<td>".$relation['nom']."</td>";
                echo "<td>".$relation['prenom']."</td>";
                echo "<td><a href=\"manage/relation_modifier.php?id_film=".$film['id_film']."\">Modifier</a> <a href=\"manage/relation_supprimer.php?id_film=".$film['id_film']."\">Supprimer</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <p><?= count($response) ?> relation(s)</p>
    <p><a href="manage/relation_ajouter.php">Ajouter</a> une relation</p>
</body>
</html>