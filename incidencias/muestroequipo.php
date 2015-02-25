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
   $Cualid=$id;
   
   
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
            
        session_start();
	//if (!isset($_SESSION["CualId"])) {
    		$_SESSION["CualId"] = $Cualid; 
	//}
        ?>
        
   	<link href="../Metro/css/modern.css" rel="stylesheet">
	<div class="message-dialog bg-color-green fg-color-white">
            <p>Es el equipo correcto?</p>
	    <button class="place-right" onClick="location.href='nuevaincidencia3.php'">Continuar</button>
            <button class="place-right" onclick='history.back()'">Volver atras</button>
            
            
        </div>
	
        
        
	
	
</body>
   
   
