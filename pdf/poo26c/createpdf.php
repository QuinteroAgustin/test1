<?php
/**
 * po26c : pdf create
 */
require_once "init.php";

// Instanciation de l'objet FDPF
$pdf = new mpdf();

// Création d'une page
$pdf->AddPage();

// Création d'un texte 
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Bonjour le monde');  // 40=largeur en mm; 10 = hauteur

// Génération du document PDF dans le dossier outfiles
$pdf->Output('outfiles/test.pdf','f');  // f=fichier local
header('Location: index.php');
?>
