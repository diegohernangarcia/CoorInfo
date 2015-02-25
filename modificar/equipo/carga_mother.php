<?php

$Area= $_REQUEST["id"];
//realizamos la consulta
//echo($Area);
include("../../BD/BDMotherboard.php");
DevuelvoArrayModelosSegunMarcaMotherboard($arreglomother,$Area);

$array_select2 = $arreglomother;
//el bucle para cargar las opciones
for ($i=0; $i<count($array_select2);$i++){
	echo "<option value=".$i.">".$array_select2[$i]."</option>";
}
?>
