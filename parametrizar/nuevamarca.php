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
<form name="altaequipo" id="nuevaincidencia" action="nuevamarca2.php" method="post"> 
<center><img src="../images/logo.jpg" width="750" height="80" alt="LOGO MINISTERIO" align="middle"></center>
<div class="page secondary">
         <div class="page-header">
            <div class="page-header-content">
                 <h1>Alta Marcas<small>beta</small></h1>
                 <a href="../altas/indexaltas.php" class="back-button big page-back"></a>
            </div>
         </div>
         <div class="page-region">
            <div class="page-region-content">

                <div class="page-control span11" data-role="page-control">
                    <span class="menu-pull"></span>
                    <div class="menu-pull-bar"></div>
                    <ul>
                        <li class="active"><a href="#page1">CPU</a></li>
                        <li><a href="#page2">Motherboard</a></li>
                        <li><a href="#page3">Disco Duro</li>
                        <li><a href="#page4">CD/DVD</a></li> 
                         <li><a href="#page5">Monitor</a></li> 
                          <li><a href="#page6">Impresora</a></li> 
                    </ul>
                  <div class="frames">
                        <div class="frame active" id="page1">
                            <h3>CPU</h3>
                            <div class="input-control text"  span7>
                                <input type="text" name="cpu" id="cpu">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bcpu">Buscar Registro" </button></center>
                        </div>
                        <div class="frame" id="page2">
                            <h3>Motherboard</h3>
                            <div class="input-control text"  span7>
                                <input type="text" name="motherboard" id="motherboard">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bmotherboard">Buscar Registro" </button></center>
                        </div>
                        <div class="frame" id="page3">
                            <h3>Disco Duro</h3>
                            <div class="input-control text"  span7>
                                <input type="text" name="discoduro" id="discoduro">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bdiscoduro">Buscar Registro" </button></center>
                        </div>
                      <div class="frame" id="page4">
                            <h3>CD/DVD</h3>
                            <div class="input-control text"  span7>
                                <input type="text" name="cddvd" id="cddvd">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bcddvd">Buscar Registro" </button></center>
                      </div>
                        <div class="frame" id="page5">
                            <h3>Monitor</h3>
                            <div class="input-control text"  span7>
                                <input type="text" name="monitor" id="monitor">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bmonitor">Buscar Registro" </button></center>
                      </div>
                      <div class="frame" id="page6">
                            <h3>Impresora</h3>
                            <div class="input-control text"  span7>
                                <input type="text" name="impresora" id="impresora">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bimpresora">Buscar Registro" </button></center>
                      </div>
</div>
                </div>
  </form>
    
</body>
