
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <link href="../Metro/css/modern.css" rel="stylesheet">
    <link href="../css/modern-responsive.css" rel="stylesheet">
    <link href="../css/site.css" rel="stylesheet" type="text/css">
    <script src="../Metro/js/jquery-1.8.2.min.js"></script>
    <script src="../Metro/js/google-code-prettify/prettify.js"></script>
    <script src="../Metro/js/pagecontrol.js"></script> 
    <title>Coordinacion Informatica</title>
</head>
<body class="modern-ui" onload="prettyPrint()">
    <?php
    include("../BD/BDIncidente.php");
   // session_start();
    //$codigo=$_SESSION["CualId"];
    //session_destroy();
    //echo("aca tambien van botones, para editar, mudar, eliminar, etc...<br>");
    //echo ("nueva incidencia3");
    //echo("<br> Id ".$codigo);
    DevuelvoArrayIncidentes($array_incidentes);
?>
<form name="altaequipo" id="altaequipo" onSubmit="return validar(this)" action="grabar.php" method="post">
    <center><img src="../images/logo.jpg" width="750" height="80" alt="LOGO MINISTERIO" align="middle"></center>
    <div class="page secondary">
        <div class="page-header">
            <div class="page-header-content">
                <h1>Nuevo Incidente<small>beta</small></h1>
                <a href="nuevaequipo1.php" class="back-button big page-back"></a>
            </div>
        </div>
        <div class="page-region">
            <div class="page-region-content">

                <div class="page-control span11" data-role="page-control">
                    <span class="menu-pull"></span>
                    <div class="menu-pull-bar"></div>

                    <ul>
                        <li class="active"><a href="#page1">Incidente</a></li>
                        <li><a href="#page2">Terminar</a></li>
                    </ul>

                    <div class="frames">
                        <div class="frame active" id="page1">
                            <h3> Incidente </h3>
                            <div class="input-control select" span="5" >
                        	<select name="incidente" title="incidente" id="rango">
                                    	<?php
						for($i=0;$i<count($array_incidentes);$i++) {
					        	echo "<option value=".$i.">".$array_incidentes[$i]."</option>" ;
						}
					?>
                                  </select>                 
                            </div>
                            <h3> Tecnico </h3>
                            <div class="input-control text"  span7>
                                <input type="text" name="tecnico" id="tecnico">
                                <span class="helper"></span>
                            </div>
                            <h3> Fecha </h3>
                            <?php $fecha=  date("j/m/Y"); ?>
                            <div class="input-control text disabled"  name="fecha">
                                    <input type="text" disabled="" name="fecha" id="fecha" value="<?php echo($fecha); ?>">
                                    <button class="helper"></button>
                            </div>
                            <h3> Observaciones </h3>
                            <div class="input-control textarea">
                                    <textarea  name="observaciones">
                                    </textarea>
                            </div>
                        </div>
                        <div class="frame" id="page2">
                            <h3> Finalizar </h3>
                            <center><button class="bg-color-blue">Grabar Registro</button> <center> 
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>