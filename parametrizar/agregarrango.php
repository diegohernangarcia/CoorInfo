<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"><head>
<meta charset="utf-8">
<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
<link href="../Metro/css/modern.css" rel="stylesheet">
<link href="../estilos/estiloparametros.css" rel="stylesheet">
<title>Coordinacion Informatica - Ministerio Desarrollo Social - Rio Negro</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body onload="document.forms['principal']['area'].focus()"> 
	<center><img src="../images/logo.jpg" width="750" height="80" alt="LOGO MINISTERIO" align="middle"></center>
	<br><br><br><br>
	<?php 
		$rango=$_POST["rango"];
		//echo $area;
		$salida=0;
		include ("../BD/BDRangos.php");
		EstaRango($rango,$salida);
		if ($salida==1) {
			include("../mensajes/rangoyaexiste.php");
		} else {
			AgregarRango($rango);
		}
			
		
		
		
	?>
</body>
</html>
		
		


