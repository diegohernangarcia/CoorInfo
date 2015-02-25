<?php
    $monitor=$_POST["monitor"];
     include("../BD/BDMonitor.php");
    $monitor=strtoupper($monitor);
    EstaMonitor($monitor,$salida);
    
    if ($salida==1) {
         //echo ($salida);
        include ("../mensajes/marcayaexiste.php");
     } else {
         AgregarMonitor($monitor);
         include("../mensajes/MarcaOk.php");
     }
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
