<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--Creado por Walter en Micodigobeta.com.ar-->
<head>
<script src="../Metro/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Coordinacion Informatica </title>
</head>
<script>
$(document).ready(function(){
	$("#marcacd").change(function(){
		$.post("carga_cd.php",{ id:$(this).val() },function(data){$("#modelocd").html(data);})
	});
})
</script>

<body>
<?php
	include("../BD/BDCD.php");
        DevuelvoArrayMarcasCD($array_cd);
?>
<select name="marcacd" id="marcacd">
<option selected value="0">Seleccione</option> 
<?php
for($i=0;$i<count($array_cd);$i++) {
  echo "<option value=".$i.">".$array_cd[$i]."</option>" ;
//  echo "<option>".$array_cd[$i]."</option>" ;
}
?>
</select>
<select name="modelocd" id="modelocd">
<option selected value="0">Seleccione</option>
</select>
</body>
</html>
