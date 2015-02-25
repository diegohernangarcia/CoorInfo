<?php

$Area= $_REQUEST["id"];
//realizamos la consulta
//echo($Area);
include("../BD/BDCpu.php");
DevuelvoArrayModelosSegunMarca($arreglo,$Area);

$array_select2 = $arreglo;
//el bucle para cargar las opciones
for ($i=0; $i<count($array_select2);$i++){
	echo "<option value=".$i.">".$array_select2[$i]."</option>";
}
?>
