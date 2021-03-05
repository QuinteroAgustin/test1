<?php
$chaine="DONALD TRUMP EST A DAVOS";
$nb_voyelle=0;
$voyelle=array("A","E","I","O","U","Y");
for($i=0;$i<strlen($chaine);$i++){
    if(in_array($chaine[$i],$voyelle)){
        $nb_voyelle++;
    }
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PH37</title>
</head>
<body>
    <h1>ph37 : voyelles</h1>
    <?php
        echo "<p>La chaine = ".$chaine."</p>";
        echo "<p>Le nombre de voyelle(s) = ".$nb_voyelle."</p>";
    ?>
    <p>Retour au menu : <a href="../index.php">ici</a></p>
</body>
</html>