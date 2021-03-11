<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ph26</title>
</head>
<body>
    <h1>ph26 - like</h1>
    <h4>Ajouter ce que vous aimez !</h4>
    <form action="verif.php" method="POST">
        <label for="value">J'aime</label>
        <input type="text" name="value" id="value">
        <input type="submit" name="submit" value="Ajouter">
    </form>
    <br>
    <h4>Vous aimez ...</h4>
    <ul>
        <?php
        if(isset($_SESSION['like'])){
            foreach($_SESSION['like'] as $value){
                echo "<li>".$value."</li>";
            }
        }
        ?>
    </ul>
    <p>Effacer la <a href="raz.php">liste</a></p>
    <p>Aller au <a href="#top">Top</a></p>  
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>