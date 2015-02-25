<?php
    include("../BD/BDIncidente.php");
   $incidente=$_POST["incidente"];
   DevuelvoDescripcionIncidente($incidente, $cualincidente);
   $tecnico=$_POST["tecnico"];
   $fecha=  date("j/m/Y");
   $observaciones=$_POST["observaciones"];
   $base="EQUIPO";
    session_start();
    $codigo=$_SESSION["CualId"];
   // session_destroy();
   //echo("ID ".$codigo. " <br> incidente ".$incidente."<br> tecnico ".$tecnico."<br> fecha ".$fecha." <br> Observaciones ".$observaciones."<br> Base ".$base);
   ?>
    <center><TABLE BORDER="3" CELLSPACING="2" WIDTH="1200"> 
        <TR BGCOLOR="#6D8FFF"> 
	<TD><?php echo("Tecnico ".$tecnico);?></TD>
	<TD><?php echo("Fecha ".$fecha);?></TD>
        <TD><?php echo("Tipo Incidente ".$cualincidente);?></TD>
	</TR>
	<tr>
	<TD colspan="3"><?php echo("Observaciones ".$observaciones);?></TD> 
	
	</TR>
	</TABLE> </center>

<?php
  $incidente++;
  require("../BD/UsarGestion.php");
  $consulta= "INSERT INTO tracking";
  $consulta.=" (idequipo,idincidente,fecha,tecnico,solucion) ";
  $consulta.=" VALUES($codigo,$incidente,'$fecha','$tecnico','$observaciones')";
  $hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include("../mensajes/incidenteequipook.php");
		 	}
    
?>
