<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--Creado por Walter en Micodigobeta.com.ar-->
<head>
<script src="../Metro/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Demo - Combos Dependientes </title>
</head>
<script>
$(document).ready(function(){
	$("#rango").change(function(){
		$.post("carga_ip.php",{ id:$(this).val() },function(data){$("#cualip").html(data);})
		
	});
})
</script>

<body>
<?php

        DevuelvoArrayRangos($array_rangos);
?>
<select name="rango" id="rango">
	<option selected value="0">Seleccione</option> 
		<?php
			for($i=0;$i<count($array_rangos);$i++) {
  				echo "<option value=".$i.">".$array_rangos[$i]."</option>" ;
			}
		?>
</select>
<select name="cualip" id="cualip">
	<option selected value="0">Seleccione</option>
</select>
</body>
</html>
