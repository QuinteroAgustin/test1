<?php 
    include('../sql.php');
    if(isset($_POST['submit'])){
        $nom=isset($_POST['nom']) ? $_POST['nom'] : null;
        $prenom=isset($_POST['prenom']) ? $_POST['prenom'] : null;
        $age=isset($_POST['age']) ? $_POST['age'] : null;
        $cp=isset($_POST['cp']) ? $_POST['cp'] : null;

        $sql="INSERT INTO personnes(nom,prenom,age,cp) VALUES (:nom, :prenom, :age, :cp)";
        $request=db_connect()->prepare($sql);
        $request->execute(array(
            "nom"=>$nom,
            "prenom"=>$prenom,
            "age"=>$age,
            "cp"=>$cp
        ));
        header('Location: exoc.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
</head>
<body>
    <h1>Ajouter</h1>
    <form action="ajouter.php" method="POST">
        <label for="nom">Nom : </label><br>
        <input type="text" name="nom" id="nom">
        <br>
        <label for="nom">Prénom : </label><br>
        <input type="text" name="prenom" id="prenom">
        <br>
        <label for="nom">Age : </label><br>
        <input type="number" name="age" id="age">
        <br>
        <label for="nom">Code postal : </label><br>
        <input type="number" name="cp" id="cp">
        <br><br>
        <input type="submit" name="submit" value="Ajouter">&nbsp;
        <input type="reset" value="Vider">
    </form>
    <p>Retour a la <a href="exoc.php">Liste</a></p>
</body>
</html>