<?php
Function DevuelvoArrayMarcasCPU(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM marcacpu";
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
			$descripcion=mysql_result($hacerconsulta,$contador,"marcacpu");
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
Function DevuelvoArrayModelosSegunMarca(&$arreglo, $id) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM cpu WHERE idmarcacpu='".$id."'";
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
	Function DevuelvoDescripcionMarcaCPU ($id,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM marcacpu WHERE Id='".$id."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"marcacpu");
		Return $salida;
	}
	Function DevuelvoDescripcionModeloCPU ($modelocpu,$marcacpu,&$salida){
		
		DevuelvoArrayModelosSegunMarca($arreglo,$marcacpu);
		$salida=$arreglo[$modelocpu];
		Return $salida;
	}
	Function DevuelvoIdMarcaCPU($marca,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM marcacpu WHERE marcacpu='".$marca."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
	}
	Function DevuelvoIdModeloCPU($marca,$modelo,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM cpu WHERE modelo='".$modelo."' AND idmarcacpu='".$marca."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
	}
        Function DevuelvoFullCPU($id,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM cpu WHERE id='".$id."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		
                $marcacpu=mysql_result($hacerconsulta,0,"idmarcacpu");
                DevuelvoDescripcionMarcaCPU($marcacpu,$MarcaCPU);
                $modelocpu= mysql_result($hacerconsulta,0,"modelo");
                $salida= $MarcaCPU."\n".$modelocpu;
		Return $salida;
	}
        function AgregarCPU($cpu) {
			require("UsarGestion.php");
			$consulta= "INSERT INTO marcacpu (marcacpu) VALUES ('".$cpu."');";
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
        function EstaCPU($cpu,&$salida) {
	// Devuelve 0 si el registro no existe 
	// Devuelve 1 si el registro ya esta cargado
		require("UsarGestion.php");
                $salida=0;
		$consulta="SELECT * FROM marcacpu WHERE marcacpu='".$cpu."'";
		//echo ($consulta); 
		$hacerconsulta=mysql_query($consulta,$manejador);
		$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($numeroerror !=0) {
			echo ("<br>".$numeroerror."<br>".$descripcionerror);
		} 
		$numeroderegistros= mysql_num_rows($hacerconsulta);
                ECHO ($numeroderegistros);
		if ($numeroderegistros==0) {
			$salida=0;
			return $salida;
			die();
		} else {
			 return $salida=1;
			 die();
		}
	}
        function EstaMarcaModelo($marca,$modelo,&$salida) {
	// Devuelve 0 si el registro no existe 
	// Devuelve 1 si el registro ya esta cargado
		require("UsarGestion.php");
		$consulta="SELECT * FROM cpu WHERE idmarcacpu='".$marca."' AND modelo='".$modelo."'"  ;
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
         function AgregarModeloCPU($marca,$modelo) {
			require("UsarGestion.php");
			$consulta= "INSERT INTO cpu (idmarcacpu,modelo) VALUES ($marca,'$modelo')";                            "');";
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
