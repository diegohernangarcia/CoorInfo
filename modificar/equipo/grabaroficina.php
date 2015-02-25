<?php
    //include ("../../mensajes/cambiosrealizados.php")
session_start();
$oficina=$_POST["oficina"];
$id=$_SESSION["CualId"]; 
//echo("Area ".$area. " Id ".$id);
//$consulta="UPDATE equipo SET sector='".$area."' WHERE id='".$id."'";
include("../../BD/BDEquipo.php");
ActualizoOficina($oficina, $id);
?>
