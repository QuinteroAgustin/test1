<?php
    if(isset($_GET['id_film'])){
        $id_film=isset($_GET['id_film'])?$_GET['id_film']:null;
        if($id_film != null){
            include('../sql.php');
            $sql="SELECT * FROM film WHERE id_film = :id_film";
            $request = db_connect()->prepare($sql);
            $request->execute(array(
                ':id_film'=>$id_film
            ));
            $response=$request->fetch();
        }else{
            header('Location: ../films.php');
        }
    }else{
        if(isset($_POST['submit'])){
            include('../sql.php');
            $titre=isset($_POST['titre'])?$_POST['titre']:null;
            $realisateur=isset($_POST['realisateur'])?$_POST['realisateur']:null;
            $annee=isset($_POST['annee'])?$_POST['annee']:null;
            $id_film=isset($_POST['id_film'])?$_POST['id_film']:null;
            $sql="UPDATE film SET titre = :titre, realisateur = :realisateur, annee = :annee WHERE id_film = :id_film";
            $request = db_connect()->prepare($sql);
            $request->execute(array(
                ':titre'=>$titre,
                ':realisateur'=>$realisateur,
                ':annee'=>$annee,
                ':id_film'=>$id_film
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
    <title>Modification d'un film</title>
</head>
<body>
    <h1>Ph142c - Terminator</h1>
    <h3>Modification d'un film</h3>
    <ul>
        <li>Page d'<a href="../index.php">accueil</a></li>
        <li>Liste des <a href="../films.php">films</a></li>
        <li>Liste des <a href="../acteurs.php">acteurs</a></li>
        <li>Liste  des <a href="../relations.php">relations film-acteur</a></li>
    </ul>
    <br>
    <p>Veuillez réaliser la modification de l'ID <?= $response['id_film'] ?> SVP</p>
    <form action="film_modifier.php" method="POST">
        <input type="text" name="id_film" value="<?= $response['id_film'] ?>" hidden>
        <label for="titre">Titre</label><br>
        <input type="text" name="titre" id="titre" value="<?= $response['titre'] ?>"><br>
        <label for="realisateur">Réalisateur</label><br>
        <input type="text" name="realisateur" id="realisateur" value="<?= $response['realisateur'] ?>"><br>
        <label for="annee">Année</label><br>
        <input type="text" name="annee" id="annee"  value="<?= $response['annee'] ?>"><br><br>
        <input type="submit" name="submit" value="Envoyer">&nbsp;<input type="reset" value="Rénitialiser">
    </form>
</body>
</html>