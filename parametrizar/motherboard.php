<?php
    $motherboard=$_POST["motherboard"];
    include("../BD/BDMotherboard.php");
    $motherboard=strtoupper($motherboard);
    EstaMotherboard($motherboard,$salida);
    
    if ($salida==1) {
         //echo ($salida);
        include ("../mensajes/marcayaexiste.php");
     } else {
         AgregarMotherboard($motherboard);
         include("../mensajes/MarcaOk.php");
     }
    
?>
