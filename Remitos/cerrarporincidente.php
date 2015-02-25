<?php
    $incidente=$_POST["incidente"];
    //echo ($incidente);
    include("../BD/BDRemito.php");
    EstaIncidente($incidente,$salida);
    if ($salida==0) {
        echo("No Existe incidente");
        } 
        else {
              //echo ("Existe incidente");
            require("../BD/UsarGestion.php");
            $consultaPrinter="SELECT * FROM remitoingreso WHERE incidente='".$incidente."'";
            //echo ($consulta);
            $hacerconsultaPrinter=mysql_query($consultaPrinter,$manejador);
            $numeroerror=mysql_errno();
            $descripcionerror=mysql_error();
            if ($numeroerror!=0) {
		echo ("<br>".$$numeroerror."<br>".$descripcionerror);}
            $queequipo=mysql_result ($hacerconsultaPrinter,0,"equipo");
            $solicitante=mysql_result ($hacerconsultaPrinter,0,"solicitante");
            $fechaingreso=mysql_result ($hacerconsultaPrinter,0,"fechaingreso");
            $descripcion=mysql_result ($hacerconsultaPrinter,0,"descripcion");
            $tecnico=mysql_result ($hacerconsultaPrinter,0,"tecnico");
            $estado=mysql_result ($hacerconsultaPrinter,0,"estado");
            if ($estado=="CERRADO") {
                include("../mensajes/incidenteyacerrado.php");
                die();
            } 
            ?>
             <center><TABLE BORDER="3" CELLSPACING="2" WIDTH="1200"> 
            <TR BGCOLOR="#6D8FFF"> 
                <TD> <?php echo ("Equipo ".$queequipo) ?></TD>
                <TD><?php echo("Usuario ".$solicitante);?></TD>
                <TD><?php echo("Fecha Ingreso ".$fechaingreso);?></TD>
            </TR>
            <tr>
                <TD><?php echo("Descripcion Problema ".$descripcion);?></TD> 
                <TD><?php echo("Tecnico ".$tecnico);?></TD>
                <TD><?php echo("Nº Incidente ".$incidente);?></TD>
            </TR>
                 </table>
          <?php  
            
            
                
            
            
        }
    ?>
    <form name="cerrar" id="cerrar" action="cerrar.php" method="post">
        <br>
        <input type="hidden" name="incidente" id="incidente" value="<?php echo($incidente); ?>">
        <center><button class="bg-color-blue">Cerrar Incidente</button> <center>    
        <a href="indexremito.php" class="back-button big page-back"> Atras</a>
        </form>
                 
