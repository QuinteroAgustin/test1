<?php
//
// import du fichier CSV dans un tableau EXCEL
//

require_once "init.php";

// Ouverture du fichier
$file = fopen("files/fortune20.csv", "r") or exit("<p>Impossible de lire le fichier</p>");
$nb=0;
$rows=array();

// Boucle de lecture
while (!feof($file)) {
	$row=fgetcsv($file, 0, ';');
    $rows[]=$row;
    $nb++;
}
// Fermeture du fichier
fclose($file);

// test
//echo "<pre>";
//print_r($rows);
//echo "</pre>";