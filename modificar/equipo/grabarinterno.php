<?php
    //include ("../../mensajes/cambiosrealizados.php")
session_start();
$interno=$_POST["interno"];
$id=$_SESSION["CualId"]; 
//echo("Area ".$area. " Id ".$id);
//$consulta="UPDATE equipo SET sector='".$area."' WHERE id='".$id."'";
include("../../BD/BDEquipo.php");
ActualizoInterno($interno, $id);
?>
