<?php
    //Logger  partie 
    include("../log.php");
    $tableau = pathinfo(__FILE__);
    $filename = $tableau['basename'];
    logToDisk($filename);
    //fin Logger partie
    if(isset($_GET['id_acteur'])){
        $id_acteur=isset($_GET['id_acteur'])?$_GET['id_acteur']:null;
        if($id_acteur != null){
            include('../sql.php');
            $sql="SELECT * FROM acteur WHERE id_acteur = :id_acteur";
            $request = db_connect()->prepare($sql);
            $request->execute(array(
                ':id_acteur'=>$id_acteur
            ));
            $response=$request->fetch();
        }else{
            header('Location: ../acteurs.php');
        }
    }else{
        if(isset($_POST['submit'])){
            include('../sql.php');
            $id_acteur=isset($_POST['id_acteur'])?$_POST['id_acteur']:null;
            $sql="DELETE FROM acteur WHERE id_acteur = :id_acteur";
            $request = db_connect()->prepare($sql);
            $request->execute(array(
                ':id_acteur'=>$id_acteur
            ));
        }
        header('Location: ../acteurs.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppresion d'un acteur</title>
</head>
<body>
    <h1>Ph142c - Terminator</h1>
    <h3>Suppresion d'un acteur</h3>
    <ul>
        <li>Page d'<a href="../index.php">accueil</a></li>
        <li>Liste des <a href="../films.php">films</a></li>
        <li>Liste des <a href="../acteurs.php">acteurs</a></li>
        <li>Liste  des <a href="../relations.php">relations film-acteur</a></li>
    </ul>
    <br>
    <p>Veuillez valider la suppression de l'ID <?= $response['id_acteur'] ?> SVP</p>
    <form action="acteur_supprimer.php" method="POST">
        <input type="text" name="id_acteur" value="<?= $response['id_acteur'] ?>" hidden>
        <label for="nom">Nom</label><br>
        <input type="text" name="nom" id="nom" value="<?= $response['nom'] ?>" disabled><br>
        <label for="prenom">Prénom</label><br>
        <input type="text" name="prenom" id="prenom" value="<?= $response['prenom'] ?>" disabled><br><br>
        <input type="submit" name="submit" value="Supprimer">&nbsp;<input type="reset" value="Rénitialiser">
    </form>
</body>
</html>