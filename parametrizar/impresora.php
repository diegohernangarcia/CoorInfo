<?php
    $impresora=$_POST["impresora"];
     include("../BD/BDImpresoras.php");
    $impresora=strtoupper($impresora);
    EstaImpresora($impresora,$salida);
    
    if ($salida==1) {
         //echo ($salida);
        include ("../mensajes/marcayaexiste.php");
     } else {
         AgregarImpresora($impresora);
         include("../mensajes/MarcaOk.php");
     }
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
