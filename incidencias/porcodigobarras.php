<?php
    $codigobarras=$_POST["codigobarras"];
    //echo($codigobarras);
   $id= strstr($codigobarras, " -- ", true);
   //echo ("<BR> Posicion $id");
     if ($id!="") {
        require("../BD/UsarGestion.php");
        $consulta="SELECT * FROM equipo WHERE id='".$id."'";
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
        $numeroderegistros= mysql_num_rows($hacerconsulta);
	if ($numeroerror!=0) {
		echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
        if ($numeroderegistros==0) {
            include("../mensajes/errorbusqueda.php");
        }
        else {
            $id=mysql_result ($hacerconsulta,0,"id");
            $area=mysql_result ($hacerconsulta,0,"sector");
            $oficina=mysql_result ($hacerconsulta,0,"oficina");
            $interno=mysql_result ($hacerconsulta,0,"interno");
            $rango=mysql_result ($hacerconsulta,0,"rango");
            $ip=mysql_result ($hacerconsulta,0,"ip");
            $usuario=mysql_result ($hacerconsulta,0,"usuario");
            $so=mysql_result ($hacerconsulta,0,"sistemaoperativo");
            $cpu=mysql_result ($hacerconsulta,0,"cpu");
            $mother=mysql_result ($hacerconsulta,0,"motherboard");
            $memoria=mysql_result ($hacerconsulta,0,"memoria");
            $disco=mysql_result ($hacerconsulta,0,"discoduro");
            $cd=mysql_result ($hacerconsulta,0,"cd-dvd");
            $monitor=mysql_result ($hacerconsulta,0,"monitor");
            $serie=mysql_result ($hacerconsulta,0,"serial-monitor");
            $id=  mysql_result($hacerconsulta,0,"id");
            include("muestroequipo.php");
            
            }
        
    }
    else {
        include("../mensajes/errorbusqueda.php");
    
    }
?>
