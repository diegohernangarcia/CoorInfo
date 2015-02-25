<?php
    $cd=$_POST["cddvd"];
    include("../BD/BDCD.php");
    $cd=strtoupper($cd);
    EstaCD($cd,$salida);
    
    if ($salida==1) {
         //echo ($salida);
        include ("../mensajes/marcayaexiste.php");
     } else {
         AgregarCD($cd);
         include("../mensajes/MarcaOk.php");
     }
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
