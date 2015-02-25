<?php
    // PARAMETRIZO DATOS DE LA BASE
    include("../BD/BDImpresoras.php");
    include("../BD/BDRangos.php");
    include("../BD/BDAreas.php");
    $areaseleccionada=$_POST["quearea"];
    $oficina=$_POST["oficina"];
    $serialimpresora=$_POST["serialimpresora"];
    $rango=$_POST["rango"];
    $ip=$_POST["ip"];
    $marcaimpresora=$_POST["marcaimpresora"];
    $modeloimpresora=$_POST["modeloimpresora"];
    DevuelvoIdImpresora($marcaimpresora,$modeloimpresora,$queimpresora);
    DevuelvoDescripcionImpresora($queimpresora,$marcaymodeloimpresora);
    DevuelvoIdRangos($rango,$querango);
    DevuelvoIdArea($areaseleccionada,$quearea);
    // FIN PARAMETRIZO DATOS DE LA BASE
    
    // MUESTRO DATOS EN UNA TABLA
    ?>
    <center><TABLE BORDER="3" CELLSPACING="2" WIDTH="1200"> 
	
	<TR BGCOLOR="#6D8FFF"> 
	<TD> <?php echo ("Area :".$quearea." ".$areaseleccionada) ?></TD>
	<TD><?php echo("Oficina :".$oficina);?></TD>
	</TR>
	<tr>
	<TD><?php echo("Impresora :".$queimpresora." ".$marcaymodeloimpresora);?></TD> 
	<TD><?php echo("Serial Impresora :".$serialimpresora);?></TD>
	</TR>
	<tr BGCOLOR="#6D8FFF">
	<TD><?php echo("Ip :".$querango." ".$rango." ".$ip);?></TD> 
	<TD><?php echo("");?></TD>
	</TR>
	</TABLE> </center>
    <?PHP
    // GENERACION CODIGO DE BARRAS Y QR
    $qr="Red ".$marcaymodeloimpresora."\nArea ".$areaseleccionada."\nOficina ".$oficina."\nSerial ".$serialimpresora."\nIp Conectada ".$rango."".$ip;

	 include ("../qr/qrlib.php");
	//html PNG location prefix
 	//$PNG_WEB_DIR = "";
 	//$qr="Coordinacion Informatica";
 	//QRcode::png('PHP QR Code :)', 'test.png', 'L', 8, 2);
 	QRcode::png($qr, 'test.png', 'L', 6, 2);

 	//display generated file
 	//$filename="test.png";
 	//echo '<center><img src="test.png" /> </center>';
 	//echo("<br><br>");
 	NuevoRegistroImpresoraRed($ultimoid);
 	
 	
 	// GENERAMOS LA SESION
 	// home.php
 	$ultimoid++;
 	//echo($ultimoid);
 	$envio=$ultimoid." -- R ".$rango."".$ip;
 	session_start();
        session_destroy();
        session_start();
	if (!isset($_SESSION["datos_codigo_barras"])) {
    		$_SESSION["datos_codigo_barras"] = $envio; 
	}
        AgregarImpresoraRed($quearea,$oficina,$queimpresora,$serialimpresora,$querango,$ip);
	
        
        
        
        
    
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<center>
<!-- <a href="barcode.php"><img src="../images/qr.jpg" alt="Generar Codigos Barra" WIDTH="xxx" HEIGHT="xxx" border="0"></a>  -->
</center>

