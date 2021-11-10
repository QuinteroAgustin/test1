<?php
//include sql
include('init.php');
$dao = New MarvelDAO();
//si l'url a l'id 
$id = isset($_GET['id']) ? $_GET['id'] : NULL;
if($id != NULL){
    $film = $dao->find($id);
}else{
    //Pas d'id dans l'url
    echo "Il n'y à pas l'id dans l'url";
    echo '<li><a href="index.php">Accueil</a></li>';
    die();
}
if(isset($_POST['submit'])){
    $film = $dao->delete($id);
    //succes de l'ajout
    echo 'Film supprimé avec succès';
    echo '<li><a href="index.php">Accueil</a></li>';
    die();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poo 42 - marvel supprimer</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>poo 42 - MCU</h1>
    <h3>Suppression d'un film</h3>
    <li><a href="index.php">Accueil</a></li>
    <p>Veuillez réaliser la suppression de <?= $film->get_id() ?> SVP</p>
    
    <form action="" method="POST">
        
        <label for="title">Titre</label><br>
        <input type="text" name="title" id="title" value="<?= $film->get_title() ?>" disabled><br><br>
        
        <label for="phase">Phase</label><br>
        <input type="number" name="phase" id="phase" value="<?= $film->get_phase() ?>" disabled><br><br>
        
        <label for="us_release_date">Date de sortie USA</label><br>
        <input type="date" name="us_release_date" id="us_release_date" value="<?= $film->get_us_release_date() ?>" disabled><br><br>
        
        <label for="directors">Réalisateur(s)</label><br>
        <input type="text" name="directors" id="directors" value="<?= $film->get_directors() ?>" disabled><br><br>
        
        <label for="screenwriters">Auteur(s)</label><br>
        <input type="text" name="screenwriters" id="screenwriters" value="<?= $film->get_screenwriters() ?>" disabled><br><br>
        
        <label for="producers">Producteur(s)</label><br>
        <input type="text" name="producers" id="producers" value="<?= $film->get_producers() ?>" disabled><br><br>
        
        <label for="status">Statut</label><br>
        <input type="text" name="status" id="status" value="<?= $film->get_status() ?>" disabled><br><br>

        <input type="submit" value="Supprimer" name="submit"> <input type="reset" value="Rénitialiser">
    </form>

</body>
</html>