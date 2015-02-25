<?php
    $marca=$_POST["marcahd"];
    $modelo=$_POST["discoduro"];
    include("../BD/BDHd.php");
    $modelo=strtoupper($modelo);
    DevuelvoIdMarcaHD($marca,$Marca);
    if ($modelo=="") {
        include("../mensajes/IngresarModelo.php");
        die();
    }
    EstaMarcaModeloDisco($Marca,$modelo,$salida);
    //echo ("SALIDA ".$salida);
    if ($salida==1) {
        include("../mensajes/modeloyaexiste.php");
        die();
    }
   AgregarModeloDisco($Marca,$modelo);
    include("../mensajes/modelook.php");
    

?>
