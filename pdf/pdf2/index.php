<?php
    require_once 'fpdf/fpdf.php';
    // Instanciation de l'objet FPDF
    $pdf = new FPDF();
    $pdf->AddPage(); // Crée une nouvelle page
    $pdf->SetFont('Arial','B',16); // Définit la police par défaut
    $pdf->Cell(40,10,'Bonjour le monde'); // Affiche du texte dans une cellule de 4x1cm
    // Génération du document PDF
    $pdf->Output('I','outfiles/liste_departements.pdf', );
    // Redirection vers une autre page
    //header('Location: outfiles/liste_departements.php');
?>