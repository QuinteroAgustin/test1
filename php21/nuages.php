<?php require("inc/nuages.inc.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuages php21</title>
</head>
<body>
    <h1>Nom du nuage : <?= $_POST['submit']; ?></h1>
    <h4>Famille : <?= $familles[$_POST['submit']]; ?> (<?= $lib_familles[$familles[$_POST['submit']]] ?>)</h4>
    <img src="<?= "img/".$_POST['submit'].".jpg" ?>" alt="ERROR">
    <p><?= $descriptions[$_POST['submit']] ?></p>
    <p><a href="exo.php">Retour</a></p>
</body>
</html>