<?php
Function DevuelvoArraySistemaOperativo(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM sistemaoperativo";
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
			$descripcion=mysql_result($hacerconsulta,$contador,"sistemaoperativo");
			//echo($descripcion." ".$"<br>");
			$arreglo[$contador]=$descripcion;
			}
		/*$tamanio = sizeof($arreglo);
		for ($contador=0;$contador<$tamanio;$contador++) {
			echo($contador." ".$arreglo[$contador]."<br>");
		}*/
		Return $arreglo;
	}	
	Function DevuelvoDescripcionSistemaOperativo2 ($id,&$salida){
		require("UsarGestion.php");
		//$id++;
		$consulta="SELECT * FROM sistemaoperativo WHERE Id='".$id."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"sistemaoperativo");
		Return $salida;
	}
        Function DevuelvoDescripcionSistemaOperativo ($id,&$salida){
		require("UsarGestion.php");
		$consulta="SELECT * FROM sistemaoperativo WHERE Id='".$id."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"sistemaoperativo");
		Return $salida;
	}
	Function DevuelvoIdSistemaOperativo ($sistemaoperativo,&$salida){
		require("UsarGestion.php");
		$consulta="SELECT * FROM sistemaoperativo WHERE sistemaoperativo='".$sistemaoperativo."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
                //echo ("SO QUE BUSCO".$sistemaoperativo);
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
	}	
        function EstaSO($so,&$salida) {
	// Devuelve 0 si el registro no existe 
	// Devuelve 1 si el registro ya esta cargado
		require("UsarGestion.php");
		$consulta="SELECT * FROM sistemaoperativo WHERE sistemaoperativo='".$so."'";
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
	function AgregarSistemaOperativo($so) {
			require("UsarGestion.php");
			$consulta= "INSERT INTO sistemaoperativo (sistemaoperativo) VALUES ('".$so."');";
			//echo $consulta;
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include("../mensajes/SOGrabadoOk.php");
		 	}
	}
?>
