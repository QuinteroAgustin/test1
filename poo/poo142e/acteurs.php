<?php
    include('sql.php');
    $sql="select * from acteur";
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
    <title>Liste des Acteurs</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>Ph142e - Terminator</h1>
    <h3>Liste des Acteurs</h3>
    <ul>
        <li>Page d'<a href="index.php">accueil</a></li>
        <li>Liste des <a href="films.php">films</a></li>
        <li>Liste des <a href="acteurs.php">acteurs</a></li>
        <li>Liste  des <a href="relations.php">relations film-acteur</a></li>
    </ul>
    <br>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th></th>
        </tr>
        <?php
            foreach($response as $acteur){
                echo "<tr>";
                echo "<td>".$acteur['nom']."</td>";
                echo "<td>".$acteur['prenom']."</td>";
                echo "<td><a href=\"manage/acteur_modifier.php?id_acteur=".$acteur['id_acteur']."\">Modifier</a> <a href=\"manage/acteur_supprimer.php?id_acteur=".$acteur['id_acteur']."\">Supprimer</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <p><?= count($response) ?> acteur(s)</p>
    <p><a href="manage/acteur_ajouter.php">Ajouter</a> un acteur</p>
</body>
</html>