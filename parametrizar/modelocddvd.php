<?php
    $marca=$_POST["marcacd"];
    $modelo=$_POST["cddvd"];
    include("../BD/BDCD.php");
    $modelo=strtoupper($modelo);
    DevuelvoIdMarcaCd($marca,$Marca);
    if ($modelo=="") {
        include("../mensajes/IngresarModelo.php");
        die();
    }
    EstaMarcaModeloCD($Marca,$modelo,$salida);
    //echo ("SALIDA ".$salida);
    if ($salida==1) {
        include("../mensajes/modeloyaexiste.php");
        die();
    }
   AgregarModeloCD($Marca,$modelo);
    include("../mensajes/modelook.php");
    

?>
