 <head>
        <title>Coordinacion Informatica - Consulta Equipo</title>
        <link href="../Metro/css/modern.css" rel="stylesheet">
    </head>
<center><img src="../images/logo.jpg" width="750" height="80" alt="LOGO MINISTERIO" align="middle"></center>
<br>

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
            echo("<center><h4>Impresora Instalada en el equipo de forma local ".$impresorainstalada."</h4></center>");
            
            
            
            
        } else {
            echo ("<center><h4>NO Posee impresora USB conectada al equipo de forma local</h4></center>");
        }

        require ("../BD/UsarGestion.php");
        require ("../BD/BDIncidente.php");
		// Creo la consulta
		$consulta="SELECT * FROM tracking WHERE idequipo='".$Cualid."'";
		// Se Ejecuta La Consulta
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		//Obtiene Cantidad Registros de la Consulta
		$numeroderegistros= mysql_num_rows($hacerconsulta);
		// Se crea un bucle que recorrera el cursor obtenido
		//$Arreglo=Array();
		//$arreglo[0]="Seleccione";
                ?>
                <center> <h3> Incidentes PC</h3></center>
                <center><TABLE BORDER="3" CELLSPACING="2" WIDTH="1200"> 
                
                <?php
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$idIncidente=mysql_result($hacerconsulta,$contador,"idincidente");
                        DevuelvoDescripcionIncidente($idIncidente-1,$incidente);
                        $fecha=  mysql_result($hacerconsulta,$contador, "fecha");
                        $tecnico=  mysql_result($hacerconsulta,$contador, "tecnico");
                        $solucion=  mysql_result($hacerconsulta,$contador, "solucion");
			
                        ?>
                        <TR BGCOLOR="#6D8FFF"> 
                            <TD><?php echo($contador+1);?></TD>
                            <TD><?php echo("Tecnico ".$tecnico);?></TD>
                            <TD><?php echo("Fecha ".$fecha);?></TD>
                            <TD><?php echo("Tipo Incidente ".$incidente);?></TD>
                        </TR>
                        <tr>
                        <TD colspan="4"><?php echo("Observaciones ".$solucion);?></TD> 
                        <?php
                }
                ?></TABLE> </center> <?php 
        
?>
        
   	
	
        
        
<center>
        <h1><small>Atras</small></h1>
                <a href="../altas/indexaltas.php" class="back-button big page-back"></a>
    </center>	
	
</body>
   
   
