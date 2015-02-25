<?php
    include("../BD/BDRangos.php");
    DevuelvoArrayRangos($array_rangos);
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <link href="../Metro/css/modern.css" rel="stylesheet">
     <link href="../Metro/css/modern.css" rel="stylesheet">
    <link href="../css/modern-responsive.css" rel="stylesheet">
    <link href="../css/site.css" rel="stylesheet" type="text/css">
    <script src="../Metro/js/jquery-1.8.2.min.js"></script>
    <script src="../Metro/js/google-code-prettify/prettify.js"></script>
    <script src="../Metro/js/pagecontrol.js"></script> 
    <title>Coordinacion Informatica</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" onload="document.forms['principal']['usuario'].focus()">
<script Language="JavaScript">
			function validarNro(e) {
				var key;
				if(window.event) // IE
					{
					key = e.keyCode;
					}
					else if(e.which) // Netscape/Firefox/Opera
					{
					key = e.which;
					}
				if (key < 48 || key > 57)
					{
					return false;
					}
				return true;
			}
</script>
<form name="altaequipo" id="nuevaincidencia" action="printprinter.php" method="post"> 
<center><img src="../images/logo.jpg" width="750" height="80" alt="LOGO MINISTERIO" align="middle"></center>
<div class="page secondary">
         <div class="page-header">
            <div class="page-header-content">
                 <h1>Consulta Equipos<small>beta</small></h1>
            </div>
         </div>
         <div class="page-region">
            <div class="page-region-content">

                <div class="page-control span11" data-role="page-control">
                    <span class="menu-pull"></span>
                    <div class="menu-pull-bar"></div>
                    <ul>
                        <li class="active"><a href="#page1">Impresora Local</a></li>
                        <li><a href="#page2">Impresora En Red</a></li>
                        
                    </ul>
                  <div class="frames">
                        <div class="frame active" id="page1">
                            <h3>Ingrese Ip Equipo Conectado Impresora</h3>
                             <div class="input-control select">
                        	<select name="rango" title="rango" id="rango">
                                    	<?php
						for($i=0;$i<count($array_rangos);$i++) {
					        	echo "<option value=".$i.">".$array_rangos[$i]."</option>" ;
						}
					?>
                                  </select>                 
                            </div>
                            <div class="input-control text">
                                <input type="text" name="local" id="local" onkeypress="javascript:return validarNro(event)">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="blocal">Buscar Registro" </button></center>
                        </div>
                        
                      
                      
                      
                      
                      <div class="frame" id="page2">
                            <h3>Ingrese Ip Impresora</h3>
                            <div class="input-control select">
                        	<select name="rangored" title="rangored" id="rango">
                                    	<?php
						for($i=0;$i<count($array_rangos);$i++) {
					        	echo "<option value=".$i.">".$array_rangos[$i]."</option>" ;
						}
					?>
                                  </select>                 
                            </div>
                            <div class="input-control text">
                                <input type="text" name="red" id="red">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bred">Buscar Registro" </button></center>
                        </div>
                             
                        </div>
                       
</div>
                </div>
  </form>
    <br><br>
    <center>
        <h1><small>Atras</small></h1>
                <a href="../altas/indexaltas.php" class="back-button big page-back"></a>
    </center>
</body>

