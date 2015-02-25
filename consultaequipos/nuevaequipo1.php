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
<form name="altaequipo" id="nuevaincidencia" action="nuevaincidencia2.php" method="post"> 
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
                        <li class="active"><a href="#page1">Codigo Barras</a></li>
                        <li><a href="#page2">Por Ip</a></li>
                        <li><a href="#page3">Por Id</li>
                        <li><a href="#page4">Por Usuario</a></li> 
                    </ul>
                  <div class="frames">
                        <div class="frame active" id="page1">
                            <h3>Lectora Codigo Barras</h3>
                            <div class="input-control text"  span7>
                                <input type="text" name="codigobarras" id="codigobarras">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bcodigobarras">Buscar Registro" </button></center>
                        </div>
                        <div class="frame" id="page2">
                            <h3>Por Ip</h3>
                             <div class="input-control select" span="5" >
                        	<select name="rango" title="rango" id="rango">
                                    	<?php
						for($i=0;$i<count($array_rangos);$i++) {
					        	echo "<option value=".$i.">".$array_rangos[$i]."</option>" ;
						}
					?>
                                  </select>                 
                            </div>
                            <div class="input-control text"  span7>
                                <input type="text" name="porip" id="porip">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bporip">Buscar Registro" </button></center>
                        </div>
                        <div class="frame" id="page3">
                            <h3>Por Id</h3>
                            <div class="input-control text"  span7>
                                <input type="text" name="porid" id="porid">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bporid">Buscar Registro" </button></center>
                        </div>
                      <div class="frame" id="page4">
                            <h3>Por Usuario</h3>
                            <div class="input-control text"  span7>
                                <input type="text" name="porusuario" id="porusuario">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bporusuario">Buscar Registro" </button></center>
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
