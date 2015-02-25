<?php
if (isset($_GET["bcodigobarras"])) {
    
    //echo($codigobarras);
    include("porcodigobarras.php");
}   
if (isset($_GET["bporip"])) {
    include("porip.php");
}
if (isset($_GET["bporid"])) {
    include("porid.php");
}
if (isset($_GET["bporusuario"])) {
    include("porusuario.php");
}



?>
