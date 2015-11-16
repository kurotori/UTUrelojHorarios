<?php
    $estado=$_GET['estado'];
    $titulo="Registro de Asistencias";
    $cssExtra="";
    $jsExtra="";
    
    if($estado=="true"){
        $jsExtra="var estado=true;";
    }
    else if($estado=="false"){
        $jsExtra="var estado=false;";
    }
    else{
        $jsExtra="var estado=true;";
    }

    

    include 'parteshtml.php';
    echo $encabezadohtmlcam;
    
?>    
<div id="marco" class="cuadro-login-admin ui-corner-all">
    <div id="encabezado" class="titulo ui-corner-tl ui-corner-tr">
        <div style="width:40px;height:100%;float:left;margin-top:-3px;">
            <img class="icono-usuario" src="img/glypho/png/bell70w.png">
        </div>
        <div style="width:90%;height:100%;float:left;">
            <?php echo $titulo; ?>
        </div>
    </div>
    
    <div id="contenido" class="contenido">
        <div id="cuadro-camara" name="cuadro-camara" class="ui-corner-all"></div>
        <script>
            Webcam.set({
                width: 320,
                height: 240,
                force_flash: false,
                image_format: 'jpeg',
                jpeg_quality: 10
            });
            Webcam.attach( '#cuadro-camara' );
        </script>
        <form name="acceso" action="">
            <table class="tabla-ingreso-datos">
                <tr>
                    <th colspan="2">Cédula de Identidad</th>
                </tr>
                <tr>
                    <td class="tabla-ingreso-datos-celda-icono">
                        <img class="icono-usuario" src="img/glypho/png/user7.png">
                    </td>
                    <td>
                        <input type="text" class="ingreso-datos" autocomplete="off" id="cedula" name="cedula" size="8" maxlength="8">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p id="loginMal">
                            Cédula Incorrecta
                        </p>
                        
                        <input type="submit" value="Firmar" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" style="font-size:18px;">
                    </td>
                </tr>
            </table>
            

        </form>
        <?php echo $volver; ?>
    </div>
</div>





<?php
    echo $piehtmlbasico;
?>