<?php
/**
 * po25 : affiche "Bonjour le monde" en PDF
 */
require_once "init.php";

// Instanciation de l'objet FDPF
$pdf = new FPDF();

// Création d'une page
$pdf->AddPage();

// Création d'un texte 
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Ligne 1',1,1);
$pdf->Cell(0,10,'Ligne 2',1,1);
$pdf->Cell(0,10,'Ligne 3',1,1);
// Génération du document PDF dans le dossier outfiles
$pdf->Output('outfiles/lignes.pdf','f');  // f=fichier local
header('Location: index.php');
?>
