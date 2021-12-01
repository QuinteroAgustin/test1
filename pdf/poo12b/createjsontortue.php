<?php
/**
 * po26c : pdf create
 */
require_once "init.php";
// Crée le tableau d'objets métier "Departement"
$tortue = New TortueDAO;
$tortue = $tortue->find($_GET['id']);

$nom_fichier = "infiles/".$tortue->get_nom().".txt";
$texte = file_get_contents($nom_fichier);
if ($texte===false){
$texte = "Erreur : impossible de lire le fichier ".$nom_fichier." !";
}
$html = nl2br($texte); //Transforme les sauts en balise <br/>

$img = 'img/'.$tortue->get_nom().'.jpg';
$json=[];
$json[]=$tortue->dump();
$json[]= ['image' => $img];
$json[]= ['description' => $html];

$json = json_encode($json, JSON_PRETTY_PRINT);
header("Content-type: application/json; charset=utf-8");
echo $json;

?>
