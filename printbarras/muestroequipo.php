<?php
   include("../BD/BDAreas.php");
   include("../BD/BDMotherboard.php");
   include("../BD/BDCD.php");
   include("../BD/BDCpu.php");
   include("../BD/BDHd.php");
   include("../BD/BDMonitor.php");
   include("../BD/BDMemoria.php");	
   include("../BD/BDRangos.php");
   include("../BD/BDSistemaOperativo.php");
   include("../BD/BDImpresoras.php");
   $cual=$area-1;
   DevuelvoDescripcionArea($cual,$NombreArea);
   DevuelvoDescripcionRango2($rango,$Rango);
   DevuelvoDescripcionSistemaOperativo2($so,$SistemaOperativo);
   DevuelvoFullCPU($cpu,$Micro);
   DevuelvoFullMotherboard($mother,$Motherboard);
   DevuelvoFullCDDVD($cd,$CD);
   DevuelvoDescripcionMemoria2($memoria,$Memoria);
   DevuelvoFullHD($disco,$HD);
   DevuelvoMonitor($monitor,$Monitor);
   TieneImpresoraLocal($rango,$ip,$tieneimpresora);
   
   
   ?>
   <center><TABLE BORDER="3" CELLSPACING="2" WIDTH="1200"> 
	
	<TR BGCOLOR="#6D8FFF"> 
	<TD> <?php echo ("Area ".$NombreArea) ?></TD>
	<TD><?php echo("Oficina ".$oficina);?></TD>
	<TD><?php echo("Interno ".$interno);?></TD>
	<TD><?php echo("IP ".$Rango.$ip);?></TD>
	</TR>
	<tr>
	<TD><?php echo("Usuario ".$usuario);?></TD> 
	<TD><?php echo("Sistema Operativo ".$SistemaOperativo);?></TD>
	<TD><?php echo("Microprocesador ".$Micro);?></TD>
	<TD><?php echo("Motherboard ".$Motherboard);?></TD>  
	
	</TR>
	<tr BGCOLOR="#6D8FFF">
	<TD><?php echo("Lectora CD/DVD ".$CD);?></TD> 
	<TD><?php echo("Memoria ".$Memoria);?></TD>
	<TD><?php echo("Disco Duro ".$HD);?></TD>
	<TD><?php echo("Monitor ".$Monitor." Serial ". $serie)?></TD>  
	
	</TR>
	</TABLE> </center>
        
        <?php
        $qr=$NombreArea."\nOficina ".$oficina."\nInterno ".$interno." \nIP".$Rango.$ip."\nUsuario ".$usuario;
	$qr.="\nS. O.".$SistemaOperativo."\n".$Micro."\n".$Motherboard;
	$qr.="\nCD-DVD ".$CD."\n".$Memoria." RAM \n".$HD."\nMonitor ".$Monitor;
	$qr.="\nNº Serie ".$serie;
        // GENERAR CODIGO QRcode
	 include ("../qr/qrlib.php");
	//html PNG location prefix
 	//$PNG_WEB_DIR = "";
 	//$qr="Coordinacion Informatica";
 	//QRcode::png('PHP QR Code :)', 'test.png', 'L', 8, 2);
 	QRcode::png($qr, '../altas/test.png', 'L', 6, 2);

 	//display generated file
 	//$filename="test.png";
 	//echo '<center><img src="test.png" /> </center>';
 	//echo("<br><br>");
 	//include("../BD/BDEquipo.php");
 	//NuevoRegistro($ultimoid);
 	$ultimoid=$id;
 	
 	// GENERAMOS LA SESION
 	// home.php
 	//$ultimoid++;
 	//echo($ultimoid);
 	$envio=$ultimoid." -- ".$usuario;
 	
	session_start();
	if (!isset($_SESSION["datos_codigo_barras"])) {
    		$_SESSION["datos_codigo_barras"] = $envio; 
	}
	
        
        
        
        
        
        if ($tieneimpresora==1) {
            //echo ("Posee impresora usb");
            //require("UsarGestion.php");
            $consultaPrinter="SELECT * FROM impresoralocal WHERE ip='".$ip."' AND rango='".$rango."'";
            //echo ($consulta);
            $hacerconsultaPrinter=mysql_query($consultaPrinter,$manejador);
            $numeroerror=mysql_errno();
            $descripcionerror=mysql_error();
            if ($numeroerror!=0) {
		echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
            $queimpresora=mysql_result ($hacerconsultaPrinter,0,"queimpresora");
            DevuelvoDescripcionImpresoraPorModelo($queimpresora,$impresorainstalada);
            echo("<h4>Impresora Instalada en el equipo de forma local ".$impresorainstalada."</h4>");
            
            
            
            
        } else {
            echo ("<h4>NO Posee impresora USB conectada al equipo de forma local</h4>");
        }
            
        
        ?>
        
   	<link href="../Metro/css/modern.css" rel="stylesheet">
	<div class="message-dialog bg-color-green fg-color-white">
            <p>Imprimir Etiquetas</p>
	    <button class="place-right" onClick="location.href='../printbarras/barcode.php'">Imprimir Etiquetas</button>
            <button class="place-right" onclick='history.back()'">Volver atras</button>
            
            
        </div>
	
        
        
	
	
</body>
   
   
