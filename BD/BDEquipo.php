<?php
	function NuevoRegistro(&$id){
		require("UsarGestion.php");
		$consulta=mysql_query("SELECT MAX(id) AS id FROM equipo");
		if ($row = mysql_fetch_row($consulta)) {
			$id = trim($row[0]);
		}
		return $id;
	}
	function Estaip($rango,$ip,&$salida) {
	// Devuelve 0 si el registro no existe 
	// Devuelve 1 si el registro ya esta cargado
		require("UsarGestion.php");
		$consulta="SELECT * FROM equipo WHERE ip='".$ip."' AND rango='".$rango."'";
		//echo ($consulta); 
		$hacerconsulta=mysql_query($consulta,$manejador);
		$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror !=0) {
			echo ("<br>".$numeroerror."<br>".$descripcionerror);
		} 

		$numeroderegistros= mysql_num_rows($hacerconsulta);
		if ($numeroderegistros==0) {
			$salida=0;
			return $salida;
			die();
		} else {
			 $salida=1;
			 return $salida;
			 die();
		}
	}
	function Estausuario($usuario,&$salida) {
	// Devuelve 0 si el registro no existe 
	// Devuelve 1 si el registro ya esta cargado
		require("UsarGestion.php");
		$consulta="SELECT * FROM equipo WHERE usuario='".$usuario."'";
		//echo ($consulta); 
		$hacerconsulta=mysql_query($consulta,$manejador);
		$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror !=0) {
			echo ("<br>".$numeroerror."<br>".$descripcionerror);
		} 

		$numeroderegistros= mysql_num_rows($hacerconsulta);
		if ($numeroderegistros==0) {
			$salida=0;
			return $salida;
			die();
		} else {
			 $salida=1;
			 return $salida;
			 die();
		}
	}
	function AgregarEquipo($area,$oficina,$interno,$rango,$ip,$usuario,$so,$cpu,$mother,$memoria,$disco,$cd,$monitor,$serie) {
			require("UsarGestion.php");
			$consulta= "INSERT INTO equipo";
			$consulta.=" (sector,oficina,interno,rango,ip,usuario,sistemaoperativo,cpu,";
			$consulta.="motherboard,memoria,discoduro,`cd-dvd`,monitor,`serial-monitor`) VALUES ";
			$consulta.="($area,'$oficina','$interno',$rango,$ip,'$usuario',$so,$cpu,$mother,$memoria,$disco,";
			$consulta.="$cd,$monitor,'$serie');";
			//echo($consulta);
			//die();
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include("../mensajes/equipograbadook.php");
		 	}
	}
	Function DevuelvoArrayipusadas(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM equipo";
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
		$arreglo[0]="Seleccione";
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"ip");
			//echo($descripcion." ".$"<br>");
			$arreglo[$contador]=$descripcion;
			}
		/*$tamanio = sizeof($arreglo);
		for ($contador=0;$contador<$tamanio;$contador++) {
			echo($contador." ".$arreglo[$contador]."<br>");
		}*/
		Return $arreglo;
	}
	Function DevuelvoArrayipusadasconrango(&$arreglo, $id) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM equipo WHERE rango='".$id."'";
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
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"ip");
			//echo($Descripcion."<br>");
			$arreglo[$contador]=$descripcion;
		}
		Return $arreglo;
	}
        
        Function DevuelvoEquipoPorUsuario ($usuario,&$id,&$area,&$oficina,&$interno,&$rango,&$ip,&$usuario,&$so,&$cpu,&$mother,&$memoria,&$disco,&$cd,&$monitor,&$serie) {
		require("UsarGestion.php");
		$consulta="SELECT * FROM equipo WHERE usuario='".$usuario."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
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
                
                
                
		Return $salida;
	}
        function ActualizoOficina($dato,$id) {
			require("UsarGestion.php");
			$consulta= "UPDATE equipo SET oficina='".$dato."' WHERE id='".$id."'";
			//echo $consulta;
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include ("../../mensajes/cambiosrealizados.php");
		 	}
	}
        function ActualizoInterno($dato,$id) {
			require("UsarGestion.php");
			$consulta= "UPDATE equipo SET interno='".$dato."' WHERE id='".$id."'";
			//echo $consulta;
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include ("../../mensajes/cambiosrealizados.php");
		 	}
	}
        function ActualizoRangoIp($rango,$ip,$id) {
			require("UsarGestion.php");
			$consulta= "UPDATE equipo SET rango='".$rango."', ip='".$ip."' WHERE id='".$id."'";
                        //echo ("$consulta");
                        //die();
			//echo $consulta;
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include ("../../mensajes/cambiosrealizados.php");
		 	}
	}
         function ActualizoUsuario($dato,$id) {
			require("UsarGestion.php");
			$consulta= "UPDATE equipo SET usuario='".$dato."' WHERE id='".$id."'";
			//echo $consulta;
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include ("../../mensajes/cambiosrealizados.php");
		 	}
	}
        function ActualizoSo($dato,$id) {
			require("UsarGestion.php");
			$consulta= "UPDATE equipo SET sistemaoperativo='".$dato."' WHERE id='".$id."'";
			//echo $consulta;
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include ("../../mensajes/cambiosrealizados.php");
		 	}
	}
        function ActualizoCPU($dato,$id) {
			require("UsarGestion.php");
			$consulta= "UPDATE equipo SET cpu='".$dato."' WHERE id='".$id."'";
			//echo $consulta;
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include ("../../mensajes/cambiosrealizados.php");
		 	}
	}
        function ActualizoMother($dato,$id) {
			require("UsarGestion.php");
			$consulta= "UPDATE equipo SET motherboard='".$dato."' WHERE id='".$id."'";
			//echo $consulta;
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include ("../../mensajes/cambiosrealizados.php");
		 	}
	}
        function ActualizoLectora($dato,$id) {
			require("UsarGestion.php");
			$consulta= "UPDATE equipo SET `cd-dvd`='".$dato."' WHERE id='".$id."'";
			//echo $consulta;
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include ("../../mensajes/cambiosrealizados.php");
		 	}
	}
         function ActualizoHD($dato,$id) {
			require("UsarGestion.php");
			$consulta= "UPDATE equipo SET discoduro='".$dato."' WHERE id='".$id."'";
			//echo $consulta;
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include ("../../mensajes/cambiosrealizados.php");
		 	}
	}
        function ActualizoMonitor($dato,$serial, $id) {
			require("UsarGestion.php");
			$consulta= "UPDATE equipo SET monitor='".$dato."', `serial-monitor`='".$serial."' WHERE id='".$id."'";
			//echo $consulta;
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include ("../../mensajes/cambiosrealizados.php");
		 	}
	}
        function ActualizoMemoria($dato,$id) {
			require("UsarGestion.php");
			$consulta= "UPDATE equipo SET memoria='".$dato."' WHERE id='".$id."'";
			//echo $consulta;
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include ("../../mensajes/cambiosrealizados.php");
		 	}
	}
?>

