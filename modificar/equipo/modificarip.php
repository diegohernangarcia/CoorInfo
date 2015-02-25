<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <link href="../../Metro/css/modern.css" rel="stylesheet">
    <link href="../../css/modern-responsive.css" rel="stylesheet">
    <link href="../../css/site.css" rel="stylesheet" type="text/css">
    <script src="../../Metro/js/jquery-1.8.2.min.js"></script>
    <script src="../../Metro/js/google-code-prettify/prettify.js"></script>
    <script src="../../Metro/js/pagecontrol.js"></script> 
    <title>Coordinacion Informatica</title>
</head>
    <form name="modificarip" id="modificarip" action="grabarip.php" method="post">
        <center><h3>Atencion, no se verificara si ya existe el ip a modificar</h3></center>
        <h3>Rango Ip</h3>
        <div class="input-control select" >
            <select name="rango" title="rango" id="rango">
               	<?php
                    include("../../BD/BDRangos.php");
                    DevuelvoArrayRangos($array_rangos);
                    for($i=0;$i<count($array_rangos);$i++) {
		       	echo "<option value=".$i.">".$array_rangos[$i]."</option>" ;
                    }
		?>
            </select>                 
        </div>
        <h3>Ip</h3>
        <div class="input-control text" >
            <input type="text" name="ip" id="ip" onkeypress="javascript:return validarNro(event)">
            <span class="helper"></span>
        </div>
        <center><button class="bg-color-blue">Grabar Cambios</button> <center>
    </form>
    <center>
        <div class="page-header">
            <div class="page-header-content">
                <h3>Cerrar</h3>
                <a onclick="window.close()" class="back-button big page-back"></a>
            </div>
        </div>
    </center> 

