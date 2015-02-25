<?php
    $marca=$_POST["marcamonitor"];
    $modelo=$_POST["monitor"];
    include("../BD/BDMonitor.php");
    $modelo=strtoupper($modelo);
    DevuelvoIdMarcaMonitor($marca,$Marca);
    if ($modelo=="") {
        include("../mensajes/IngresarModelo.php");
        die();
    }
    EstaMarcaModeloMonitor($Marca,$modelo,$salida);
    //echo ("SALIDA ".$salida); 
    if ($salida==1) {
        include("../mensajes/modeloyaexiste.php");
        die();
    }
    AgregarModeloMonitor($Marca,$modelo);
    include("../mensajes/modelook.php");
    

?>
