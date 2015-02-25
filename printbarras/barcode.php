<?php
	require("../fpdf17/code39.php");
	// RECUPERO VALOR SESION
	session_start();
	$codigo=$_SESSION["datos_codigo_barras"];
	session_destroy();
	$pdf=new PDF_Code39();
	$pdf->AddPage();
	//$pdf->Code39(80,10,$codigo,1,10);
	$pdf->Image('../altas/test.png',10,8,40);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(80,80,$codigo);
	$pdf->Output();
   
    
?>
