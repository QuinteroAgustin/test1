<?php
    $nombre=isset($_POST['nombre']) ? $_POST['nombre'] : "";
    $submit=isset($_POST['submit']) ? $_POST['submit'] : "";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 05</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body id="top">
    <h1>Php 05 - Table de multiplication</h1>
    <?php if($submit && $nombre()){?>
        <h4>Table de <?= $nombre; ?></h4>
        <ul>
            <?php for ($i=1;$i<=10;$i++) {
            echo "<li>".$nombre."*".$i."=".$nombre*$i."</li>";
            }?>
        </ul>
    <?php } ?>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" name="submit" value="OK">
    </form>
    <p>Aller au <a href="#top">Top</a></p>  
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>