<?php
if (isset($_POST["bcpu"])) {
    include("cpu.php");
}   
if (isset($_POST["bmotherboard"])) {
    include("motherboard.php");
}
if (isset($_POST["bdiscoduro"])) {
    include("discoduro.php");
}
if (isset($_POST["bcddvd"])) {
    include("cddvd.php");
}
if (isset($_POST["bmonitor"])) {
    include("monitor.php");
}

if (isset($_POST["bimpresora"])) {
    include("impresora.php");
}


?>
