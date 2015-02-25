<?php
    $rango=$_POST["rango"];
    $ip=$_POST["red"];
    $rango++;
    include("../BD/BDImpresoras.php");
    include("../BD/BDAreas.php");
    include("../BD/BDRangos.php");
    include("../BD/UsarGestion.php");
    $consulta="SELECT * FROM impresorared WHERE ip='".$ip."' and rango='".$rango."'";
    $hacerconsulta=mysql_query($consulta,$manejador);
    $numeroerror=mysql_errno();
    $descripcionerror=mysql_error();
    $numeroderegistros= mysql_num_rows($hacerconsulta);
    if ($numeroderegistros!=0) {
            $id=mysql_result ($hacerconsulta,0,"id");
            $area=mysql_result ($hacerconsulta,0,"area");
            $oficina=mysql_result ($hacerconsulta,0,"oficina");
            $queimpresora=mysql_result ($hacerconsulta,0,"queimpresora");
            $serie=mysql_result ($hacerconsulta,0,"serie");
            DevuelvoDescripcionImpresora($queimpresora,$marcaymodeloimpresora);
            $areaabuscar=$area-1;
            DevuelvoDescripcionArea($areaabuscar,$cualarea);
            DevuelvoDescripcionRango2($rango,$querango);
            $qr="Red ".$marcaymodeloimpresora."\nArea ".$cualarea."\nOficina ";
            $qr.=$oficina."\nSerial ".$serie."\nIp Conectada ".$querango."".$ip;
            include ("../qr/qrlib.php");
            QRcode::png($qr,'test.png', 'L', 6, 2);
            $envio=$id." -- R ".$querango."".$ip;
            session_start();
            if (!isset($_SESSION["datos_codigo_barras"])) {
    		$_SESSION["datos_codigo_barras"] = $envio; }
            include("barcodeprinter.php");
    }
    else { include("../mensajes/Noexisteimpresora.php"); }
?>
