<?php
if (isset($_POST["bcpu"])) {
    include("modelocpu.php");
}   
if (isset($_POST["bmotherboard"])) {
    include("modelomotherboard.php");
}
if (isset($_POST["bdiscoduro"])) {
    include("modelodiscoduro.php");
}
if (isset($_POST["bcddvd"])) {
    include("modelocddvd.php");
}
if (isset($_POST["bmonitor"])) {
    include("modelomonitor.php");
}

if (isset($_POST["bimpresora"])) {
    include("modeloimpresora.php");
}


?>
