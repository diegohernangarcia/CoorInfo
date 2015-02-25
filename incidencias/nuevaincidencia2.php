<?php
if (isset($_POST["bcodigobarras"])) {
    
    //echo($codigobarras);
    include("porcodigobarras.php");
}   
if (isset($_POST["bporip"])) {
    include("porip.php");
}
if (isset($_POST["bporid"])) {
    include("porid.php");
}
if (isset($_POST["bporusuario"])) {
    include("porusuario.php");
}



?>
