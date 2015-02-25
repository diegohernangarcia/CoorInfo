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

	$areaseleccionada=$_POST["quearea"];
	$oficina=$_POST["oficina"];
	$interno=$_POST["interno"];
	$rango=$_POST["rango"];
	$ip=$_POST["ip"];
	$usuario=$_POST["usuario"];
	$sistemaoperativo=$_POST["sistemaoperativo"];
	$marcacpu=$_POST["marcacpu"];
	$modelocpu=$_POST["modelocpu"];
	$marcamotherboard=$_POST["marcamotherboard"];
	$modelomotherboard=$_POST["modelomotherboard"];
	$memoria=$_POST["memoria"];
	$marcahd=$_POST["marcahd"];
	$modelohd=$_POST["modelohd"];
	$marcacd=$_POST["marcacd"];
	DevuelvoDescripcionMarcaCd($marcacd,$MarcaCD);
	$modelocd=$_POST["modelocd"];
    	DevuelvoDescripcionModeloCd($modelocd,$marcacd,$ModeloCD);
		
	  	
	
	$marcamonitor=$_POST["marcamonitor"];
	$modelomonitor=$_POST["modelomonitor"];
	$serialmonitor=$_POST["serialmonitor"];
	$memoria=$_POST["memoria"];
	DevuelvoDescripcionArea($areaseleccionada,$NombreArea);
	DevuelvoDescripcionMarcaMotherboard($marcamotherboard,$MarcaMotherboard);
	DevuelvoDescripcionModeloMother($modelomotherboard,$marcamotherboard,$ModeloMotherboard);
	DevuelvoDescripcionMarcaCPU($marcacpu,$MarcaCpu);
	DevuelvoDescripcionModeloCPU($modelocpu,$marcacpu,$ModeloCpu);
	DevuelvoDescripcionMarcahd($marcahd,$MarcaHD);
	DevuelvoDescripcionModelohd($modelohd,$marcahd,$ModeloHd);
	DevuelvoDescripcionMarcaMonitor($marcamonitor,$MarcaMonitor);
	DevuelvoDescripcionModeloMonitor($modelomonitor,$marcamonitor,$ModeloMonitor);
	DevuelvoDescripcionMemoria($memoria,$Memoria);
	DevuelvoDescripcionRango($rango,$Rango);
	DevuelvoDescripcionSistemaOperativo($sistemaoperativo,$SistemaOperativo);
		
/*	echo ("Area ".$areaseleccionada." ".$NombreArea."<br>");
	echo("Oficina ".$oficina."<br>");
	echo("Interno ".$interno."<br>");
	echo("IP ".$Rango.$ip."<br>");
	echo("Usuario ".$usuario."<br>");
	echo("Sistema Operativo ".$SistemaOperativo."<br>");
	echo("Microprocesador ".$MarcaCpu." ".$ModeloCpu."<BR>");
	echo("Motherboard ".$MarcaMotherboard." ".$ModeloMotherboard."<BR>");
	echo("Lectora CD/DVD ".$MarcaCD." ".$ModeloCD."<br>");
	echo("Memoria ".$Memoria."<br>");
	echo("Disco Duro ".$MarcaHD." ".$ModeloHd."<br>");
	echo("Monitor ".$MarcaMonitor." ".$ModeloMonitor." Serial ". $serialmonitor."<br>"); */
	
	
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
	<TD><?php echo("Microprocesador ".$MarcaCpu." ".$ModeloCpu);?></TD>
	<TD><?php echo("Motherboard ".$MarcaMotherboard." ".$ModeloMotherboard);?></TD>  
	
	</TR>
	<tr BGCOLOR="#6D8FFF">
	<TD><?php echo("Lectora CD/DVD ".$MarcaCD." ".$ModeloCD);?></TD> 
	<TD><?php echo("Memoria ".$Memoria);?></TD>
	<TD><?php echo("Disco Duro ".$MarcaHD." ".$ModeloHd);?></TD>
	<TD><?php echo("Monitor ".$MarcaMonitor." ".$ModeloMonitor." Serial ". $serialmonitor)?></TD>  
	
	</TR>
	</TABLE> </center>


	
<?php	
	$qr=$NombreArea."\nOficina ".$oficina."\nInterno ".$interno." \nIP".$Rango.$ip."\nUsuario ".$usuario;
	$qr.="\nS. O.".$SistemaOperativo."\n".$MarcaCpu." ".$ModeloCpu."\n".$MarcaMotherboard." ".$ModeloMotherboard;
	$qr.="\nCD-DVD ".$MarcaCD." ".$ModeloCD."\n".$Memoria." RAM \n".$MarcaHD." ".$ModeloHd."\nMonitor ".$MarcaMonitor." ".$ModeloMonitor;
	$qr.="\nNº Serie ".$serialmonitor;
