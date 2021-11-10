<?php
//include sql
include('init.php');
//si l'url a l'id 
$id = isset($_GET['id']) ? $_GET['id'] : NULL;
if($id != NULL){
    $db = db_connect();
    //requete sql
    $sql = "SELECT * FROM mcu WHERE id = :id";
    $request = $db->prepare($sql);
    $request->execute(array(
        ':id' => $id
    ));
    $film = $request->fetch(PDO::FETCH_ASSOC);
}else{
    //Pas d'id dans l'url
    echo "Il n'y à pas l'id dans l'url";
    echo '<li><a href="index.php">Accueil</a></li>';
    die();
}
if(isset($_POST['submit'])){
    //sauvegarde des données dans des variables 
    $title = isset($_POST['title']) ? $_POST['title'] : NULL;
    $phase = isset($_POST['phase']) ? $_POST['phase'] : NULL;
    $us_release_date = isset($_POST['us_release_date']) ? $_POST['us_release_date'] : NULL;
    $directors = isset($_POST['directors']) ? $_POST['directors'] : NULL;
    $screenwriters = isset($_POST['screenwriters']) ? $_POST['screenwriters'] : NULL;
    $producers = isset($_POST['producers']) ? $_POST['producers'] : NULL;
    $status = isset($_POST['status']) ? $_POST['status'] : NULL;
    //vérifie que les champs sont bien remplies
    if($title != NULL && $directors != NULL && $screenwriters != NULL && $producers != NULL && $status != NULL){
        $db = db_connect();
        //requete sql insert
        $sql = "UPDATE mcu SET title=:title, phase=:phase, us_release_date=:us_release_date, directors=:directors, screenwriters=:screenwriters, producers=:producers, status=:status WHERE id = :id";
        $request = $db->prepare($sql);
        $request->execute(array(
            ':title' => $title,
            ':phase' => $phase, 
            ':us_release_date' => $us_release_date, 
            ':directors' => $directors, 
            ':screenwriters' => $screenwriters, 
            ':producers' => $producers, 
            ':status' => $status,
            ':id' => $id
        ));
        //succes de l'ajout
        echo 'Film modifié avec succès';
        echo '<li><a href="index.php">Accueil</a></li>';
        die();
    }else{
        //echec de l'ajout
        echo 'Certains champs sont vides';
        echo '<li><a href="film_ajouter.php">Ajouter</a></li>';
        die();
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>36b - marvel modifier</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>ph 36b - MCU</h1>
    <h3>Modification d'un film</h3>
    <li><a href="index.php">Accueil</a></li>
    <p>Veuillez réaliser la modification de <?= $film['title'] ?> SVP</p>
    
    <form action="" method="POST">
        
        <label for="title">Titre</label><br>
        <input type="text" name="title" id="title" value="<?= $film['title'] ?>"><br><br>
        
        <label for="phase">Phase</label><br>
        <input type="number" name="phase" id="phase" value="<?= $film['phase'] ?>"><br><br>
        
        <label for="us_release_date">Date de sortie USA</label><br>
        <input type="date" name="us_release_date" id="us_release_date" value="<?= $film['us_release_date'] ?>"><br><br>
        
        <label for="directors">Réalisateur(s)</label><br>
        <input type="text" name="directors" id="directors" value="<?= $film['directors'] ?>"><br><br>
        
        <label for="screenwriters">Auteur(s)</label><br>
        <input type="text" name="screenwriters" id="screenwriters" value="<?= $film['screenwriters'] ?>"><br><br>
        
        <label for="producers">Producteur(s)</label><br>
        <input type="text" name="producers" id="producers" value="<?= $film['producers'] ?>"><br><br>
        
        <label for="status">Statut</label><br>
        <input type="text" name="status" id="status" value="<?= $film['status'] ?>"><br><br>

        <input type="submit" value="Envoyer" name="submit"> <input type="reset" value="Rénitialiser">
    </form>

</body>
</html>