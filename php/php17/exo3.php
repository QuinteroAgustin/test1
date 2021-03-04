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
    $occitan = array(
        0=>"dimenge",
        1=>"diluns",
        2=>"dimars",
        3=>"dimècres",
        4=>"dijòus",
        5=>"divendres",
        6=>"dissabte"
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
            <th>N°</th>
            <th>Jours</th>
            <th>Occitan</th>
        </tr>
        <?php foreach($jours as $key=>$day){
            echo "<tr>";
            echo "<td>".$key."</td>";
            echo "<td>".$day."</td>";
            echo "<td>".$occitan[$key]."</td>";
            echo "</tr>";
        };?>
    </table>
    <p><a href="exo2.php">Version avec indice</a></p>
    <p><a href="exo.php">Version sans indice ni traduction</a></p>
    <p>Aller au <a href="#top">Top</a></p>  
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>