// GENERAR CODIGO QRcode
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
 	include("../BD/BDEquipo.php");
 	NuevoRegistro($ultimoid);
 	
 	
 	// GENERAMOS LA SESION
 	// home.php
 	$ultimoid++;
 	//echo($ultimoid);
 	$envio=$ultimoid." -- ".$usuario;
 	
	session_start();
	if (!isset($_SESSION["datos_codigo_barras"])) {
    		$_SESSION["datos_codigo_barras"] = $envio; 
	}
	
	// PRUEBA LOS ID QUE DEVUELVE
	DevuelvoIdArea($NombreArea,$IdArea);
	//echo("Id Area ".$IdArea."<br>");
	DevuelvoIdMarcaCd($MarcaCD,$IdMarcaCD);
	//echo("Id Marca CD ".$IdMarcaCD."<br>");
	DevuelvoIdModeloCd($IdMarcaCD,$ModeloCD,$IdModeloCD);
	//echo("Id Modelo CD ".$IdModeloCD."<br>");
	DevuelvoIdMarcaCPU($MarcaCpu,$IdMarcaCPU);
	//echo("Id Marca CPU ".$IdMarcaCPU."<br>");
	DevuelvoIdModeloCPU($IdMarcaCPU,$ModeloCpu,$IdModeloCPU);
	//echo("Id Modelo CPU ".$IdModeloCPU."<br>");
	DevuelvoIdMarcaMotherboard($MarcaMotherboard,$IdMarcaMotherboard);
	//echo("Id Marca Motherboard ".$IdMarcaMotherboard."<br>");
	DevuelvoIdModeloMotherboard($IdMarcaMotherboard,$ModeloMotherboard,$IdModeloMotherboard);
	//echo ("Id Modelo Motherboard ".$IdModeloMotherboard."<br>");
	DevuelvoIdMarcaHD($MarcaHD,$IdMarcaHD);
	//echo("Id Marca HD ".$IdMarcaHD."<br>");
	DevuelvoIdModeloHD($IdMarcaHD,$ModeloHd,$IdModeloHD);
	//echo("Id Modelo HD ".$IdModeloHD."<br>");
	DevuelvoIdMarcaMonitor($MarcaMonitor,$IdMarcaMonitor);
	//echo("Id Marca Monitor ".$IdMarcaMonitor."<br>");
	DevuelvoIdModeloMonitor($IdMarcaMonitor,$ModeloMonitor,$IdModeloMonitor);
	//echo("Id Modelo Monitor ".$IdModeloMonitor."<br>");
	DevuelvoIdRangos($Rango,$IdRango);
	//echo("Id Rango ".$IdRango."<br>");
	DevuelvoIdSistemaOperativo($SistemaOperativo,$IdSistemaOperativo);
	//echo("Id S.O. ".$IdSistemaOperativo."<br>");
	DevuelvoIdMemoria($Memoria,$IdMemoria);
	//echo("Id Memoria ".$IdMemoria."<br>");
	Estaip($IdRango,$ip,$estaip);
	//Estaipimpresorared($IdRango,$ip,$estaipimpresora);
	//echo ("Esta esa ip 0 no - 1 si -->".$estaip."<br>");
	Estausuario($usuario,$estausuario);
	//echo ("Esta ese usuario 0 no - 1 si -->".$estausuario."<br>");
	//include("../mensajes/usuarioexiste.php");
	//AgregarEquipo($IdArea,$oficina,$interno,$IdRango,$ip,$usuario,$IdSistemaOperativo,$IdModeloCPU,$IdModeloMotherboard,$IdMemoria,$IdModeloHD,$IdModeloCD,$IdModeloMonitor,$serialmonitor);
	//session_start();
	if (!isset($_SESSION["yaesta"])) {
    		$_SESSION["yaesta"] = $rango.".".$ip; 
	}
        //session_start();
	if (!isset($_SESSION["yaestausuario"])) {
    		$_SESSION["yaestausuario"] = $usuario; 
	}
        
        if ($estaip==1) {
		include ("../mensajes/ipexiste.php");
		}
	if ($estausuario==1) {
		include("../mensajes/usuarioexiste.php");
		}
	/*if ($estaipimpresora==1) {
		include("../mensajes/impresoraredmismaip.php");
		}
	*/
	if (($estaip!=1) && ($estausuario!=1) ) {
		AgregarEquipo($IdArea,$oficina,$interno,$IdRango,$ip,$usuario,$IdSistemaOperativo,$IdModeloCPU,$IdModeloMotherboard,$IdMemoria,$IdModeloHD,$IdModeloCD,$IdModeloMonitor,$serialmonitor);
	}
	
	
	
	
	
?>
<center>

	


