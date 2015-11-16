<?php
    $estado=true;
    $titulo="Menú Principal";
    $cssExtra="";
    $jsExtra='
    <script>
        $(function() {
            
        });
    </script>
        ';

    include 'parteshtml.php';
    
    echo $encabezadohtml;
    

?>    
<div id="marco" class="cuadro-login-admin ui-corner-all">
    <div id="encabezado" class="titulo ui-corner-tl ui-corner-tr">
        <div style="width:40px;height:100%;float:left;margin-top:-3px;">
        </div>
        <div style="width:90%;height:100%;float:left;">
            <?php echo $titulo; ?>
        </div>
    </div>
    
    <div id="contenido" class="contenido">
        <div id="menu">
             <table class="tabla-menu-inicial tabla-ingreso-datos" >
                <tr>
                    <td class="tabla-ingreso-datos-celda-icono">
                        <img class="icono-usuario" src="img/glypho/png/bell70.png">
                    </td>
                    <th>
                        <b><a href="camara.php?estado=true">Sistema de Registro de Asistencias</a></b>
                    </th>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td class="tabla-ingreso-datos-celda-icono">
                        <img class="icono-usuario" src="img/glypho/png/nut4-v2.png">
                    </td>
                    <th>
                        <b><a href="login.php?estado=true">Administración del Sistema</b></a>
                    </th>
                </tr>
            </table>
            
        </div>
        
    </div>
</div>





<?php
    echo $piehtmlbasico;
?>