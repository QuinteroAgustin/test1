<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>po44</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <h1>Music : tarifs des cours</h1>
    <h2>po44 : création des tranches</h2>
    
    <?php
    $tranche0 = new Tranche(0,"EXT",null,null,417,209);
    $tranche1 = new Tranche(1,"A",0,250,60,30);
    $tranche2 = new Tranche(2,"B",251,425,96,48);
    $tranche3 = new Tranche(3,"C",426,680,126,63);
    $tranche4 = new Tranche(4,"D",681,934,192,96);
    $tranche5 = new Tranche(5,"E",935,1800,282,141);
    $tranche6 = new Tranche(6,"F",1801,null,330,165);

    $tranches = array(
        $tranche0,
        $tranche1,
        $tranche2,
        $tranche3,
        $tranche4,
        $tranche5,
        $tranche6
    )

    ?>
</body>
</html>