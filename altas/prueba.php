<?php

include("../BD/BDEquipo.php");
DevuelvoArrayipusadasconrango($arreglo,2);

$array_select2 = $arreglo;
//el bucle para cargar las opciones
for ($i=0; $i<count($array_select2);$i++){
	echo $array_select2[$i]."<BR>";
}
?>
