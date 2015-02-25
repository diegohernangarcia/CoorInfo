<?php
    //include ("../../mensajes/cambiosrealizados.php")
session_start();
$marca=$_POST["marcamotherboard"];
$modelo=$_POST["modelomotherboard"];
$id=$_SESSION["CualId"]; 
//echo("Area ".$area. " Id ".$id);
//$consulta="UPDATE equipo SET sector='".$area."' WHERE id='".$id."'";
include("../../BD/BDMotherboard.php");
include("../../BD/BDEquipo.php");
DevuelvoDescripcionModeloMother($modelo,$marca,$ModeloMother);
DevuelvoIdModeloMotherboard($marca, $ModeloMother, $salida);
//echo ("MARCA ".$marca." Modelo ".$salida);
ActualizoMother($salida, $id);
?>
