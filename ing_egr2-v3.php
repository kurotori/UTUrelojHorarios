<?php

	/* Selección de zona horaria para asegurar que la hora correcta es almacenada en el registro */
	date_default_timezone_set("America/Montevideo");
	
	/*
	Recepción de los datos del formulario de la página de registro y declaración de variables globales
	*/
	$imagen=($_POST["imagen"]);
	$cedula =($_POST["cedula"]);
	$vacio='&quot;vacio.png&quot;';
	$fecha="";
	$hora="";
	
	$titulo="Registro de Funcionarios";
	$scriptJS="
	</script>
	<!-- Este script sirve para regresar a la página de registro de forma automática -->
	<SCRIPT LANGUAGE = 'JavaScript'>
		var secs
		var timerID = null
		var timerRunning = false
		var delay = 1000

		function InitializeTimer()
		{
			// Set the length of the timer, in seconds
			secs = 20
			StopTheClock()
			StartTheTimer()
		}

		function StopTheClock()
		{
			if(timerRunning)
				clearTimeout(timerID)
			timerRunning = false
		}

		function StartTheTimer()
		{
			if (secs==0)
			{
				StopTheClock()
				// Here's where you put something useful that's
				// supposed to happen after the allotted time.
				// For example, you could display a message:
				document.actualizar.submit();
			}
			else
			{
				self.status = secs
				secs = secs - 1
				timerRunning = true
				timerID = self.setTimeout('StartTheTimer()', delay)
			}
		}
	";
	include "datos.php";
	include "head-basico.php";
	include "piedepagina.php";
    include "funciones.php";
	
	echo "
		<body ONLOAD='InitializeTimer();startTime();'>
			<!--  Este formulario permite regresar a la página de registro -->
			<form name='actualizar' action='ing_egr1.php'>
				<input type='hidden' name='nada' value='0'>
			</form>
	";
	/* -------- CONEXION A LA BASE DE DATOS -------- */	
	
	$BDConn= new mysqli($servidor,$usuario,$pword,$baseD);
        //mysqli_connect($servidor,$usuario,$pword,$baseD);
	
	$BDStatus="";

	if (mysqli_connect_errno($BDConn)){
		echo 'Fallo al conectar a MySQL: ' . mysqli_connect_error();
		}
	else {
		
		echo "<script>console.log('BD OK!!!')</script>";
	}
	
	// 1 - Chequear existencia de la CI
	$consultaCI = "select current_time(),current_date(),
                    nombre,nombre2,apellido,apellido2 
                    from funcionarios 
                    where CI='$cedula'";
	$consulta=mysqli_query($BDConn,$consultaCI);
	
	$fila=mysqli_fetch_assoc($consulta);
	
	if(count($fila)==0){
		echo("<div class='bordes alerta'>
				<img src='alerta.png'>
				<br/><br/>
				La C&eacute;dula de Identidad ingresada<br/> no se encuentra en el sistema<br/>
				</div>
			");
		exit;
		}

	else{
		echo "CI OK";
        $hora=$fila['current_time()'];
		$fecha=$fila['current_date()'];
		$nombre1=$fila['nombre'];
		$nombre2=$fila['nombre2'];
		$apellido1=$fila['apellido'];
		$apellido2=$fila['apellido2'];
		echo $hora;
        
        // 2 - Búsqueda de marcas actuales
        $consultaMarcas="SELECT marcas.tipo as tipo, marcas.dia as dia, marcas.id as id   
                        FROM funcionarios inner join genera INNER join marcas
                        WHERE funcionarios.CI = '$cedula' 
                        and marcas.ID = genera.id_marcas
                        and marcas.dia = curdate()
                        order by marcas.ID desc limit 1";
			
        /*
        $consultaMarcas -> resultset
        $listaMarcas -> lista asociativa con los resultados
        */
        
        $consultaMarcas=mysqli_query($BDConn,$consultaMarcas);
        $listaMarcas=mysqli_fetch_assoc($consultaMarcas);
        $tipoMarca = "entrada";
        if(count($listaMarcas)>0){
            /*Existe al menos un registro del dia
            Se debe chequear si este registro es de tipo ENTRADA, ya que 1 registro
            tipo SALIDA o ninguno equivalen a lo mismo: el funcionario firmó salida
            ayer (caso 0 registros) u hoy (caso 1 registro SALIDA)
            */
            printf ("%s (%s) %s - %s - \n", $listaMarcas["tipo"],$listaMarcas["dia"],$listaMarcas["id"],($listaMarcas["tipo"]=="entrada") );
            echo "linea 138 ok";
            if($listaMarcas["tipo"]=="entrada"){
                $tipoMarca = "salida";
            }
            $BDConn->query("insert into marcas (dia,hora,tipo) values ('$fecha','$hora','$tipoMarca')");
        }
        else {
            echo "- else fila 148 OK -";
            $BDConn->query("insert into marcas (dia,hora,tipo) values ('$fecha','$hora','$tipoMarca')");

        }
        
        $ultMarcaQ=$BDConn->query("select ID from marcas order by ID desc limit 1");
        $ultMarca=mysqli_fetch_assoc($ultMarcaQ);
        $idMarca=$ultMarca["ID"];
        echo "<p>AAAAA-- $idMarca --AAAA</p>";
        $BDConn->query("insert into genera(ci_funcionario,id_marcas) values ('$cedula', $idMarca)");
        echo $tipoMarca; 
    			
		}
	
	mysqli_close($BDConn);
?>