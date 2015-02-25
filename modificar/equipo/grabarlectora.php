<?php
    //include ("../../mensajes/cambiosrealizados.php")
session_start();
$marca=$_POST["marcacd"];
$modelo=$_POST["modelocd"];
$id=$_SESSION["CualId"]; 
//echo("Area ".$area. " Id ".$id);
//$consulta="UPDATE equipo SET sector='".$area."' WHERE id='".$id."'";
include("../../BD/BDCD.php");
include("../../BD/BDEquipo.php");
//DevuelvoDescripcionModeloMother($modelo,$marca,$ModeloMother);
//DevuelvoIdModeloMotherboard($marca, $ModeloMother, $salida);

DevuelvoDescripcionModeloCd($modelo,$marca,$ModeloCD);
DevuelvoIdModeloCd($marca, $ModeloCD, $salida);


//echo ("MARCA ".$marca." Modelo ".$salida);
ActualizoLectora($salida, $id);
?>
