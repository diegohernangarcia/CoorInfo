<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="keywords" content="windows 8, modern style, modern ui, style, modern, css, framework">
    
    <link href="../Metro/css/modern.css" rel="stylesheet">
    <link href="../estilos/estiloparametros.css" rel="stylesheet">
	<title>Coordinacion Informatica - Ministerio Desarrollo Social - Rio Negro</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body,td,th {
	font-family: "Segoe UI Semilight", "Open Sans", Verdana, Arial, Helvetica, sans-serif;
}
body {
	background-image: url(../images/fondo.jpg);
}
</style>
</head>
<body onload="document.forms['principal']['area'].focus()"> 
<div id="contenedor">
  <div id="cabecera">
  <center><img src="../images/logo.jpg" width="750" height="80" alt="LOGO MINISTERIO" align="middle"></center>
</div>
<br><br><br><br>

<div id="contenido">
	<div id="principal">
		<h1> Alta de Area </h1>
        	<h2> Coordinacion Informatica </h2>
	</div>
	<div id="secundario">
		<form name="principal" id="principal" action="agregararea.php" method="post">
			<br><br>
			<center>
    			<div class="input-control text span7">
				
        			<input type="text" name="area" placeholder="Descripcion Del Area" text="">
        			<span class="helper"></span>
				<br>				
				<button class="bg-color-blueDark">Grabar</button>  
				<!--<button class="bg-color-blueDark">Grabar y Agregar Otro</button> -->
				<br><br>
				
    			</div>
			</center>
			
		</form>
	</div>
      	<div id="terciario">
      		<center>
      			<br><br>
      			<IMG SRC="../images/back.png" ALT="Atras" onclick="location.href='areas.php'"/>
			<h3>Volver a Menu Areas</h3>
			<IMG SRC="../images/principal.png" ALT="Atras" onclick="location.href='../menus/index.php'"/>
			<h3>Volver a Menu Principal</h3>
		</center>
			.
		
      	</div>
	
		
</div>

	
	
</center>

    


</body>
</html>
