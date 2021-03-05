<?php include("devise.inc.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PH43</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>ph43 : Devises des plus grandes puissances économiques</h1>
    <table>
        <tr>
            <th>Code</th>
            <th>Devise</th>
        </tr>
        <?php
            $compteur=0;
            foreach($devises as $key => $devise){
                echo "<tr>";
                echo "<td>".$key."</td>";
                echo "<td>".$devise."</td>";
                echo "</tr>";
                $compteur++;
            }
        ?>
    </table>
    <p>Il y a <?= $compteur ?> devise(s)</p>
    <p>Retour au menu : <a href="../index.php">ici</a></p>
</body>
</html>