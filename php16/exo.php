<?php
    $polygones=array(
        3 => "triangle",
        4 => "quadrilatère",
        5 => "pentagone",
        6 => "hexagone",
        8 => "octogone",
        12 => "dodécagone"
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 16</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body id="top">
    <h1>Php 16</h1>
    <table>
        <tr>
            <th>Clé</th>
            <th>Valeur</th>
        </tr>
        <?php
        foreach($polygones as $key=>$values){
            echo "<tr>";
            echo "<td>".$key."</td>";
            echo "<td>".$values."</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <h1>Liste des polygones</h1>
    <table>
        <tr>
            <th>Polygone</th>
        </tr>
        <?php
        $compteur=0;
        foreach($polygones as $values){
            echo "<tr>";
            echo "<td>".$values."</td>";
            echo '</tr>';
            $compteur++;
        }
        ?>
    </table>
    <br>
    <?php echo "<p>Il y a ".$compteur." polygone(s)"; ?>
    <br>
    <?php echo "Un polygone a 8 cotés est un ".$polygones[8]; ?>
    
    <p>Aller au <a href="#top">Top</a></p>  
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>