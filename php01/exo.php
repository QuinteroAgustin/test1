<?php 
        $chaine="<p>Hello world</p>";

        $prenom="jean-jaques";
        $nom="monique";

        $table=5;

        $nombre=10000032;
        $reste=$nombre/2;
        
        $nbcote=1;
        $nomcote="????";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php 01à15</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body id="top">
    <h1>Exo 1 en php</h1>

    <?php 
        echo "<p>Exo ph2</p>";
        echo "<p>".$chaine."</p>";
        echo "<p>".date('Y-m-d H:i:s')."</p>";
        echo "<p>Exo ph3</p>";
        echo "<table>";
        for ( $i=1 ; $i<=10 ; $i++) {
            echo "<tr><td>".$i."</td></tr>";
        }
        echo "</table>";
        echo "<p>Exo ph4</p>";
        echo "<p>Bonjour je suis ".$prenom." ".$nom."!</p>";
        echo "<p>Exo ph5</p>";
        echo "<ul>";
        for ($i=1;$i<=10;$i++){
            echo "<li>".$table."x".$i."=".$i*$table."</li>";
        }
        echo "</ul>";
        echo "<p>Exo ph6</p>";
        if($reste%2==0){
            echo "<p>".$reste." est pair</p>";
        }else{
            echo "<p>".$reste." est impair</p>";
        }
        echo "<p>Exo ph7</p>";
        if ($nbcote==3) {
            $nomcote="triangle";
        }
        if ($nbcote==4) {
            $nomcote="quadrilatère";
        }
        if ($nbcote==5) {
            $nomcote="pentagone";
        }
        if ($nbcote==6) {
            $nomcote="hexagone";
        }
        if($nbcote==8){
            $nomcote="octogone";
        }
        if($nbcote==12){
            $nomcote="dodécagone";
        }
        echo "<p> Ce polynome à ".$nbcote." est un ".$nomcote."</p>";

        echo "<p>Exo ph8</p>";
        $temperature=-312;
        $etat;
        if($temperature >0 && $temperature<=100){
            $etat="liquide";
        }elseif($temperature<=100){
            $etat="solide";
        }else{
            $etat="gazeux";
        }
        echo "<p> A ".$temperature." l'état de l'eau est ".$etat."</p>";
        echo "<p>Exo ph9</p>";
        echo "<h6>avec For</h6>";
        echo "<ul>";
        for ($i=1;$i<=10;$i++){
            echo "<li>".$table."x".$i."=".$i*$table."</li>";
        }
        echo "</ul>";
        echo "<h6>avec while</h6>";
        echo "<ul>";
        $i=1;
        while ($i<=10){
            echo "<li>".$table."x".$i."=".$i*$table."</li>";
            $i++;
        }
        echo "</ul>";

        echo "<h6>avec do while</h6>";
        echo "<ul>";
        $i=1;
        do{
            echo "<li>".$table."x".$i."=".$i*$table."</li>";
            $i++;
        }while($i<=10);
        echo "</ul>";

        echo "<p>Exo ph10</p>";
        $nbhomme=5;
        for ($i=1;$i<=$nbhomme;$i++){
            echo '<img src="h.png" alt="lol" widh="50" height="100">&nbsp;';
        }

        echo "<p>Exo ph11</p>";
        $nbhomme2=23;
        for ($i=1;$i<=$nbhomme2;$i++){
            if($i%5==0){
                echo '<img src="h.png" alt="lol" widh="50" height="100">&nbsp;</br>';
            }else{
                echo '<img src="h.png" alt="lol" widh="50" height="100">&nbsp;';
            }
            
        }
        echo "<p>Exo ph15</p>";
        $x=5;
        $y=10;
        echo '<table>';
        for($i=0;$i<$y;$i++){
            echo '<tr>';
            for($j=0;$j<$x;$j++){
                echo '<td>&nbsp;&nbsp;</td>';
            }
            echo "</tr>";
        }
        echo "</table>";

        echo "<p>Exo ph15b</p>";
        $x=5;
        $y=10;
        echo '<table>';
        for($i=1;$i<=$y;$i++){
            echo '<tr>';
            for($j=1;$j<=$x;$j++){
                if($i==1){
                    echo "<td>".$j."</td>";
                }else{
                    if($j==1){
                        echo "<td>".$i."</td>";
                    }else{
                        echo "<td></td>";
                    }
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>

    
    <p>Aller au <a href="#top">Top</a></p>  
    
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>