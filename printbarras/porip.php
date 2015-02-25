<?php
    $ip=$_POST["porip"];
    $rango=$_POST["rango"];
   // echo("rango ".$rango." ip ".$ip);
    
    //$usuario=$_POST["porusuario"];
    $largo=strlen($ip);
    //echo("LARGO ".$largo);
    $rango++;
    if ($largo!=0) {
        require("../BD/UsarGestion.php");
        $consulta="SELECT * FROM equipo WHERE ip='".$ip."' and rango='".$rango."'";
	$hacerconsulta=mysql_query($consulta,$manejador);
	$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
        $numeroderegistros= mysql_num_rows($hacerconsulta);
	if ($numeroerror!=0) {
		echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
        if ($numeroderegistros!=0) {
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
            include("muestroequipo.php");
            
            }
        
    }
    else {
        echo "completa los datos vieja";
    
    }
    if ($numeroderegistros==0) {
        echo ("viejita, no se encontraron resultados");
    }
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

