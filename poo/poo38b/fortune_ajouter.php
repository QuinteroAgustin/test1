<?php
/**
 * po38b : ajouter une fortune
 */
require_once "init.php";

$dao = New FortuneDAO();

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
$submit=isset($_POST['submit']);

if($submit){
    $fortune = New Fortune(array(
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
    $NFortune = $dao->insert($fortune);
    header('Location: liste_fortunes.php');
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>po38b-Ajouter</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>
<body>
    <h1>po38b</h1>
    <h2>Ajouter</h2>
    <?php include "menu.php"; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="rang">Rang</label><br>
        <input type="text" id="rang" name="rang" value="<?= $rang ?>"><br>

        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" value="<?= $nom ?>"><br>

        <label for="siege">Siège</label><br>
        <input type="text" id="siege" name="siege" value="<?= $siege ?>"><br>

        <label for="pays">Pays</label><br>
        <input type="text" id="pays" name="pays" value="<?= $pays ?>"><br>

        <label for="ca">Chiffre d'affaire</label><br>
        <input type="number" id="ca" name="ca" value="<?= $ca ?>"><br>

        <label for="benefice">Bénéfice</label><br>
        <input type="number" id="benefice" name="benefice" value="<?= $benefice ?>"><br>

        <label for="nb_employes">Nb employés</label><br>
        <input type="number" id="rang" name="nb_employes" value="<?= $nb_employes ?>"><br>

        <label for="branche">Branche</label><br>
        <input type="text" id="branche" name="branche" value="<?= $branche ?>"><br>

        <label for="directeur">Directeur</label><br>
        <input type="text" id="directeur" name="directeur" value="<?= $directeur ?>"><br>

        <label for="evolution">Evolution</label><br>
        <input type="text" id="evolution" name="evolution" value="<?= $evolution ?>"><br><br>

        <input type="submit" value="Ajouter" name="submit">&nbsp;
        <input type="reset" value="Rénitialiser">

    </form>
</body>
</html>