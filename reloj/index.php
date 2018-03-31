
	<?php
	/*
    require_once("../partes-html.php");
	
	Página de registro de ingresos y egresos
	*/
	
	$titulo="Ingreso y Egreso de Funcionarios";
	/* Agregados al javascript de la página */
	$scriptJS="
		</script>
		<script type='text/javascript' src='ing_egr.js'></script>
		<script type='text/javascript'>
	";
	include "../head.php";
	include "../partes-html.php";
	?>
	
	<!-- La sección body establece el enfoque en el campo cédula del formulario y arranca el script del reloj visible en la página -->
	<BODY ONLOAD="document.ingresofuncionarios.cedula.focus();startTime();">
		<?php crear_menu(); ?>
		<!-- El div camara es donde se muestra la imágen de la cámara -->
		
		
		<!-- El div GUI_ingreso es el usado para mostrar el contenido principal de la página -->
		<div id="GUI_Ingreso" class="bordes">
            <div id="camara" class="bordes"></div>
			<p style="width:100%;text-align:center;top:5px;margin-top: 1px;margin-bottom: 1px;">
				<B>Sistema de Registro De Asistencias</B>
			</p>
			<form name="ingresofuncionarios" id="ingresofuncionarios" method="post" action="registroHora.php" onsubmit="enviar();">
				<BR/>
                <div id="GUI_Ingreso_zona_form">
                   
                    <div id="CI_form">
                        <span id="GUI_Ingreso_CI">Digite su CI:</span><br/>
                        <input type="text" id="cedula" name="cedula" size="8" maxlength="8"><br/>
                        <span class="detalle">(Digite la c&eacute;dula sin puntos ni guiones)</span>
                        <input type="hidden" id="imagen" name="imagen">
                        <br/>
                        <input type="button" id="boton_R" value="Firmar" onclick="enviar();">
                    </div>        
                    
			
                </div>
                </form>
				<br/><br/>
				<!-- Este campo oculto es donde se agregan los datos de imágen desde la cámara-->
				
		</div>	
		<div id="espere" class="bordes">
			<img width="10%" src="../img/loading.gif"><br/>
		      Espere un momento.<br/>
		      El sistema esta procesando su registro.
		</div>
	<?php 
		/* 
		piedepagina.php contiene algunos detalles que complementan la apariencia de la página
		como ser el banner con el nombre de la escuela y el reloj.
		*/
		
		include "../piedepagina.php"; 
	?>
	</BODY>
</HTML>
