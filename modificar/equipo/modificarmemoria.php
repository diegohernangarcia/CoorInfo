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
<?php
   // echo ("Modificar Area");
    include("../../BD/BDMemoria.php");
    DevuelvoArrayMemoria($array_areas);
    
?>
    <h3>Modificar Memoria</h3>
    <form name="modificarmemoria" id="modificarmemoria" action="grabarmemoria.php" method="post">
        <div class="input-control select" >
           <select name="quememoria" id="quearea" span10 >
                <?php
                	for($i=0;$i<count($array_areas);$i++) {
                           	echo "<option value=".$i.">".$array_areas[$i]."</option>" ;
                        }
                ?>
            </select>
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
