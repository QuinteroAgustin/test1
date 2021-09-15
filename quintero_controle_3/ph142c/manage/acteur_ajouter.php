<?php
    if(isset($_POST['submit'])){
        include('../sql.php');
        $prenom=isset($_POST['prenom'])?$_POST['prenom']:null;
        $nom=isset($_POST['nom'])?$_POST['nom']:null;
        if($prenom!=null && $nom!=null){
            $sql="INSERT INTO acteur(prenom, nom) VALUES (:prenom, :nom)";
            $request = db_connect()->prepare($sql);
            $request->execute(array(
                ':prenom'=>$prenom,
                ':nom'=>$nom
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
    <title>Ajouter un acteur</title>
</head>
<body>
    <h1>Ph142c - Terminator</h1>
    <h3>Ajout d'un acteur</h3>
    <ul>
        <li>Page d'<a href="../index.php">accueil</a></li>
        <li>Liste des <a href="../films.php">films</a></li>
        <li>Liste des <a href="../acteurs.php">acteurs</a></li>
        <li>Liste  des <a href="../relations.php">relations film-acteur</a></li>
    </ul>
    <br>
    <p>Veuillez saisir un acteur SVP</p>
    <form action="acteur_ajouter.php" method="POST">
        <label for="nom">Nom</label><br>
        <input type="text" name="nom" id="nom"><br>
        <label for="prenom">Prénom</label><br>
        <input type="text" name="prenom" id="prenom"><br><br>
        <input type="submit" name="submit" value="Envoyer">&nbsp;<input type="reset" value="Rénitialiser">
    </form>
</body>
</html>