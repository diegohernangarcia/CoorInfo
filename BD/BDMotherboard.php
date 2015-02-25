<?php
Function DevuelvoArrayMarcasMotherboard(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM  marcamotherboard";
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
			$descripcion=mysql_result($hacerconsulta,$contador,"marcamotherboard");
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
Function DevuelvoArrayModelosSegunMarcaMotherboard(&$arreglo, $id) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM motherboard WHERE idmarcamotherboard='".$id."'";
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
	Function DevuelvoDescripcionMarcaMotherboard ($id,&$salida){
		require("UsarGestion.php");
		$consulta="SELECT * FROM marcamotherboard WHERE Id='".$id."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"marcamotherboard");
		Return $salida;
	}
	Function DevuelvoDescripcionModeloMother ($modelomother,$marcamother,&$salida){
		DevuelvoArrayModelosSegunMarcaMotherboard($arreglo,$marcamother);
		//$salida=$arreglo[$modelocd];	
		//$salida=mysql_result ($hacerconsulta,0,"modelo");
		//$numeroderegistros= count($arreglo);
		//echo("NUMERO REGISTROS ".$numeroderegistros);
		//for ($contador=0;$contador<$numeroderegistros;$contador++) {
		  //      echo("<BR>");
		    //    echo ($arreglo[$contador]);
		      //  }
		$salida=$arreglo[$modelomother];
		Return $salida;
	}
	Function DevuelvoIdMarcaMotherboard($marca,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM marcamotherboard WHERE marcamotherboard='".$marca."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
	}
	Function DevuelvoIdModeloMotherboard($marca,$modelo,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM motherboard WHERE modelo='".$modelo."' and idmarcamotherboard='".$marca."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
	}
        Function DevuelvoFullMotherboard($id,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM motherboard WHERE id='".$id."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		
                $marcacpu=mysql_result($hacerconsulta,0,"idmarcamotherboard");
                DevuelvoDescripcionMarcaMotherboard($marcacpu,$MarcaCPU);
                $modelocpu= mysql_result($hacerconsulta,0,"modelo");
                $salida= $MarcaCPU." ".$modelocpu;
		Return $salida;
	}
        function AgregarMotherboard($motherboard) {
			require("UsarGestion.php");
			$consulta= "INSERT INTO marcamotherboard (marcamotherboard) VALUES ('".$motherboard."');";
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
        function EstaMotherboard($motherboard,&$salida) {
	// Devuelve 0 si el registro no existe 
	// Devuelve 1 si el registro ya esta cargado
		require("UsarGestion.php");
                $salida=0;
		$consulta="SELECT * FROM marcamotherboard WHERE marcamotherboard='".$motherboard."'";
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
        function EstaMarcaModeloMother($marca,$modelo,&$salida) {
	// Devuelve 0 si el registro no existe 
	// Devuelve 1 si el registro ya esta cargado
		require("UsarGestion.php");
		$consulta="SELECT * FROM motherboard WHERE idmarcamotherboard='".$marca."' AND modelo='".$modelo."'"  ;
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
         function AgregarModeloMother($marca,$modelo) {
			require("UsarGestion.php");
			$consulta= "INSERT INTO motherboard (idmarcamotherboard,modelo) VALUES ($marca,'$modelo')";                            "');";
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
