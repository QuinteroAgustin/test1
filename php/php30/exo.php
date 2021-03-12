<?php 
    include('sql.php'); 
    $sql="SELECT * FROM personnes ORDER BY nom ASC";
    $request=db_connect()->prepare($sql);
    $request->execute();
    $results=$request->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PH 30</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>PHP 30 <a href="liste.php">liste</a></h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Code postal</th>
        </tr>
        <?php
            $comp=0;
            foreach($results as $row){
                echo "<tr>";
                echo "<td>".$row['nom']."</td>";
                echo "<td>".$row['prenom']."</td>";
                echo "<td>".$row['age']."</td>";
                echo "<td>".$row['cp']."</td>";
                echo "</tr>";
                $comp++;
            }
        ?>
    </table>
    <p>Il y a <?= $comp; ?> personne(s)</p>
</body>
</html>