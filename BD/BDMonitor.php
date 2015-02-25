<?php
Function DevuelvoArrayMarcasMonitor(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM marcamonitor";
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
			$descripcion=mysql_result($hacerconsulta,$contador,"marcamonitor");
			//echo($descripcion." ".$"<br>");
			$i=$contador+1;
			$arreglo[$i]=$descripcion;
			}
		/*$tamanio = sizeof($arreglo);
		for ($contador=0;$contador<$tamanio;$contador++) {
			echo($contador." ".$arreglo[$contador]."<br>");
		}*/
		Return $arreglo;
	}
Function DevuelvoArrayModelosSegunMarcaMonitor(&$arreglo, $id) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM monitor WHERE idmarcamonitor='".$id."'";
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
			$descripcion=mysql_result($hacerconsulta,$contador,"modelo");
			//echo($Descripcion."<br>");
			$arreglo[$contador]=$descripcion;
		}
		Return $arreglo;
	}
	Function DevuelvoDescripcionMarcaMonitor ($id,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM marcamonitor WHERE Id='".$id."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"marcamonitor");
		Return $salida;
	}
	Function DevuelvoDescripcionModeloMonitor ($modelomonitor,$marcamonitor,&$salida){
		DevuelvoArrayModelosSegunMarcaMonitor($arreglo,$marcamonitor);
		$salida=$arreglo[$modelomonitor];
		Return $salida;
	}
	Function DevuelvoIdMarcaMonitor($marca,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM marcamonitor WHERE marcamonitor='".$marca."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
	}
	Function DevuelvoIdModeloMonitor($marca,$modelo,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM monitor WHERE modelo='".$modelo."' AND idmarcamonitor='".$marca."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
	}
         Function DevuelvoMonitor($id,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM monitor WHERE id='".$id."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		
                $marcacpu=mysql_result($hacerconsulta,0,"idmarcamonitor");
                DevuelvoDescripcionMarcaMonitor($marcacpu,$MarcaCPU);
                $modelocpu= mysql_result($hacerconsulta,0,"modelo");
                $salida= $MarcaCPU."\n".$modelocpu;
		Return $salida;
	}
        function AgregarMonitor($monitor) {
			require("UsarGestion.php");
			$consulta= "INSERT INTO marcamonitor (marcamonitor) VALUES ('".$monitor."');";
			//echo $consulta;
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		//include("../mensajes/marcaOK.php");
		 	}
	}
        function EstaMonitor($monitor,&$salida) {
	// Devuelve 0 si el registro no existe 
	// Devuelve 1 si el registro ya esta cargado
		require("UsarGestion.php");
                $salida=0;
		$consulta="SELECT * FROM marcamonitor WHERE marcamonitor='".$monitor."'";
		//echo ($consulta); 
		$hacerconsulta=mysql_query($consulta,$manejador);
		$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror !=0) {
			echo ("<br>".$numeroerror."<br>".$descripcionerror);
		} 
		$numeroderegistros= mysql_num_rows($hacerconsulta);
                //ECHO ($numeroderegistros);
		if ($numeroderegistros==0) {
			$salida=0;
			return $salida;
			die();
		} else {
			 return $salida=1;
			 die();
		}
	}
         function EstaMarcaModeloMonitor($marca,$modelo,&$salida) {
	// Devuelve 0 si el registro no existe 
	// Devuelve 1 si el registro ya esta cargado
		require("UsarGestion.php");
		$consulta="SELECT * FROM monitor WHERE idmarcamonitor='".$marca."' AND modelo='".$modelo."'"  ;
		//echo ($consulta); 
		$hacerconsulta=mysql_query($consulta,$manejador);
		$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror !=0) {
			echo ("<br>".$numeroerror."<br>".$descripcionerror);
		} 
		$numeroderegistros= mysql_num_rows($hacerconsulta);
               // echo ("  NUM REG ".$numeroderegistros);
		if ($numeroderegistros==0) {
                        $salida=0;
                       // echo ("SALIDA ".$salida);
			return $salida;
			die();
		} else {
                        $salida=1;
                       // echo ("SALIDA ".$salida);
			 return $salida;
			 die();
		}
	}
         function AgregarModeloMonitor($marca,$modelo) {
			require("UsarGestion.php");
			$consulta= "INSERT INTO monitor (idmarcamonitor,modelo) VALUES ($marca,'$modelo')";                            "');";
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		//include("../mensajes/marcaOK.php");
		 	}
	}
?>
