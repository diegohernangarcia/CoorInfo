<?php
	//require("../fpdf17/code39.php");
        require("../fpdf17/fpdf.php");
	$codigo=$_SESSION["datos_codigo_barras"];
	session_destroy();
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->Image('test.png',10,8,40);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(80,80,$codigo);
	$pdf->Output();
?>
