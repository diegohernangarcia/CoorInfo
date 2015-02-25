<?php
    //include ("../../mensajes/cambiosrealizados.php")
session_start();
$area=$_POST["quearea"];
$area++;
$id=$_SESSION["CualId"]; 
//echo("Area ".$area. " Id ".$id);
//$consulta="UPDATE equipo SET sector='".$area."' WHERE id='".$id."'";
include("../../BD/BDAreas.php");
ActualizoArea($area, $id);
?>
