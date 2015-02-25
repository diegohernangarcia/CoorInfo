<?php
Function DevuelvoArrayMarcasCD(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM marcacd";
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
			$descripcion=mysql_result($hacerconsulta,$contador,"marcacd");
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
Function DevuelvoArrayModelosSegunMarcaCD(&$arreglo, $id) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM `cd-dvd` WHERE idmarcacd='".$id."'";
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
	Function DevuelvoDescripcionMarcaCd ($id,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM marcacd WHERE Id='".$id."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"marcacd");
		Return $salida;
	}
	Function DevuelvoDescripcionModeloCd ($modelocd,$marcacd,&$salida){
		DevuelvoArrayModelosSegunMarcaCD($arreglo,$marcacd);
		$salida=$arreglo[$modelocd];
		Return $salida;
	}
	Function DevuelvoIdMarcaCd($marca,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM marcacd WHERE marcacd='".$marca."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
	}
	Function DevuelvoIdModeloCd($marca,$modelo,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM `cd-dvd` WHERE modelo='".$modelo."' AND idmarcacd='".$marca."'";

		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
	}
         Function DevuelvoFullCDDVD($id,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM `cd-dvd` WHERE id='".$id."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		
                $marcacpu=mysql_result($hacerconsulta,0,"idmarcacd");
                DevuelvoDescripcionMarcaCd($marcacpu,$MarcaCPU);
                $modelocpu= mysql_result($hacerconsulta,0,"modelo");
                $salida= $MarcaCPU." ".$modelocpu;
		Return $salida;
                
	}
        function AgregarCD($cd) {
			require("UsarGestion.php");
			$consulta= "INSERT INTO marcacd (marcacd) VALUES ('".$cd."');";
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
        function EstaCD($cd,&$salida) {
	// Devuelve 0 si el registro no existe 
	// Devuelve 1 si el registro ya esta cargado
		require("UsarGestion.php");
                $salida=0;
		$consulta="SELECT * FROM marcacd WHERE marcacd='".$cd."'";
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
         function EstaMarcaModeloCD($marca,$modelo,&$salida) {
	// Devuelve 0 si el registro no existe 
	// Devuelve 1 si el registro ya esta cargado
		require("UsarGestion.php");
		$consulta="SELECT * FROM `cd-dvd`  WHERE idmarcacd='".$marca."' AND modelo='".$modelo."'"  ;
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
         function AgregarModeloCD($marca,$modelo) {
			require("UsarGestion.php");
			$consulta= "INSERT INTO `cd-dvd`  (idmarcacd,modelo) VALUES ($marca,'$modelo')";                            "');";
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
