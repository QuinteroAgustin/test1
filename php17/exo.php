<?php
    $jours = array(
        0=>"Dimanche",
        1=>"Lundi",
        2=>"Mardi",
        3=>"Mercredi",
        4=>"Jeudi",
        5=>"Vendredi",
        6=>"Samedi"
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
    <h1>Php 17 Jours de la semaine</h1>
    <table>
        <tr>
            <th>Jours</th>
        </tr>
        <?php foreach($jours as $day){
            echo "<tr>";
            echo "<td>".$day."</td>";
            echo "</tr>";
        };?>
    </table>
    <p><a href="exo2.php">Version avec indice</a></p>
    <p><a href="exo3.php">Version avec traduction</a></p>
    <p>Aller au <a href="#top">Top</a></p>  
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>