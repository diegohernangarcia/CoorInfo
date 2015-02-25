<?php
// CON EL PARAMETRO USUARIO Y CLAVE DEVUELVE SI EXISTE EL USUARIO Y CORRESPONDE LA CLAVE
// DEVUELVE 0 EXISTE USUARIO Y CORRESPONDE CLAVE
// DEVUELVE 1 EXISTE USUARIO PERO NO CORRESPONDE CLAVE
// DEVUELVE 2 NO EXISTE USUARIO
Function logincorrecto($usuario,$clave,&$id,&$tipo){
	require("UsarGestion.php");
	$consulta="SELECT * FROM usuarios WHERE usuario ='".$usuario."'";
	//echo ($consulta);
	$hacerconsulta=mysql_query($consulta,$manejador);
	$$numeroerror=mysql_errno();
	$descripcionerror=mysql_error();
	$numeroderegistros= mysql_num_rows($hacerconsulta);
	if ($numeroderegistros==0) {
		$id=2;
		return $id;
		die();
	}
	$GETusuario=mysql_result($hacerconsulta,0,"usuario");
	$GETclave=mysql_result($hacerconsulta,0,"password");
        $tipo=mysql_result($hacerconsulta,0,"tipo");
	if (($usuario==$GETusuario) && ($clave==$GETclave))  {
	 	$id=0;
		return $id;
		die;
	} else {
		$id=1;
		return $id;
		die;
	}
		

	
	//if ($$numeroerror!=0) {
	//	echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
	//$id=mysql_result ($hacerconsulta,0,"Id");
	Return $id;
}

