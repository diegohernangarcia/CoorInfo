<?php
   include("../../BD/BDAreas.php");
   include("../../BD/BDMotherboard.php");
   include("../../BD/BDCD.php");
   include("../../BD/BDCpu.php");
   include("../../BD/BDHd.php");
   include("../../BD/BDMonitor.php");
   include("../../BD/BDMemoria.php");	
   include("../../BD/BDRangos.php");
   include("../../BD/BDSistemaOperativo.php");
   include("../../BD/BDImpresoras.php");
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
	<TD> <?php echo ("Area ".$NombreArea) ?> </td>
            <td><button class="place-center" onClick="window.open('modificararea.php','Error','width=400, height=250, top=200, left= 200,toolbar=no,location=no,status=no,menubar=no');  "target="_blank">Modificar</button>
        </TD>
	<TD><?php echo("Oficina ".$oficina);?> </td>
            <td><button class="place-center" onClick="window.open('modificaroficina.php','Error','width=400, top=200, left= 200 ,height=250, toolbar=0, directories=0');  "target="_blank">Modificar</button>
        </TD>
	<TD><?php echo("Interno ".$interno);?> </td>
            <td><button class="place-center" onClick="window.open('modificarinterno.php','Error','width=400, height=250, toolbar=0, directories=0, top=200, left= 200');  "target="_blank">Modificar</button>
        </TD>
	<TD><?php echo("IP ".$Rango.$ip);?> </td>
            <td><button class="place-center" onClick="window.open('modificarip.php','Error','width=400, height=370, toolbar=0, directories=0, top=200, left= 200');  "target="_blank">Modificar</button>
        </TD>
        
	</TR>
	<tr>
	<TD><?php echo("Usuario ".$usuario);?> </td>
            <td><button class="place-center" onClick="window.open('modificarusuario.php','Error','width=400, height=350, toolbar=0, directories=0, top=200, left= 200');  "target="_blank">Modificar</button>
        </TD> 
	<TD><?php echo("Sistema Operativo ".$SistemaOperativo);?> </td>
            <td><button class="place-center" onClick="window.open('modificarSO.php','Error','width=400, height=250, toolbar=0, directories=0, top=200, left= 200');  "target="_blank">Modificar</button>
        </TD>
	<TD><?php echo("Microprocesador ".$Micro);?> </td>
            <td><button class="place-center" onClick="window.open('modificarcpu.php','Error','width=600, height=250, toolbar=0, directories=0, top=200, left= 200');  "target="_blank">Modificar</button>
        </TD>
	<TD><?php echo("Motherboard ".$Motherboard);?> </td>
            <td><button class="place-center" onClick="window.open('modificarmotherboard.php','Error','width=400, height=250, toolbar=0, directories=0, top=200, left= 200');  "target="_blank">Modificar</button>
        </TD>  
	
	</TR>
	<tr BGCOLOR="#6D8FFF">
	<TD><?php echo("Lectora CD/DVD ".$CD);?> </td>
            <td><button class="place-center" onClick="window.open('modificarlectora.php','Error','width=400, height=250, toolbar=0, directories=0, top=200, left= 200');  "target="_blank">Modificar</button>
        </TD> 
	<TD><?php echo("Memoria ".$Memoria);?> </td>
            <td><button class="place-center" onClick="window.open('modificarmemoria.php','Error','width=400, height=250, toolbar=0, directories=0, top=200, left= 200');  "target="_blank">Modificar</button>
        </TD>
	<TD><?php echo("Disco Duro ".$HD);?></td>
            <td><button class="place-center" onClick="window.open('modificardisco.php','Error','width=400, height=250, toolbar=0, directories=0, top=200, left= 200');  "target="_blank">Modificar</button>
        </TD>
	<TD><?php echo("Monitor ".$Monitor." Serial ". $serie)?> </td>
            <td><button class="place-center" onClick="window.open('modificarmonitor.php','Error','width=400, height=400, toolbar=0, directories=0, top=200, left= 200');  "target="_blank">Modificar</button>
        </TD>  
	
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
        
   	<link href="../../Metro/css/modern.css" rel="stylesheet">
	<center>
            <div class="page-header">
                <div class="page-header-content">
                     <h1>Atras</h1>
                    <a href="nuevaequipo1.php" class="back-button big page-back"></a>
                </div>
            </div>
        </center> 
        
	
	
</body>
   
   
