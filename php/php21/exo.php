<?php require("inc/nuages.inc.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php21</title>
</head>
<body>
    <h1>Exo PHP 21-Nuages</h1>
    <p>Choissisez votre nuage</p>
    <form action="nuages.php" method="POST">
        <ul>
        <?php 
            foreach($familles as $key => $nuage){
                echo "<li>";
                echo '<input type="submit" name="submit" value="'.$key.'">';
                echo "</li>";
            }
        ?>
        </ul>
    </form>
    <p>Aller au <a href="#top">Top</a></p>  
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>
