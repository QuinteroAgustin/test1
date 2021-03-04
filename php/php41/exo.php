<?php
//
// Alphabet phonétique OTAN
//
$lettres= array(
    "A"=>"Alfa",
    "B"=>"Bravo",
    "C"=>"Charlie",
    "D"=>"Delta",
    "E"=>"Echo",
    "F"=>"Foxtrot",
    "G"=>"Golf",
    "H"=>"Hotel",
    "I"=>"India",
    "J"=>"Juliett",
    "K"=>"Kilo",
    "L"=>"Lima",
    "M"=>"Mike",
    "N"=>"November",
    "O"=>"Oscar",
    "P"=>"Papa",
    "Q"=>"Quebec",
    "R"=>"Romeo",
    "S"=>"Sierra",
    "T"=>"Tango",
    "U"=>"Uniform",
    "V"=>"Victor",
    "W"=>"Whiskey",
    "X"=>"X-ray",
    "Y"=>"Yankee",
    "Z"=>"Zulu",
);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php 17</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>Php 41 - Tiens un peu de fançais pour t'aider a manger</h1>
    <table>
        <tr>
            <th>Lettre</th>
            <th>Code OTAN</th>
        </tr>
        <?php foreach($lettres as $key=>$values){
            echo "<tr>";
            echo "<td>".$key."</td>";
            echo "<td>".$values."</td>";
            echo "</tr>";
        };
        ?>
    </table>
    <br>
    <ul>
        <?php $compteur=0;
        foreach($lettres as $key=>$values){
            echo "<li>".$key." : ".$values."</li>";
            $compteur++;
        };
        ?>
    </ul>
    <p><?php echo "Il y a ".$compteur." lettre(s)"; ?></p>
    <p>Aller au <a href="#top">Top</a></p>  
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>