<?php
	include("../barcode93/func.php");
	 // RECUPERO VALOR SESION
    	session_start();
    		// $code     ="1 -- dgarcia";
	$code=$_SESSION["datos_codigo_barras"];
	session_destroy();
	// -------------------------------------------------- //
  	//            ALLOCATE FPDF RESSOURCE
	// -------------------------------------------------- //
	$pdf = new eFPDF('P', 'pt');
	$pdf->AddPage();
	// -------------------------------------------------- //
	//                      BARCODE
	// -------------------------------------------------- //
	$data = Barcode::fpdf($pdf, $black, $x, $y, $angle, $type, array('code'=>$code), $width, $height);
	// -------------------------------------------------- //
	//                      HRI
	// -------------------------------------------------- //

	$pdf->SetFont('Arial','B',$fontSize);
	$pdf->SetTextColor(0, 0, 0);
	$len = $pdf->GetStringWidth($data['hri']);
	Barcode::rotate(-$len / 2, ($data['height'] / 2) + $fontSize + $marge, $angle, $xt, $yt);
	$pdf->TextWithRotation($x + $xt, $y + $yt, $data['hri'], $angle);
	$pdf->Image('test.png',10,8,100);
	$pdf->Output();
?>
