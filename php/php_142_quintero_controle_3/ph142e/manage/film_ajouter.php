<?php
    //Logger  partie 
    include("../log.php");
    $tableau = pathinfo(__FILE__);
    $filename = $tableau['basename'];
    logToDisk($filename);
    //fin Logger partie
    if(isset($_POST['submit'])){
        include('../sql.php');
        $titre=isset($_POST['titre'])?$_POST['titre']:null;
        $realisateur=isset($_POST['realisateur'])?$_POST['realisateur']:null;
        $annee=isset($_POST['annee'])?$_POST['annee']:null;
        if($titre!=null && $realisateur!=null && $annee !=null){
            $sql="INSERT INTO film(titre, realisateur, annee) VALUES (:titre, :realisateur, :annee)";
            $request = db_connect()->prepare($sql);
            $request->execute(array(
                ':titre'=>$titre,
                ':realisateur'=>$realisateur,
                ':annee'=>$annee
            ));
        }
        header('Location: ../films.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un film</title>
</head>
<body>
    <h1>Ph142c - Terminator</h1>
    <h3>Ajout d'un film</h3>
    <ul>
        <li>Page d'<a href="../index.php">accueil</a></li>
        <li>Liste des <a href="../films.php">films</a></li>
        <li>Liste des <a href="../acteurs.php">acteurs</a></li>
        <li>Liste  des <a href="../relations.php">relations film-acteur</a></li>
    </ul>
    <br>
    <p>Veuillez saisir un film SVP</p>
    <form action="film_ajouter.php" method="POST">
        <label for="titre">Titre</label><br>
        <input type="text" name="titre" id="titre"><br>
        <label for="realisateur">Réalisateur</label><br>
        <input type="text" name="realisateur" id="realisateur"><br>
        <label for="annee">Année</label><br>
        <input type="text" name="annee" id="annee"><br><br>
        <input type="submit" name="submit" value="Envoyer">&nbsp;<input type="reset" value="Rénitialiser">
    </form>
</body>
</html>