<?php 
    include('../sql.php');
    if(isset($_GET['id'])){
        $sql="SELECT * FROM personnes WHERE id=:id";
        $request=db_connect()->prepare($sql);
        $request->execute(array(
            "id"=>$_GET['id']
        ));
        $results=$request->fetch();
    }else{
        if(isset($_POST['submit'])){
            $id=isset($_POST['id']) ? $_POST['id'] : null;
            $nom=isset($_POST['nom']) ? $_POST['nom'] : null;
            $prenom=isset($_POST['prenom']) ? $_POST['prenom'] : null;
            $age=isset($_POST['age']) ? $_POST['age'] : null;
            $cp=isset($_POST['cp']) ? $_POST['cp'] : null;
            
            $sql="UPDATE personnes SET nom=:nom, prenom=:prenom, age=:age, cp=:cp WHERE id=:id";
            $request=db_connect()->prepare($sql);
            $request->execute(array(
                "id"=>$id,
                "nom"=>$nom,
                "prenom"=>$prenom,
                "age"=>$age,
                "cp"=>$cp
            ));
        }
        header('Location: exoc.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit de <?= $results['nom'] ?> <?= $results['prenom'] ?></h1>
    <form action="edit.php" method="POST">
        <input type="hidden" name="id" id="id" value="<?= $results['id']; ?>">
        <label for="nom">Nom : </label><br>
        <input type="text" name="nom" id="nom" value="<?= $results['nom']; ?>">
        <br>
        <label for="nom">Prénom : </label><br>
        <input type="text" name="prenom" id="prenom" value="<?= $results['prenom']; ?>">
        <br>
        <label for="nom">Age : </label><br>
        <input type="number" name="age" id="age" value="<?= $results['age']; ?>">
        <br>
        <label for="nom">Code postal : </label><br>
        <input type="number" name="cp" id="cp" value="<?= $results['cp']; ?>">
        <br><br>
        <input type="submit" name="submit" value="Modifier">&nbsp;
        <input type="reset" value="Vider">
    </form>
    <p>Retour a la <a href="exoc.php">Liste</a></p>
</body>
</html>