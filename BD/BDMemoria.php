<?php
Function DevuelvoArrayMemoria(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM cantmemoria";
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
		for ($contador=0;$contador<$numeroderegistros;$contador++) {
			// Se obtienen los datos almacenados en el elemento del cursor 
			$descripcion=mysql_result($hacerconsulta,$contador,"cantmemoria");
			//echo($descripcion." ".$"<br>");
			$i=$contador;
			$arreglo[$i]=$descripcion;
			}
		/*$tamanio = sizeof($arreglo);
		for ($contador=0;$contador<$tamanio;$contador++) {
			echo($contador." ".$arreglo[$contador]."<br>");
		}*/
		Return $arreglo;
	}
	Function DevuelvoDescripcionMemoria ($id,&$salida){
		require("UsarGestion.php");
		$id++;
		$consulta="SELECT * FROM cantmemoria WHERE Id='".$id."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"cantmemoria");
		Return $salida;
	}
        Function DevuelvoDescripcionMemoria2 ($id,&$salida){
		require("UsarGestion.php");
		$consulta="SELECT * FROM cantmemoria WHERE Id='".$id."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"cantmemoria");
		Return $salida;
	}
	Function DevuelvoIdMemoria ($memoria,&$salida){
		require("UsarGestion.php");
		$consulta="SELECT * FROM cantmemoria WHERE cantmemoria='".$memoria."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
	}	
        function EstaMemoria($memoria,&$salida) {
	// Devuelve 0 si el registro no existe 
	// Devuelve 1 si el registro ya esta cargado
		require("UsarGestion.php");
		$consulta="SELECT * FROM  cantmemoria WHERE cantmemoria='".$memoria."'";
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
	function AgregarMemoria($memoria) {
			require("UsarGestion.php");
			$consulta= "INSERT INTO cantmemoria (cantmemoria) VALUES ('".$memoria."');";
			//echo $consulta;
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include("../mensajes/MemoriaOk.php");
		 	}
	}
