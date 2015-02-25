<?php 
	$usuario=$_POST["usuario"];
	$clave=$_POST["clave"];
	//echo ("USUARIO ".$usuario."<br>"."CLAVE ".$clave);
	// VERIFICAR QUE EL NOMBRE DE USUARIO SEA VALIDO EN EL SISTEMA
	require ("../BD/UsarGestion.php");
	require ("../BD/BDUsuarios.php");
	logincorrecto($usuario,$clave,$resultado,$tipousuario);
        /////////////// CREO LA COOKIE TIPO USUARIO /////
       $expira = time() + (60 * 60 * 6);
       //$expira = time() + (60);
        // Establece una cookie que expira en 1 hora
        //setcookie("User", $tipousuario, $expira);
        setcookie("usuario",$tipousuario,$expira,'/'); 
        ////////////////////////////////////////////////
	if ($resultado==0) {
		//echo ("<br>"."Existe Usuario y Corresponde Clave");
		include ("../menus/index.php");
		
	}
	if ($resultado==1) {
		//echo ("<br>"."Existe Usuario pero no corresponde la Clave");
		include("../mensajes/error1login.php");
	}
	if ($resultado==2) {
		//echo ("<br>"."No existe el usuario");
		include("../mensajes/error2login.php");
	}


//	
?>
 
