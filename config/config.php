<?php
    $servidor="localhost:3306";
    $baseD="UTUHorarios";
    $usuario="UTU";
    $pass="2J,tczgwinez4qK";
    $BDEstado="";


    $conexion = new mysqli($servidor, $usuario, $pass, $baseD);
    
    if ($conexion->connect_errno) {
        $BDEstado = "Falló la conexión con MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
        }
    else{
        $BDEstado = "Base de Datos OK";
    }
    
    $tablas = array(0=>)

    if ($conexion->query("Select"))

?>