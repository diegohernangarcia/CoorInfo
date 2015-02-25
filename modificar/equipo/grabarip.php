<?php
    //include ("../../mensajes/cambiosrealizados.php")
session_start();
$rango=$_POST["rango"];
$rango++;
$ip=$_POST["ip"];
$id=$_SESSION["CualId"]; 
//echo("Rango ".$rango. " Ip ".$ip);
include("../../BD/BDEquipo.php");
ActualizoRangoIp($rango,$ip, $id);
?>
