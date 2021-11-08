<?php
/**
 * Liste des salariés par services en PDF
 */
require_once "init.php";
require_once "fpdf/fpdf.php";

// Crée le tableau d'objets métier "service"
$services=array();
$dao = new ServiceDAO();
$services = $dao->findAll();

// Instanciation de l'objet dérivé
$pdf = new MON_PDF();

// Metadonnées
$pdf->SetTitle('Exemple pdf', true);
$pdf->SetAuthor('J.F. Ramiara', true);
$pdf->SetSubject('Liste des salariés par service', true);
$pdf->mon_fichier="salaries_services.pdf";

// Création d'une page
$pdf->AddPage();

// Définit l'alias du nombre de pages {nb}
$pdf->AliasNbPages();

// Titre de page
$pdf->SetFont('Arial', '', 24);
$pdf->SetTextColor(0, 51, 255); // Bleu  #0033FF
$pdf->Cell(0, 20, utf8_decode("Liste des salariés par service"), 0, 1, 'C');
$pdf->Ln(8);

// Boucle des lignes
$pdf->SetFont('Arial', '', 12);
$pdf->SetTextColor(0, 0, 0); // Noir

// service
foreach ($services as $service) {
    $pdf->SetFont('', 'B');
    $pdf->SetX(20);
    $chaine = "Service : ".$service->get_libelle();
    $pdf->Cell(0,10, utf8_decode($chaine),"",1,"L");
    // Salarié(s) de ce service
    $pdf->SetFont('', '');
    foreach ($service->get_salaries() as $salarie){
      $pdf->SetX(30);
      $pdf->Cell(0,5, chr(149)." ".utf8_decode($salarie->lib_salarie()),0,1,"L"); // chr(149) = puce !
    }
    $pdf->Ln(2);
    $pdf->SetX(20);
    $chaine = "Il y a ".count($service->get_salaries())." salarié(s) dans le service ".$service->get_libelle();
    $pdf->Cell(0,5, utf8_decode($chaine),0,1,"L");
    $pdf->Ln(2);
}

// Nb de services
$pdf->Ln(4);
$nb = count($services);
$pdf->SetFont('', '');
$pdf->SetX(20);
$pdf->Cell(0, 5, utf8_decode($nb . ' service(s)'), 0, 1);

// Génération du document PDF
$pdf->Output('f','outfiles/'.$pdf->mon_fichier);
header('Location: liste_salaries_services.php');
