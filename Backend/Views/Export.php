<?php
//include connection file
include_once("../config.php");
include_once('fpdf/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Liste des Livraisons',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$connString = new config();
$display_heading = array('id'=>'id', 'nom'=> 'nom', 'frais'=> 'frais','tel'=> 'tel',);
 
$requete = "select id, nom, frais, tel from livraison";
            $config = config::getConnexion();
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
$requete1="show columns from livraison";
$querry1 = $config->prepare($requete1);
                $querry1->execute();
                $header = $querry1->fetchAll();
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
foreach($header as $heading) {
$pdf->Cell(40,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,1);
}
$pdf->Output();
?>