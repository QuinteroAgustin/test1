<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 13</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body id="top">
    <h1>Php 13</h1>

    <?php
    
    function hyper($chaine){
        echo "<p><a href=\"http://".$chaine."\" title=\"Lien vers ".$chaine."\">".$chaine."</a></p>";
    }

    hyper("www.google.fr");
    hyper("www.bing.fr");
    hyper("www.qwant.com");

    ?> 
    
    <p>Aller au <a href="#top">Top</a></p>  
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>