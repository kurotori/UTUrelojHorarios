<?php
//$titulo="---";
$escuela="Escuela Técnica de Melo";
$encabezadohtml ="<html><head>
		<meta http-equiv='Content-type' content='text/html;charset=UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<link rel='stylesheet' href='utu.css'>
        <link rel='stylesheet' href='jqueryui/jquery-ui.css'>
        ".$cssExtra."
		<script type='text/javascript' src='jquery.js'></script>
        <script type='text/javascript' src='jqueryui/jquery-ui.js'></script>
		<script type='text/javascript' src='utu.js'></script>
        <script>".$jsExtra."</script>
		<title>".$escuela." - ".$titulo."</title>
	</head>
	<body onload='loginMal(estado)'>";

$encabezadohtmlcam = "<html><head>
		<meta http-equiv='Content-type' content='text/html;charset=UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<link rel='stylesheet' href='utu.css'>
        <link rel='stylesheet' href='jqueryui/jquery-ui.css'>
        ".$cssExtra."
		<script type='text/javascript' src='jquery.js'></script>
        <script type='text/javascript' src='jqueryui/jquery-ui.js'></script>
		<script type='text/javascript' src='utu.js'></script>
        <script>".$jsExtra."</script>
		<title>".$escuela." - ".$titulo."</title>
	</head>
	<body onload='document.acceso.cedula.focus();loginMal(estado);'>";

$piehtmlbasico="
    </body>
</html>";

$volver="<div id='volver' onclick='history.go(-1);'><a href='#'>&lt;&lt; Volver</a></div>"

?>