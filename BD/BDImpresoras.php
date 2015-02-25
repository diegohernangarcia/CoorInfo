<?php
Function DevuelvoArrayMarcasImpresoras(&$arreglo) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM marcaimpresora";
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
			$descripcion=mysql_result($hacerconsulta,$contador,"marcaimpresora");
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
Function DevuelvoArrayModelosImpresoraSegunMarca(&$arreglo, $id) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM impresora WHERE idmarcaimpresora='".$id."'";
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
function Estaipimpresorared($rango,$ip,&$salida) {
	// Devuelve 0 si el registro no existe 
	// Devuelve 1 si el registro ya esta cargado
		require("UsarGestion.php");
		$consulta="SELECT * FROM impresorared WHERE ip='".$ip."' AND rango='".$rango."'";
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
        Function DevuelvoArrayModelosSegunMarcaImpresora(&$arreglo, $id) {
		require ("UsarGestion.php");
		// Creo la consulta
		$consulta="SELECT * FROM impresora WHERE idmarcaimpresora='".$id."'";
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
        Function DevuelvoDescripcionModeloImpresora ($modelomonitor,$marcamonitor,&$salida){
            DevuelvoArrayModelosSegunMarcaImpresora($arreglo,$marcamonitor);
		$salida=$arreglo[$modelomonitor];
		Return $salida;
	}
        
        Function DevuelvoIdImpresora($marca,$modelo,&$salida){
		require("UsarGestion.php");
                DevuelvoDescripcionModeloImpresora($modelo,$marca,$quemodelo);
		$consulta="SELECT * FROM impresora WHERE modelo='".$quemodelo."' AND idmarcaimpresora='".$marca."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
	}
        Function DevuelvoMarcaImpresora($id,&$salida){
                require("UsarGestion.php");
                $consulta="SELECT * FROM marcaimpresora WHERE id='".$id."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
                    $salida=mysql_result ($hacerconsulta,0,"marcaimpresora");
                    
		Return $salida;
            
        }
        Function DevuelvoDescripcionImpresora($id,&$salida){
                require("UsarGestion.php");
                $consulta="SELECT * FROM impresora WHERE id='".$id."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
                    $modelo=mysql_result ($hacerconsulta,0,"modelo");
                    $idmarca=  mysql_result($hacerconsulta,0,"idmarcaimpresora");
                    DevuelvoMarcaImpresora($idmarca,$quemarca);
                    $salida=$quemarca." ".$modelo;
		Return $salida;
            
        }
        function NuevoRegistroImpresoraLocal(&$id){
		require("UsarGestion.php");
		$consulta=mysql_query("SELECT MAX(id) AS id FROM impresoralocal");
		if ($row = mysql_fetch_row($consulta)) {
			$id = trim($row[0]);
		}
		return $id;
	}
        function NuevoRegistroImpresoraRed(&$id){
		require("UsarGestion.php");
		$consulta=mysql_query("SELECT MAX(id) AS id FROM impresorared");
		if ($row = mysql_fetch_row($consulta)) {
			$id = trim($row[0]);
		}
		return $id;
	}
        function AgregarImpresoraLocal($area,$oficina,$queimpresora,$serie,$rango,$ip) {
			require("UsarGestion.php");
			$consulta= "INSERT INTO impresoralocal";
			$consulta.=" (area,oficina,queimpresora,serie,rango,ip) VALUES ";
			$consulta.="($area,'$oficina',$queimpresora,'$serie',$rango,$ip)";
			//echo($consulta);
			//die();
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include("../mensajes/impresoralocalgrabadaok.php");
		 	}
	}
        function AgregarImpresoraRed($area,$oficina,$queimpresora,$serie,$rango,$ip) {
			require("UsarGestion.php");
			$consulta= "INSERT INTO impresorared";
			$consulta.=" (area,oficina,queimpresora,serie,rango,ip) VALUES ";
			$consulta.="($area,'$oficina',$queimpresora,'$serie',$rango,$ip)";
			//echo($consulta);
			//die();
			$hacerconsulta=mysql_query($consulta,$manejador);
			$numeroerror=mysql_errno();
			$descripcionerror=mysql_error();
			if ($numeroerror !=0) {
				echo ("<br>".$numeroerror."<br>".$descripcionerror);
			}
			else {
		 		include("../mensajes/impresoraenredgrabadaok.php");
		 	}
	}
        function TieneImpresoraLocal($rango,$ip,&$salida) {
	// Devuelve 0 si el registro no posee impresora 
	// Devuelve 1 si el registro si posee impresora local
		require("UsarGestion.php");
		$consulta="SELECT * FROM impresoralocal WHERE ip='".$ip."' AND rango='".$rango."'";
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
        Function DevuelvoDescripcionImpresoraPorModelo($id,&$salida){
                require("UsarGestion.php");
                $consulta="SELECT * FROM impresora WHERE id='".$id."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
                    $modelo=mysql_result ($hacerconsulta,0,"modelo");
                    $idmarca=  mysql_result($hacerconsulta,0,"idmarcaimpresora");
                    DevuelvoMarcaImpresora($idmarca,$quemarca);
                    $salida=$quemarca." ".$modelo;
		Return $salida;
            
        }
         function AgregarImpresora($impresora) {
			require("UsarGestion.php");
			$consulta= "INSERT INTO marcaimpresora(marcaimpresora) VALUES ('".$impresora."');";
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
        function EstaImpresora($impresora,&$salida) {
	// Devuelve 0 si el registro no existe 
	// Devuelve 1 si el registro ya esta cargado
		require("UsarGestion.php");
                $salida=0;
		$consulta="SELECT * FROM marcaimpresora WHERE marcaimpresora='".$impresora."'";
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
        Function DevuelvoIdMarcaImpresora($marca,&$salida){
		require("UsarGestion.php");

		$consulta="SELECT * FROM marcaimpresora WHERE marcaimpresora='".$marca."'";
		//echo ($consulta);
		$hacerconsulta=mysql_query($consulta,$manejador);
		$$numeroerror=mysql_errno();
		$descripcionerror=mysql_error();
		if ($$numeroerror!=0) {
			echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
		$salida=mysql_result ($hacerconsulta,0,"id");
		Return $salida;
	}
          function EstaMarcaModeloImpresora($marca,$modelo,&$salida) {
	// Devuelve 0 si el registro no existe 
	// Devuelve 1 si el registro ya esta cargado
		require("UsarGestion.php");
		$consulta="SELECT * FROM impresora WHERE idmarcaimpresora='".$marca."' AND modelo='".$modelo."'"  ;
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
         function AgregarModeloImpresora($marca,$modelo) {
			require("UsarGestion.php");
			$consulta= "INSERT INTO impresora (idmarcaimpresora,modelo) VALUES ($marca,'$modelo')";                            "');";
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
