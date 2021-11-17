<?php
/**
 * po38c : ajouter une fortune
 */
require_once "init.php";

$dao = New FortuneDAO();

$id_fortune=isset($_GET['id_fortune'])?$_GET['id_fortune']:null;
$submit=isset($_POST['submit']);

$OldFortune = $dao->find($id_fortune);

if($submit){
    $rang=isset($_POST['rang'])?$_POST['rang']:null;
    $nom=isset($_POST['nom'])?$_POST['nom']:null;
    $siege=isset($_POST['siege'])?$_POST['siege']:null;
    $pays=isset($_POST['pays'])?$_POST['pays']:null;
    $ca=isset($_POST['ca'])?$_POST['ca']:null;
    $benefice=isset($_POST['benefice'])?$_POST['benefice']:null;
    $nb_employes=isset($_POST['nb_employes'])?$_POST['nb_employes']:null;
    $branche=isset($_POST['branche'])?$_POST['branche']:null;
    $directeur=isset($_POST['directeur'])?$_POST['directeur']:null;
    $evolution=isset($_POST['evolution'])?$_POST['evolution']:null;
    $fortune = New Fortune(array(
        'id_fortune' => $id_fortune,
        'rang' => $rang,
        'nom' => $nom,
        'siege' => $siege,
        'pays' => $pays,
        'ca' => $ca,
        'benefice' => $benefice,
        'nb_employes' => $nb_employes,
        'branche' => $branche,
        'directeur' => $directeur,
        'evolution' => $evolution
    ));
    echo '<pre>';
    echo '</pre>';
    $NFortune = $dao->update($fortune);
    header('Location: liste_fortunes.php');
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>po38c-Modification</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
    <h1>po38c</h1>
    <h2>Modifier</h2>
    <?php include "menu.php"; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id_fortune=<?= $OldFortune->get_id_fortune() ?>" method="POST">
        <label for="rang">Rang</label><br>
        <input type="text" id="rang" name="rang" value="<?= $OldFortune->get_rang() ?>"><br>

        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" value="<?= $OldFortune->get_nom() ?>"><br>

        <label for="siege">Siège</label><br>
        <input type="text" id="siege" name="siege" value="<?= $OldFortune->get_siege() ?>"><br>

        <label for="pays">Pays</label><br>
        <input type="text" id="pays" name="pays" value="<?= $OldFortune->get_pays() ?>"><br>

        <label for="ca">Chiffre d'affaire</label><br>
        <input type="number" id="ca" name="ca" value="<?= $OldFortune->get_ca() ?>"><br>

        <label for="benefice">Bénéfice</label><br>
        <input type="number" id="benefice" name="benefice" value="<?= $OldFortune->get_benefice() ?>"><br>

        <label for="nb_employes">Nb employés</label><br>
        <input type="number" id="rang" name="nb_employes" value="<?= $OldFortune->get_nb_employes() ?>"><br>

        <label for="branche">Branche</label><br>
        <input type="text" id="branche" name="branche" value="<?= $OldFortune->get_branche() ?>"><br>

        <label for="directeur">Directeur</label><br>
        <input type="text" id="directeur" name="directeur" value="<?= $OldFortune->get_directeur() ?>"><br>

        <label for="evolution">Evolution</label><br>
        <input type="text" id="evolution" name="evolution" value="<?= $OldFortune->get_evolution() ?>"><br><br>

        <input type="submit" value="Modifier" name="submit">&nbsp;
        <input type="reset" value="Rénitialiser">

    </form>
</body>
</html>