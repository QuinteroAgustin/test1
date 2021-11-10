<?php
/**
 * po26c : pdf create
 */
require_once "init.php";
// Crée le tableau d'objets métier "Departement"
$dao = new PaysDAO(); 
$pays = $dao->findAll();

// Instanciation de l'objet FDPF
$pdf = new mpdf();

// Metadonnées
$pdf->SetTitle('Pays ', true);
$pdf->SetAuthor('A. Quintero', true);
$pdf->SetSubject('Liste des pays', true);
$pdf->mon_fichier="pays.pdf";

// Création d'une page
$pdf->AddPage();

// Définit l'alias du nombre de pages {nb}
$pdf->AliasNbPages();

// Titre de page
$pdf->SetFont('Times', '', 24);
$pdf->SetTextColor(0, 51, 255); // Bleu  #0033FF
$pdf->Cell(0, 20, utf8_decode("Liste des Pays"), 0, 1, 'C');
$pdf->Ln(8);

// Boucle des lignes
$pdf->SetFont('Times', '', 12);
$pdf->SetTextColor(0, 0, 0); // Noir
// Entête
$pdf->SetFont('', 'B');
$pdf->SetX(10);
$pdf->SetFillColor(211,211,211);
$pdf->Cell(10, 5, utf8_decode("ID"), 1,0,"C",true);
$pdf->Cell(70, 5, utf8_decode("Nom"), 1,0,"C",true);
$pdf->Cell(10, 5, utf8_decode("Code"), 1,0,"C",true);
$pdf->Cell(15, 5, utf8_decode("Alpha2"), 1,0,"C",true);
$pdf->Cell(15, 5, utf8_decode("Alpha3"), 1,0,"C",true);
$pdf->Cell(70, 5, utf8_decode("Nom(EN)"), 1,1,"C",true);
// Salarié
$fill=false;
$pdf->SetFillColor(224,235,255);
foreach ($pays as $val) {
    $pdf->SetFont('', '', 10);
    $pdf->SetX(10);
    $pdf->Cell(10, 5, utf8_decode($val->get_id_pays()),1,0,"C", $fill);
    $pdf->Cell(70, 5, utf8_decode($val->get_nom_fr()),1,0,"C", $fill);
    $pdf->Cell(10, 5, utf8_decode($val->get_code()),1,0,"C", $fill);
    $pdf->Cell(15, 5, utf8_decode($val->get_alpha2()),1,0,"C", $fill);
    $pdf->Cell(15, 5, utf8_decode($val->get_alpha3()),1,0,"C", $fill);
    $pdf->Cell(70, 5, utf8_decode($val->get_nom_en()),1,1,"C", $fill);
    $fill=!$fill;
}

// Nb de salariés
$pdf->Ln(8);
$nb = count($pays);
$pdf->SetFont('', '');
$pdf->SetX(20);
$pdf->Cell(0, 5, chr(149) . ' ' .utf8_decode($nb . ' pays'), 0, 1);

// Génération du document PDF
$pdf->Output('f','outfiles/'.$pdf->mon_fichier);
header('Location: liste_pays.php');
?>
