<?php
	require("../fpdf17/code39.php");
	// RECUPERO VALOR SESION
	session_start();
	$codigo=$_SESSION["datos_codigo_barras"];
	session_destroy();
	$pdf=new PDF_Code39();
	$pdf->AddPage();
	$pdf->Code39(80,10,$codigo,1,10);
	$pdf->Image('test.png',10,8,40);
	$pdf->Output();
   
    
?>
