<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
  

    <link href="../Metro/css/modern.css" rel="stylesheet">
    <link href="../css/modern-responsive.css" rel="stylesheet">
    <link href="../css/site.css" rel="stylesheet" type="text/css">
   <!--  <link href="js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"> -->

    <script src="../Metro/js/jquery-1.8.2.min.js"></script>
    <script src="../Metro/js/google-code-prettify/prettify.js"></script>
    <script src="../Metro/js/pagecontrol.js"></script> 
    

    <title>Coordinacion Informatica</title>
    <!-- <style type="text/css">
	body,td,th {
	font-family: "Segoe UI Semilight", "Open Sans", Verdana, Arial, Helvetica, sans-serif;
	}
	body {
	background-image: url(../images/fondo.jpg);
	}
	</style> -->
</head>
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
			function validar(formulario) {
				if (formulario.areaseleccionada.value=0)
					{
						alert("Debe de seleccionar un area");
						formulario.areaseleccionada.focus()
						return (false);
					}
				if (formulario.oficina.value.length < 1)
					{
						alert("Debe de seleccionar un oficina");
						formulario.oficina.focus()
						return (false);
					}
				if (formulario.interno.value.length < 1)
					{
						alert("Debe de seleccionar un numero de interno");
						formulario.interno.focus()
						return (false);
					}
				if (formulario.ip.value.length < 1)
					{
						alert("Debe de seleccionar un numero de ip");
						formulario.ip.focus()
						return (false);
					}
				if (formulario.usuario.value.length < 1)
					{
						alert("Debe de seleccionar un usuario del equipo");
						formulario.usuario.focus()
						return (false);
					}
				if (formulario.memoria.value.length < 1)
					{
						alert("Debe de seleccionar la cantidad de memoria");
						formulario.usuario.focus()
						return (false);
					}
				if (formulario.marcacpu.value=="0") 
					{
						alert("Debe de seleccionar la marca del microprocesador");
						formulario.usuario.focus()
						return (false);
					}
				if (formulario.marcamotherboard.value=="0") 
					{
						alert("Debe de seleccionar la marca del motherboard");
						formulario.marcamotherboard.focus()
						return (false);
					}
				if (formulario.marcahd.value=="0") 
					{
						alert("Debe de seleccionar la marca del disco duro");
						formulario.marcahd.focus()
						return (false);
					}
				if (formulario.marcacd.value=="0") 
					{
						alert("Debe de seleccionar la marca del lector/grabador");
						formulario.marcacd.focus()
						return (false);
					}
				if (formulario.marcamonitor.value=="0") 
					{
						alert("Debe de seleccionar la marca del monitor");
						formulario.marcamonitor.focus()
						return (false);
					}
				if (formulario.serialmonitor.value.length < 1)
					{
						alert("Debe de seleccionar el serie del monitor");
						formulario.serialmonitor.focus()
						return (false);
					}
				
				
					
					
				
				}
				
			
		</script>


<body class="modern-ui" onload="prettyPrint()">
    <?php
    	include("../BD/BDAreas.php");
    	DevuelvoArrayAreas($array_areas);
    	include("../BD/BDRangos.php");
    	DevuelvoArrayRangos($array_rangos);
    	include("../BD/BDSistemaOperativo.php");
    	DevuelvoArraySistemaOperativo($array_sistemaoperativo);
    	include("../BD/BDMemoria.php");
    	DevuelvoArrayMemoria($array_memoria);
    ?>
    
    
    <form name="altaequipo" id="altaequipo" onSubmit="return validar(this)" action="grabar.php" method="post">
    <div class="page secondary">


        <div class="page-header">
            <div class="page-header-content">
                <h1>Alta Equipos<small>beta</small></h1>
                <a href="indexaltas.php" class="back-button big page-back"></a>
            </div>
        </div>

        <div class="page-region">
            <div class="page-region-content">

                <div class="page-control span11" data-role="page-control">
                    <span class="menu-pull"></span>
                    <div class="menu-pull-bar"></div>

                    <ul>
                        <li class="active"><a href="#page1">Identificacion</a></li>
                        <li><a href="#page2">Hardware</a></li>
                        <li><a href="#page3">Perifericos</li>
                        <li><a href="#page4">Finalizar</a></li> 
                    </ul>

                    <div class="frames">
                        <div class="frame active" id="page1">
                        <h3>Area</h3>
 				    <div class="input-control select" >
                                    	<select name="quearea" id="quearea" span10 >
                                    		<?php
							for($i=0;$i<count($array_areas);$i++) {
						        	echo "<option value=".$i.">".$array_areas[$i]."</option>" ;
						        	//echo "<option>".$array_areas[$i]."</option>";
						}
						?>
	                                </select>
	                              </div>
                        
                        <h3>Oficina Nº</h3>
                        <div class="input-control text"  span10>
                        	<input type="text" name="oficina" id="oficina">
                                <span class="helper"></span>
                        </div>
                        <h3>Interno</h3>
                        <div class="input-control text" >
                        	<input type="text" name="interno" id="interno">
                                <span class="helper"></span>
                        </div>
                        <h3>Rango Ip</h3>
                        <div class="input-control select" >
                        	<select name="rango" title="rango" id="rango">
                                    	<?php
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
                        <h3>Usuario</h3>
                        <div class="input-control text" >
                        	<input type="text" name="usuario" id="usuario">
                                <span class="helper"></span>
                        </div>
                        </div>
                        <div class="frame" id="page2">
                            <h2></h2>
                            
                            <h3>Sistema Operativo</h3>
 			    <div class="input-control select" >
                                    <select name="sistemaoperativo" id="sistemaoperativo">
                                      <?php
						for($i=0;$i<count($array_sistemaoperativo);$i++) {
					        	echo "<option value=".$i.">".$array_sistemaoperativo[$i]."</option>" ;
						}
					?>
                                    </select>
                            </div>
                            <h3>CPU Marca</h3>
  	  		
                        <?php
                        	include("select_cpu.php");
                        ?>
                        <h3>Motherboard</h3>
  	  		<?php
  	  			include("select_mother.php");
  	  		?>
  	  		
  	  		
                        <h3>Memoria</h3>
  	  		<div class="input-control select" >
                                   <select name="memoria" id="memoria">
                                        <?php
						for($i=0;$i<count($array_memoria);$i++) {
					        	echo "<option value=".$i.">".$array_memoria[$i]."</option>" ;
						}
					?>
                                        
                                        
                                        
                                    </select>
                        </div>
                        
                        <h3>Disco Duro</h3>
  	  			<?php
  	  				include("select_hd.php");
  	  			?>	
                        <h3>CD/DVD</h3>
  	  			<?php
  	  				include("select_cd.php");
  	  			?>
                        </div>
                        <div class="frame" id="page3">
                        <h3>Monitor</h3>
  	  			<?php
  	  				include("select_monitor.php");
  	  			?>

                         <h3>Serial Monitor</h3>
                        <div class="input-control text"span10>
                        	<input type="text"  name="serialmonitor" id="serialmonitor" >
                                <span class="helper"></span>
                        </div>
                        </div>
                        <div class="frame" id="page4">
                            <h2></h2>
                            <center><button class="bg-color-blue">Grabar Registro</button> <center>    
                            
                        </div>
                    </div>
                </div>
   </form>
</body>
</html>
