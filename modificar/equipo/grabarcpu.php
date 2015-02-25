<?php
    //include ("../../mensajes/cambiosrealizados.php")
session_start();
$marca=$_POST["marcacpu"];
$modelo=$_POST["modelocpu"];
$id=$_SESSION["CualId"]; 
//echo("Area ".$area. " Id ".$id);
//$consulta="UPDATE equipo SET sector='".$area."' WHERE id='".$id."'";
include("../../BD/BDCpu.php");
include("../../BD/BDEquipo.php");
DevuelvoDescripcionModeloCPU($modelo,$marca,$ModeloCpu);

DevuelvoIdModeloCPU($marca,$ModeloCpu,$IdModeloCPU);
ActualizoCPU($IdModeloCPU, $id)
?>
