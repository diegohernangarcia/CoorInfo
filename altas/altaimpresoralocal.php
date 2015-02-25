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
				if (formulario.quearea.value=0)
					{
						alert("Debe de seleccionar un area");
						formulario.quearea.focus()
						return (false);
					}
                                if (formulario.oficina.value.length < 1)
					{
						alert("Debe de seleccionar una oficina");
						formulario.oficina.focus()
						return (false);
					}
                                if (formulario.marcaimpresora.value=="0") 
					{
						alert("Debe de seleccionar la marca de la impresora");
						formulario.marcaimpresora.focus()
						return (false);
					}
                                if (formulario.rango.value=0)
					{
						alert("Debe de seleccionar un rango");
						formulario.rango.focus()
						return (false);
					}
                                 if (formulario.serialimpresora.value.length < 1)
					{
						alert("Debe de seleccionar un numero de serie de la impresora");
						formulario.serialimpresora.focus()
						return (false);
					}
                                 if (formulario.ip.value.length < 1)
					{
						alert("Debe de seleccionar un numero de ip");
						formulario.serialimpresora.focus()
						return (false);
					}
                                 
                                
                                
				}
				
			
		</script>
<body class="modern-ui" onload="prettyPrint()">
<?php
	//include("../BD/BDImpresoras.php");	
	include("../BD/BDRangos.php");
    	DevuelvoArrayRangos($array_rangos);
    	include("../BD/BDEquipo.php");
    	DevuelvoArrayipusadas($array_ips);
        include("../BD/BDAreas.php");
        DevuelvoArrayAreasOrdenada($array_areas);
	
 
?>
<form name="altaimpresoralocal" id="altaimpresoralocal"  action="grabarimpresoralocal.php" method="post">
	<div class="page secondary">
	<div class="page-header">
		<div class="page-header-content">
        	        <h1>Alta Impresoras Locales<small>beta</small></h1>
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
                        	<li><a href="#page2">Finalizar</a></li>
                    	</ul>
                    	<div class="frames">
                        	<div class="frame active" id="page1">
                                        <h3> Area </h3>
                                        <div class="input-control select" >
                                    	<select name="quearea" id="quearea" span10 >
                                    		<?php
							foreach ($array_areas as $descripcion) {
                                                            echo("<option>$descripcion</option>");
                                                            echo ($descripcion);
                                                        }
						?>
	                                </select>
                                        </div>
                                        <h3> Oficina </h3>
                                        <div class="input-control text"span6>
                        			<input type="text"  name="oficina" id="oficina" >
                                		<span class="helper"></span>
                        		</div>
                                        
                                    
                                    
                                        <h3>Impresora</h3>
						<?php
							include("select_impresora.php");
        					?> 
					<h3>Serial Impresora</h3>
                        		<div class="input-control text"span6>
                        			<input type="text"  name="serialimpresora" id="serialimpresora" >
                                		<span class="helper"></span>
                        		</div>
                        		<h3>Rango</h3>
                        			 <div class="input-control select" >
                                                    <select name="rango" title="rango" id="rango">
                                                       <?php
                                                       
                                                       foreach ($array_rangos as $descripcion) {
                                                            echo("<option>$descripcion</option>");
                                                            //echo ("1");
                                                        }
                                                       ?>
                                                    </select>  
                                                </div>
                                        <h3>Ip Equipo a la cual esta conectada la impresora</h3>
                                        <div class="input-control text"span6>
                        			<input type="text"  name="ip" id="ip" >
                                		<span class="helper"></span>
                        		</div>
                                        
                        		                   		
                        		
		    		</div>
		    		<div class="frame" id="page2">
                            		<h2></h2>
                            		<center><button class="bg-color-blue">Grabar Registro</button> <center>    
                                </div>  
		    	</div>
		    </div>
		   </div>
	</div>
</div>
		  
		      
        
</form>
</body>
