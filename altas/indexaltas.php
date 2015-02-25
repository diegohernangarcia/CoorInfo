<?php
    ////////////////////////////////////// LEO LA COOKIE
   // $User=$_COOKIE["usuario"];
    //echo ("Tipo Usuario ".$User);
    if(!isset($_COOKIE["usuario"])) {
            ECHO ("caduco la sesion");
            die();
        } else {
            $User=$_COOKIE["usuario"]; }


if ($User=="root") {
    ?>
    <html>
    <head>
        <title>Coordinacion Informatica - Tracking</title>
        <link href="../estilos/menustyles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <center><img src="../images/logo.jpg" width="750" height="80" alt="LOGO MINISTERIO" align="middle"></center>
        <br>
        <div id='cssmenu'>
            <ul>
                <li><a href='../menus/index.php'><span>Inicio</span></a></li>
                <li class='has-sub last'><a href='#'><span>Equipos</span></a>
                    <ul>
                        <li><a href='altaequipos.php'><span>Altas</span></a></li>
                        <li><a href='../bajas/bajaequipo.php'><span>Bajas</span></a></li>
                        <li><a href='../modificar/equipo/nuevaequipo1.php'><span>Modificar</span></a></li>
                        <li class='last'><a href='../consultaequipos/nuevaequipo1.php'><span>Consultas</span></a></li>
                    </ul>
                </li>
                 <li class='has-sub last'><a href='#'><span>Impresoras en Red</span></a>
                    <ul>
                        <li><a href='altaimpresorared.php'><span>Altas</span></a></li>
                        <li><a href='../bajas/bajaimpresoraenred.php'><span>Bajas</span></a></li>
                        <li><a href='../modificar/modificarimpresorared.php'><span>Modificar</span></a></li>
                        <li class='last'><a href='../consultas/consultaimpresorared.php'><span>Consultas</span></a></li>
                    </ul>
                </li>
                <li class='has-sub last'><a href='#'><span>Impresoras Locales</span></a>
                    <ul>
                        <li><a href='altaimpresoralocal.php'><span>Altas</span></a></li>
                        <li><a href='../bajas/bajaimpresoralocal.php'><span>Bajas</span></a></li>
                        <li><a href='../modificar/modificarimpresoralocal.php'><span>Modificar</span></a></li>
                        <li class='last'><a href='../consultas/consultaimpresoralocal.php'><span>Consultas</span></a></li>
                    </ul>
                </li>
                <li class='has-sub last'><a href='#'><span>Seguimientos Equipos</span></a>
                    <ul>
                        <li><a href='../incidencias/nuevaequipo1.php'><span>Altas</span></a></li>
                        <li class='last'><a href='.php'><span>Consultas</span></a></li>
                    </ul>
                </li>
                 <li class='has-sub last'><a href='#'><span>Seguimientos Impresora</span></a>
                    <ul>
                        <li><a href=''><span>Altas</span></a></li>
                        <li class='last'><a href='.php'><span>Consultas</span></a></li>
                    </ul>
                </li>
                <li class='has-sub last'><a href='#'><span>Etiquetas</span></a>
                    <ul>
                        <li><a href='../printbarras/indexprint.php'><span>Impresion Etiquetas Equipos</span></a></li>
                        <li><a href='../printbarras/indexprintimpresora.php'><span>Impresion Etiquetas Impresoras</span></a></li>
                    </ul>
                </li>
                <li class='has-sub last'><a href='#'><span>Parametros</span></a>
                    <ul>
                        <li><a href='../parametrizar/nuevaarea.php'><span>Areas</span></a></li>
                        <li><a href='../parametrizar/nuevorango.php'><span>Rangos</span></a></li>
                        <li><a href='../parametrizar/nuevosistemaoperativo.php'><span>Sistemas Operativos</span></a></li>
                        <li><a href='../parametrizar/nuevamemoria.php'><span>Memorias</span></a></li>
                        <li><a href='../parametrizar/nuevamarca.php'><span>Marcas</span></a></li>
                        <li><a href='../parametrizar/nuevomodelo.php'><span>Modelos</span></a></li>
                    </ul>
                </li>
                <li><a href='../mensajes/Salir.php'><span>Salir</span></a></li>    
            </ul>
        </div>
        <div style="clear:both; margin: 0 0 30px 0;">&nbsp;</div>
    </body>
</html>
<?php
}
if ($User=="user1") {
    ?>
    <html>
    <head>
        <title>Coordinacion Informatica - Tracking</title>
        <link href="../estilos/menustyles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <center><img src="../images/logo.jpg" width="750" height="80" alt="LOGO MINISTERIO" align="middle"></center>
        <br>
        <div id='cssmenu'>
            <ul>
                <li><a href='../menus/index.php'><span>Inicio</span></a></li>
                <li class='has-sub last'><a href='#'><span>Equipos</span></a>
                    <ul>
                        <li><a href='altaequipos.php'><span>Altas</span></a></li>
                        <li class='last'><a href='../consultaequipos/nuevaequipo1.php'><span>Consultas</span></a></li>
                    </ul>
                </li>
                 <li class='has-sub last'><a href='#'><span>Impresoras en Red</span></a>
                    <ul>
                        <li><a href='altaimpresorared.php'><span>Altas</span></a></li>
                        <li class='last'><a href='../consultas/consultaimpresorared.php'><span>Consultas</span></a></li>
                    </ul>
                </li>
                <li class='has-sub last'><a href='#'><span>Impresoras Locales</span></a>
                    <ul>
                        <li><a href='altaimpresoralocal.php'><span>Altas</span></a></li>
                        <li class='last'><a href='../consultas/consultaimpresoralocal.php'><span>Consultas</span></a></li>
                    </ul>
                </li>
                <li class='has-sub last'><a href='#'><span>Seguimientos Equipos</span></a>
                    <ul>
                        <li><a href='../incidencias/nuevaequipo1.php'><span>Altas</span></a></li>
                        <li class='last'><a href='.php'><span>Consultas</span></a></li>
                    </ul>
                </li>
                 <li class='has-sub last'><a href='#'><span>Seguimientos Impresora</span></a>
                    <ul>
                        <li><a href=''><span>Altas</span></a></li>
                        <li class='last'><a href='.php'><span>Consultas</span></a></li>
                    </ul>
                </li>
                <li class='has-sub last'><a href='#'><span>Etiquetas</span></a>
                    <ul>
                        <li><a href='../printbarras/indexprint.php'><span>Impresion Etiquetas Equipos</span></a></li>
                        <li><a href='.php'><span>Impresion Etiquetas Impresoras En Red</span></a></li>
                        <li><a href=',php'><span>Impresion Etiquetas Impresoras Locales</span></a></li>
                    </ul>
                </li>
                
                <li><a href='../mensajes/Salir.php'><span>Salir</span></a></li>    
            </ul>
        </div>
        <div style="clear:both; margin: 0 0 30px 0;">&nbsp;</div>
    </body>
</html>
<?php
}
?>