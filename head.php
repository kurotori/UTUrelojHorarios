<?php
	/*
	
	Encabezado html completo para las páginas del sistema
	
	*/
	echo "
		<html>
			<head>
				<meta http-equiv='Content-type' content='text/html;charset=UTF-8'>
				<link rel='stylesheet' href='/UTURelojHorarios/utu.css'>
				<link rel='stylesheet' href='/UTURelojHorarios/js/jpw/jquery.validate.password.css'>
				<link rel='stylesheet' href='/UTURelojHorarios/js/jquery-ui.css'>
				<script type='text/javascript' src='/UTURelojHorarios/js/jsw/webcam.js'></script>
				<script type='text/javascript' src='/UTURelojHorarios/js/jquery.js'></script>
				<script type='text/javascript' src='/UTURelojHorarios/js/jquery-ui.js'></script>
				<script type='text/javascript' src='/UTURelojHorarios/js/jval/jquery.validate.min.js'></script>
				<script type='text/javascript' src='/UTURelojHorarios/js/jval/localization/messages_es.js'></script>
				<title>".$titulo."</title>
				<script type='text/javascript'>
					function startTime(){
						var today=new Date();
						var h=today.getHours();
						var m=today.getMinutes();
						var s=today.getSeconds();
						m = checkTime(m);
						s = checkTime(s);
						document.getElementById('reloj').innerHTML = h+':'+m+':'+s;
						var t = setTimeout(function(){startTime()},500);
					}

					function checkTime(i) {
						if (i<10) {i = '0' + i};  // add zero in front of numbers < 10
						return i;
					}				
				".
				$scriptJS.
				"</script>
			</head>
		";
?>
