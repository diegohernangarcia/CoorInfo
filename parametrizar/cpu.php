<?php
     //echo ("cpu");
     $cpu=$_POST["cpu"];
     $cpu=strtoupper($cpu);
     EstaCPU($cpu,$salida);
     include("../BD/BDCpu.php");
     if ($salida==1) {
         //echo ($salida);
        include ("../mensajes/marcayaexiste.php");
     } else {
         AgregarCPU($cpu);
         include("../mensajes/MarcaOk.php");
     }

?>
