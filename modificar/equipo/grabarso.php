<?php
    //include ("../../mensajes/cambiosrealizados.php")
session_start();
$so=$_POST["queso"];
$so++;
$id=$_SESSION["CualId"]; 
//echo("SISTEMA ELEGIDO ".$so);
include("../../BD/BDEquipo.php");
ActualizoSo($so, $id);
?>
