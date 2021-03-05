<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PH29</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>ph29 : multiple de 6</h1>
    <h3>Multiples de 6 pour les entiers compris entre 1 et 32</h3>
    <ul>
    <?php
        for($i=1;$i<=32;$i++)
        {
            if($i % 6  == 0){
                echo"<li class=\"multiple\">".$i."</li>";
            }else{
                echo"<li>".$i."</li>";
            }
        }
    ?>
    </ul>
    <p>Retour au menu : <a href="../index.php">ici</a></p>
</body>
</html>