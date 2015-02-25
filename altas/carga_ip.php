<?php
$Area= $_REQUEST["id"];
include("../BD/BDEquipo.php");
$Area++;
DevuelvoArrayipusadasconrango($arreglo,$Area);
$array_select2 = $arreglo;
//el bucle para cargar las opciones
//echo "<option value=".$i.">".pucho."</option>";
for ($i=0; $i<count($array_select2);$i++){
	echo "<option value=".$i.">".$array_select2[$i]."</option>";
	
}
?>
