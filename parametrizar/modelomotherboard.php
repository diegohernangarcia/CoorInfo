<?php
    $marca=$_POST["marcamotherboard"];
    $modelo=$_POST["motherboard"];
    include("../BD/BDMotherboard.php");
    $modelo=strtoupper($modelo);
    DevuelvoIdMarcaMotherboard($marca,$Marca);
    if ($modelo=="") {
        include("../mensajes/IngresarModelo.php");
        die();
    }
    EstaMarcaModeloMother($Marca,$modelo,$salida);
    //echo ("SALIDA ".$salida);
    if ($salida==1) {
        include("../mensajes/modeloyaexiste.php");
        die();
    }
   AgregarModeloMother($Marca,$modelo);
    include("../mensajes/modelook.php");
    

?>
