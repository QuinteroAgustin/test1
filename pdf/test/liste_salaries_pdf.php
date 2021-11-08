<?php
/**
 * Liste des salariés en PDF
 */
require_once "init.php";
require_once "fpdf/fpdf.php";

// Crée le tableau d'objets métier "salarié"
$salaries=array();
$dao = new SalarieDAO();
$salaries = $dao->findAll();

// Instanciation de l'objet dérivé
$pdf = new MON_PDF();

// Metadonnées
$pdf->SetTitle('Exemple pdf ', true);
$pdf->SetAuthor('J.F. Ramiara', true);
$pdf->SetSubject('Liste des salariés', true);
$pdf->mon_fichier="salaries.pdf";

// Création d'une page
$pdf->AddPage();

// Définit l'alias du nombre de pages {nb}
$pdf->AliasNbPages();

// Titre de page
$pdf->SetFont('Times', '', 24);
$pdf->SetTextColor(0, 51, 255); // Bleu  #0033FF
$pdf->Cell(0, 20, utf8_decode("Liste des salariés"), 0, 1, 'C');
$pdf->Ln(8);

// Boucle des lignes
$pdf->SetFont('Times', '', 12);
$pdf->SetTextColor(0, 0, 0); // Noir
// Entête
$pdf->SetFont('', 'B');
$pdf->SetX(20);
$pdf->SetFillColor(211,211,211);
$pdf->Cell(20, 5, utf8_decode("ID"), 1,0,"C",true);
$pdf->Cell(20, 5, utf8_decode("Matricule"), 1,0,"C",true);
$pdf->Cell(30, 5, utf8_decode("Nom"), 1,0,"C",true);
$pdf->Cell(30, 5, utf8_decode("Prénom"), 1,0,"C",true);
$pdf->Cell(25, 5, utf8_decode("ID service"), 1,1,"C",true);
// Salarié
foreach ($salaries as $salarie) {
    $pdf->SetFont('', '');
    $pdf->SetX(20);
    $pdf->Cell(20, 5, utf8_decode($salarie->get_id()),1,0,"C");
    $pdf->Cell(20, 5, utf8_decode($salarie->get_matricule()),1,0,"C");
    $pdf->Cell(30, 5, utf8_decode($salarie->get_nom()),1,0,"C");
    $pdf->Cell(30, 5, utf8_decode($salarie->get_prenom()),1,0,"C");
    $pdf->Cell(25, 5, utf8_decode($salarie->get_id_service()),1, 1,"C");
}

// Nb de salariés
$pdf->Ln(8);
$nb = count($salaries);
$pdf->SetFont('', '');
$pdf->SetX(20);
$pdf->Cell(0, 5, utf8_decode($nb . ' salarie(s)'), 0, 1);

// Génération du document PDF
$pdf->Output('f','outfiles/'.$pdf->mon_fichier);
header('Location: liste_salaries.php');
