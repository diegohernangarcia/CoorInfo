<?php
    $marca=$_POST["marcaimpresora"];
    $modelo=$_POST["impresora"];
    include("../BD/BDImpresoras.php");
    $modelo=strtoupper($modelo);
    DevuelvoIdMarcaImpresora($marca,$Marca);
    if ($modelo=="") {
        include("../mensajes/IngresarModelo.php");
        die();
    }
    EstaMarcaModeloImpresora($Marca,$modelo,$salida);
    //echo ("SALIDA ".$salida); 
    if ($salida==1) {
        include("../mensajes/modeloyaexiste.php");
        die();
    }
    AgregarModeloImpresora($Marca,$modelo);
    include("../mensajes/modelook.php");
    

?>
