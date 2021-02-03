<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 09B</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body id="top">
    <h1>Php 09b</h1>
    <?php
    function table($table){
        echo "Table de ".$table;
        echo "<ul>";
        for($i=1;$i<=10;$i++){
            echo "<li>".$table."x".$i."=".$table*$i."</li>";
        }
        echo "</ul>";
    }

    table(5);
    table(9);
    table(2);
    
    ?> 
    <p>Aller au <a href="#top">Top</a></p>  
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>