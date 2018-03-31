<?php
	include "../datos.php";
	include "../head-admin.php";
    include "../funciones.php";
?>
<BODY ONLOAD="startTime();" style="background-image:none;background-color:#6e989d;">
    <div id="GUI_login">
        <form name="ingresoadmin" id="ingresoadmin" method="post" action="accesoadmin.php" >
            <div id="GUI_login_titulo">
                <h3>Ingreso Administrativo</h3>
            </div>
            <div id="GUI_login_datos">
                <div class="GUI_login_zona_campo infoglobo_izq">
                    <span class='infotexto_izq'>Cédula del Usuario</span>
                    <div id="GUI_login_icono_CI" class="GUI_login_campo_icono"></div>
                    <div class="GUI_login_campo_input">
                         <input class="GUI_login_campos" id="ci_admin" type="text" name="ci_admin" size="8" maxlength="8">
                    </div>
                </div>
                
                <div class="GUI_login_zona_campo infoglobo_izq">
                    <span class='infotexto_izq'>Contraseña</span>
                    <div id="GUI_login_icono_pass" class="GUI_login_campo_icono"></div>
                    <div class="GUI_login_campo_input">
                        <input class="GUI_login_campos" id="pass_admin" type="password" name="pass_admin" size="8" maxlength="32">
                    </div>
                </div>
                <div id="GUI_login_boton_ing" class="GUI_login_zona_campo">
                    <input type="submit" id="boton_ing" class="boton" value="Ingresar" >
                </div>
                
            </div>
        </form>
    </div>






<?php
    include "../piedepagina_admin.php"; 
?>