<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <link href="../Metro/css/modern.css" rel="stylesheet">
    <link href="../estilos/principal.css" rel="stylesheet">

    <title>Coordinacion Informatica</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" onload="document.forms['principal']['usuario'].focus()">
<form name="altaequipo" id="nuevaincidencia" action="nuevaincidencia2.php" method="post"> 
<div id="contenedor">
  <div id="cabecera">
  <center><img src="../images/logo.jpg" width="750" height="80" alt="LOGO MINISTERIO" align="middle"></center>
  </div>

  <div id="menu">
  .
   
  </div>
 
  <div id="contenido">
    <div id="principal">
        <h3>Lectora Codigo Barras</h3>
        <div class="input-control text"  span7>
            <input type="text" name="codigobarras" id="codigobarras">
            <span class="helper"></span>
            
        </div>
        
        <center><button class="bg-color-blue" name="bcodigobarras">Buscar Registro" </button></center>
        <h3>Por Ip</h3>
        <div class="input-control text"  span7>
            <input type="text" name="porip" id="porip">
            <span class="helper"></span>
        </div>
        <center><button class="bg-color-blue" name="bporip">Buscar Registro" </button></center>
        <h3>Por Id</h3>
        <div class="input-control text"  span7>
            <input type="text" name="porid" id="porid">
            <span class="helper"></span>
        </div>
        <center><button class="bg-color-blue" name="bporid">Buscar Registro" </button></center>
        <h3>Por Usuario</h3>
        <div class="input-control text"  span7>
            <input type="text" name="porusuario" id="porusuario">
            <span class="helper"></span>
        </div>
        <center><button class="bg-color-blue" name="bporusuario">Buscar Registro" </button></center>
    </div>
  </div>
</form>
</body>
