<html>
    <head>
        <link href="../Metro/css/modern.css" rel="stylesheet">
        <link href="../css/modern-responsive.css" rel="stylesheet">
            <meta charset="utf-8">

        <title>Coordinacion Informatica</title>
    </head>
    <body>
        <center><img src="../images/logo.jpg" width="750" height="80" alt="LOGO MINISTERIO" align="middle"></center>
        <form name="altaequipo" id="altaequipo" action="grabar.php" method="post">
             
            <center>
            <h3>Incidente Nº</h3>
            <div class="input-control text span5"  >
                <input type="text" name="incidente" id="incidente">
                <span class="helper"></span>
            </div>
            <div class="frame active" id="page1">
                <h3>Equipo</h3>
                <div class="input-control select span5 " >
                    <select name="queequipo" id="queequipo" span10 >
                          <option value="CPU">CPU</option>
                          <option value="IMPRESORA">IMPRESORA</option>
                          <option value="OTRO">OTRO</option>
	            </select>
	        </div>
           <h3>Usuario</h3>
            <div class="input-control text span5"  >
                <input type="text" name="usuario" id="usuario">
                <span class="helper"></span>
            </div>
           <h3>Fecha Ingreso</h3>
           <?php $fecha=  date("j/m/Y"); ?>
           <div class="input-control text disabled span5"  name="fecha">
              <input type="text" disabled="" name="fecha" id="fecha" value="<?php echo($fecha); ?>">
              <button class="helper"></button>
           </div>
           <h3> Observaciones </h3>
           <div class="input-control textarea span5">
              <textarea  name="observaciones">
              </textarea>
           </div>
            <h3>Tecnico</h3>
            <div class="input-control text span5"  >
                <input type="text" name="tecnico" id="tecnico">
                <span class="helper"></span>
            </div>
               
            <center><button class="bg-color-blue">Grabar Registro</button> <center>    
            <a href="indexremito.php" class="back-button big page-back"></a>
        </form>
        
    </body>
</html>