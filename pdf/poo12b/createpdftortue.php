<?php
/**
 * po26c : pdf create
 */
require_once "init.php";
// Crée le tableau d'objets métier "Departement"
$tortue = New TortueDAO;
$tortue = $tortue->find($_GET['id']);

// Instanciation de l'objet FDPF
$pdf = new mpdf();

$nom_fichier = "infiles/".$tortue->get_nom().".txt";
$texte = file_get_contents($nom_fichier);
if ($texte===false){
    $texte = "Erreur : impossible de lire le fichier ".$nom_fichier." !";
}

// Metadonnées
$pdf->SetTitle($tortue->get_nom(), true);
$pdf->SetAuthor('A. Quintero', true);
$pdf->SetSubject('Détail de '.$tortue->get_nom(), true);
$pdf->mon_fichier=$tortue->get_nom().".pdf";

// Création d'une page
$pdf->AddPage();

// Définit l'alias du nombre de pages {nb}
$pdf->AliasNbPages();

// Titre de page
$pdf->SetFont('Times', '', 24);
$pdf->SetTextColor(0, 51, 255); // Bleu  #0033FF
$pdf->Cell(0, 20, utf8_decode('Détail de '.$tortue->get_nom()), 0, 1, 'C');
$pdf->Ln(8);

// Boucle des lignes
$pdf->SetFont('Times', '', 12);
$pdf->SetTextColor(0, 0, 0); // Noir
// Entête
$pdf->SetFont('', 'B');
$pdf->SetX(10);
$pdf->SetFillColor(211,211,211);

$pdf->Cell(30, 5, utf8_decode("ID :"), 0,0,"R",false);
$pdf->Cell(30, 5, utf8_decode($tortue->get_id_tortue()),0,1,"L", false);
$pdf->Cell(30, 5, utf8_decode("Nom :"), 0,0,"R",false);
$pdf->Cell(30, 5, utf8_decode($tortue->get_nom()),0,1,"L", false);
$pdf->Cell(30, 5, utf8_decode("Surnom :"), 0,0,"R",false);
$pdf->Cell(30, 5, utf8_decode($tortue->get_surnom()),0,1,"L", false);
$pdf->Cell(30, 5, utf8_decode("Couleur :"), 0,0,"R",false);
$pdf->Cell(30, 5, utf8_decode($tortue->get_couleur()),0,1,"L", false);

$pdf->SetX(10);
$img = 'img/'.$tortue->get_nom().'.jpg';
$pdf->Image($img);

$pdf->SetFont('', '');
$pdf->SetX(10);
$pdf->MultiCell(0,7,utf8_decode($texte),0,'L');


// Génération du document PDF
$pdf->Output('f','outfiles/'.$pdf->mon_fichier);
header('Location: detail.php?id='.$tortue->get_id_tortue());
?>
