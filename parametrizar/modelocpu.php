<?php
    $marcacpu=$_POST["marcacpu"];
    $cpu=$_POST["cpu"];
    include("../BD/BDCpu.php");
    $cpu=strtoupper($cpu);
    DevuelvoIdMarcaCPU($marcacpu,$Marca);
    if ($cpu=="") {
        include("../mensajes/IngresarModelo.php");
        die();
    }
    EstaMarcaModelo($Marca,$cpu,$salida);
    //echo ("SALIDA ".$salida);
    if ($salida==1) {
        include("../mensajes/modeloyaexiste.php");
        die();
    }
   AgregarModeloCPU($Marca,$cpu);
    include("../mensajes/modelook.php");
    

?>
