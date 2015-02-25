<?php
    $disco=$_POST["discoduro"];
    include("../BD/BDHd.php");
    $disco=strtoupper($disco);
    EstaHD($disco,$salida);
    
    if ($salida==1) {
         //echo ($salida);
        include ("../mensajes/marcayaexiste.php");
     } else {
         AgregarHD($disco);
         include("../mensajes/MarcaOk.php");
     }
?>
