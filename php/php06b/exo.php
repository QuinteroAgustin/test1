<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 6b</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body id="top">
    <h1>Php 6b</h1>

    <?php
    
    function parite($nb){
        if($nb%2==0){
            echo $nb." est pair </br>";
        }else{
            echo $nb." est impair </br>";
        }
    }

    parite(1);
    parite(16);
    parite(23);
    parite(217);
    parite(99);

    ?> 
    
    <p>Aller au <a href="#top">Top</a></p>  
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>