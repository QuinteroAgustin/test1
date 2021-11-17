<?php
/**
 * po38b : ajouter une fortune
 */
require_once "init.php";

$dao = New FortuneDAO();

$id_fortune=isset($_GET['id_fortune'])?$_GET['id_fortune']:null;
$submit=isset($_POST['submit']);

$OldFortune = $dao->find($id_fortune);

if($submit){
    
    $NFortune = $dao->delete($id_fortune);
    header('Location: liste_fortunes.php');
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>po38b-Supprimer</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
    <h1>po38b</h1>
    <h2>Supprimer</h2>
    <?php include "menu.php"; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id_fortune=<?= $OldFortune->get_id_fortune() ?>" method="POST">
        <label for="rang">Rang</label><br>
        <input type="text" id="rang" name="rang" value="<?= $OldFortune->get_rang() ?>" disabled><br>

        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" value="<?= $OldFortune->get_nom() ?>" disabled><br>

        <label for="siege">Siège</label><br>
        <input type="text" id="siege" name="siege" value="<?= $OldFortune->get_siege() ?>" disabled><br>

        <label for="pays">Pays</label><br>
        <input type="text" id="pays" name="pays" value="<?= $OldFortune->get_pays() ?>" disabled><br>

        <label for="ca">Chiffre d'affaire</label><br>
        <input type="number" id="ca" name="ca" value="<?= $OldFortune->get_ca() ?>" disabled><br>

        <label for="benefice">Bénéfice</label><br>
        <input type="number" id="benefice" name="benefice" value="<?= $OldFortune->get_benefice() ?>" disabled><br>

        <label for="nb_employes">Nb employés</label><br>
        <input type="number" id="rang" name="nb_employes" value="<?= $OldFortune->get_nb_employes() ?>" disabled><br>

        <label for="branche">Branche</label><br>
        <input type="text" id="branche" name="branche" value="<?= $OldFortune->get_branche() ?>" disabled><br>

        <label for="directeur">Directeur</label><br>
        <input type="text" id="directeur" name="directeur" value="<?= $OldFortune->get_directeur() ?>" disabled><br>

        <label for="evolution">Evolution</label><br>
        <input type="text" id="evolution" name="evolution" value="<?= $OldFortune->get_evolution() ?>" disabled><br><br>

        <input type="submit" value="Supprimer" name="submit">&nbsp;
        <input type="reset" value="Rénitialiser">

    </form>
</body>
</html>