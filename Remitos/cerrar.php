<?php
    $incidente=$_POST["incidente"];
    require("../BD/UsarGestion.php");
    $consulta= "UPDATE remitoingreso SET estado='CERRADO' WHERE incidente='".$incidente."'";
    $hacerconsulta=mysql_query($consulta,$manejador);
    $numeroerror=mysql_errno();
    $descripcionerror=mysql_error();
    if ($numeroerror !=0) {
	echo ("<br>".$numeroerror."<br>".$descripcionerror);
    }
    else {
        ?>
        <script language="JavaScript" type="text/javascript">
            alert("INCDIENTE CERRADO");
        </script>
        <?php 
	include ("indexremito.php");
    }
?>
