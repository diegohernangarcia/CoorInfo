<?php
    //include ("../../mensajes/cambiosrealizados.php")
session_start();
$marca=$_POST["marcahd"];
$modelo=$_POST["modelohd"];
$id=$_SESSION["CualId"]; 
//echo("Area ".$area. " Id ".$id);
//$consulta="UPDATE equipo SET sector='".$area."' WHERE id='".$id."'";
include("../../BD/BDHd.php");
include("../../BD/BDEquipo.php");
//DevuelvoDescripcionModeloMother($modelo,$marca,$ModeloMother);
//DevuelvoIdModeloMotherboard($marca, $ModeloMother, $salida);

DevuelvoDescripcionModelohd($modelo,$marca,$ModeloCD);
DevuelvoIdModeloHD($marca, $ModeloCD, $salida);


//echo ("MARCA ".$marca." Modelo ".$salida);
ActualizoHD($salida, $id);
?>
