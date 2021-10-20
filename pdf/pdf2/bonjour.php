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
$pdf->Cell(40,10,'Bonjour le monde');  // 40=largeur en mm; 10 = hauteur

// Génération du document PDF dans le dossier outfiles
$pdf->Output('outfiles/bonjour.pdf','f');  // f=fichier local
header('Location: index.php');
?>
