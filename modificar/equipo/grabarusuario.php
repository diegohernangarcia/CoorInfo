<?php
    //include ("../../mensajes/cambiosrealizados.php")
session_start();
$usuario=$_POST["usuario"];
$id=$_SESSION["CualId"]; 
//echo("Area ".$area. " Id ".$id);
//$consulta="UPDATE equipo SET sector='".$area."' WHERE id='".$id."'";
include("../../BD/BDEquipo.php");
ActualizoUsuario($usuario, $id)
?>
