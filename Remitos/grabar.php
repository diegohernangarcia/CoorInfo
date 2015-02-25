<?php 
    $incidente=$_POST["incidente"];
    $queequipo=$_POST["queequipo"];
    $usuario=$_POST["usuario"];
    $fecha=date("j/m/Y");
    $observaciones=$_POST["observaciones"];
    $tecnico=$_POST["tecnico"];
    $usuario=strtoupper($usuario);
    $observaciones=strtoupper($observaciones);
    $tecnico=strtoupper($tecnico);
    $rest = substr($observaciones, 0,60); 
    /*echo ("INCIDENTE ".$incidente."<br>");
    echo("EQUIPO ".$queequipo."<br>");
    echo("USUARIO ".$usuario."<br>");
    echo("FECHA ".$fecha."<br>");
    echo("OBSERVACIONES ".$observaciones."<br>");
    echo("TECNICO ".$tecnico."<br>");*/
    require("../BD/UsarGestion.php");
    $consulta="INSERT INTO remitoingreso (equipo,solicitante,fechaingreso,descripcion,tecnico,estado,incidente) VALUES ";
    $consulta.=" ('".$queequipo."', '".$usuario."','".$fecha."', '".$observaciones."' , '".$tecnico."', 'ABIERTO', ".$incidente.");";
   // echo ($consulta);
    $hacerconsulta=mysql_query($consulta,$manejador);
    $numeroerror=mysql_errno();
    $descripcionerror=mysql_error();
    if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		//include("../mensajes/marcaOK.php");
    require("../BD/BDRemito.php");	 	}
    NuevoRegistro($Cualid);
    //echo ($Cualid);
    
    
    require("fpdf/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    //$pdf->Image("../images/logo.jpg",1,1,"jpg");
    $pdf->SetTextColor(255);
    $pdf->SetFillColor(123);
    $pdf->Cell(180,10,'EQUIPO A REPARAR',1,1,'C',TRUE);
    $pdf->Cell(180,75,'',1,1,'C',FALSE);
    $pdf-> SetX(30);
    $pdf->SetY(20);
    $pdf->SetTextColor(0);
    $pdf->Cell(40,10,'Incidente Nro '.$incidente);
    $pdf-> SetX(30);
    $pdf->SetY(20);
    $pdf->Cell(40,25,'Usuario '.$usuario);
    $pdf-> SetX(30);
    $pdf->SetY(20);
    $pdf->Cell(40,40,'Fecha Ingreso '.$fecha);
    $pdf-> SetX(30);
    $pdf->SetY(20);
    $pdf->Cell(40,55,'Descripcion ');
    $pdf-> SetX(30);
    $pdf->SetY(52);
    $pdf->Cell(180,20,$rest,1,1,'',true);
    $pdf-> SetX(30);
    $pdf->SetY(60);
    $pdf->Cell(40,40,'Encargado '.$tecnico);
    $pdf-> SetX(30);
    $pdf->SetY(85);
    $pdf->Cell(180,10,'Id Incidente '.$Cualid,1,1,'C',TRUE);
    

   // $pdf->Output();
    $pdf->Output("Ingreso.pdf","D");
    include("indexremito.php");
?>
