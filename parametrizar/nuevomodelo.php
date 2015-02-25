<!DOCTYPE html>
<?php 
  include("../BD/BDCpu.php");
  include("../BD/BDMotherboard.php");
  include("../BD/BDHd.php");
  include("../BD/BDCD.php");
  include("../BD/BDMonitor.php");
  include("../BD/BDImpresoras.php");
  DevuelvoArrayMarcasCPU($array_cpu);
  DevuelvoArrayMarcasMotherboard($array_motherboard);
  DevuelvoArrayMarcasHD($array_hd);
  DevuelvoArrayMarcasCD($array_cd);
  DevuelvoArrayMarcasMonitor($array_monitor);
  DevuelvoArrayMarcasImpresoras($array_impresora);
  
  
?>
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
<form name="altaequipo" id="nuevaincidencia" action="nuevomodelo2.php" method="post"> 
<center><img src="../images/logo.jpg" width="750" height="80" alt="LOGO MINISTERIO" align="middle"></center>
<div class="page secondary">
         <div class="page-header">
            <div class="page-header-content">
                 <h1>Alta Modelos<small>beta</small></h1>
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
                             <select name="marcacpu" id="marcacpu">
                                    <option selected value="0">Seleccione</option> 
                                    <?php
                                        for($i=0;$i<count($array_cpu);$i++) {
                                           // echo "<option value=".$i.">".$array_cpu[$i]."</option>" ;
                                             echo "<option> $array_cpu[$i] </option>";
                                        }   
                                    ?>
                                </select>
                            <h3>Modelo</h3>
                            <div class="input-control text"  span7>
                                <input type="text" name="cpu" id="cpu">
                                
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bcpu">Grabar Registro" </button></center>
                        </div>
                        <div class="frame" id="page2">
                            <h3>Motherboard</h3>
                            <select name="marcamotherboard" id="marcamotherboard">
                                <option selected value="0">Seleccione</option>
                                <?php
                                    for($i=0;$i<count($array_motherboard);$i++) {
                                        //echo "<option value=".$i.">".$array_motherboard[$i]."</option>" ;
                                        echo "<option> $array_motherboard[$i] </option>";
                                    }
                                ?>
                            </select>
                            <h3>Modelo</h3>
                            
                            <div class="input-control text"  span7>
                                <input type="text" name="motherboard" id="motherboard">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bmotherboard">Grabar Registro" </button></center>
                        </div>
                        <div class="frame" id="page3">
                            <h3>Disco Duro</h3>
                            <select name="marcahd" id="marcahd">
                                <option selected value="0">Seleccione</option> 
                                <?php
                                    for($i=0;$i<count($array_hd);$i++) {
                                        //echo "<option value=".$i.">".$array_hd[$i]."</option>" ;
                                        echo "<option> $array_hd[$i] </option>";
                                    }
                                ?>
                            </select>
                            <h3>Modelo</h3>
                            <div class="input-control text"  span7>
                                <input type="text" name="discoduro" id="discoduro">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bdiscoduro">Grabar Registro" </button></center>
                        </div>
                      <div class="frame" id="page4">
                            <h3>CD/DVD</h3>
                            <select name="marcacd" id="marcacd">
                                <option selected value="0">Seleccione</option> 
                                <?php
                                    for($i=0;$i<count($array_cd);$i++) {
                                        //echo "<option value=".$i.">".$array_cd[$i]."</option>" ;
                                        echo "<option> $array_cd[$i] </option>";
                                    }
                                ?>
                            </select>
                            <h3>Modelo</h3>
                            <div class="input-control text"  span7>
                                <input type="text" name="cddvd" id="cddvd">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bcddvd">Grabar Registro" </button></center>
                      </div>
                        <div class="frame" id="page5">
                            <h3>Monitor</h3>
                            <select name="marcamonitor" id="marcamonitor">
                                <option selected value="0">Seleccione</option> 
                                <?php
                                    for($i=0;$i<count($array_monitor);$i++) {
                                        //echo "<option value=".$i.">".$array_monitor[$i]."</option>" ;
                                        echo "<option> $array_monitor[$i] </option>";
                                    }
                                ?>
                            </select>
                            <h3>Modelo</h3>
                            <div class="input-control text"  span7>
                                <input type="text" name="monitor" id="monitor">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bmonitor">Grabar Registro" </button></center>
                      </div>
                      <div class="frame" id="page6">
                            <h3>Impresora</h3>
                            <select name="marcaimpresora" id="marcaimpresora">
                                <option selected value="0">Seleccione</option> 
                                <?php
                                    for($i=0;$i<count($array_impresora);$i++) {
                                        //echo "<option value=".$i.">".$array_impresora[$i]."</option>" ;
                                        echo "<option> $array_impresora[$i] </option>";
                                    }
                                ?>
                            </select>
                            <h3>Modelo</h3>
                            <div class="input-control text"  span7>
                                <input type="text" name="impresora" id="impresora">
                                <span class="helper"></span>
                            </div>
                            <center><button class="bg-color-blue" name="bimpresora">Grabar Registro" </button></center>
                      </div>
</div>
                </div>
  </form>
    
</body>
