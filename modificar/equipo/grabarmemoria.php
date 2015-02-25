<?php
    //include ("../../mensajes/cambiosrealizados.php")
session_start();
$memoria=$_POST["quememoria"];
$memoria++;
$id=$_SESSION["CualId"]; 
//echo("Area ".$area. " Id ".$id);
//$consulta="UPDATE equipo SET sector='".$area."' WHERE id='".$id."'";
include("../../BD/BDEquipo.php");
//echo ($memoria);
ActualizoMemoria($memoria, $id);
?>
