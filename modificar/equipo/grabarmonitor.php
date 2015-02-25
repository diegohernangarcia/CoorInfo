<?php
    //include ("../../mensajes/cambiosrealizados.php")
session_start();
$marca=$_POST["marcamonitor"];
$modelo=$_POST["modelomonitor"];
$serial=$_POST["serial"];
$id=$_SESSION["CualId"]; 
//echo("Area ".$area. " Id ".$id);
//$consulta="UPDATE equipo SET sector='".$area."' WHERE id='".$id."'";
include("../../BD/BDMonitor.php");
include("../../BD/BDEquipo.php");
//DevuelvoDescripcionModeloMother($modelo,$marca,$ModeloMother);
//DevuelvoIdModeloMotherboard($marca, $ModeloMother, $salida);

DevuelvoDescripcionModeloMonitor($modelo,$marca,$ModeloCD);
DevuelvoIdModeloMonitor($marca, $ModeloCD, $salida);


//echo ("MARCA ".$marca." Modelo ".$salida);
ActualizoMonitor($salida, $serial, $id);
?>
