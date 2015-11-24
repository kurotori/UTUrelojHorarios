<?php
    $servidor="127.0.0.1";
    $puerto="3306";
    $baseD="utuasistencias";
    $usuario="UTU";
    $pass="2J,tczgwinez4qK";
    $BDEstado="";


    $conexion = new mysqli($servidor, $usuario, $pass, $baseD);
    
    if ($conexion->connect_errno) {
        $BDEstado = "Falló la conexión con MySQL: (" . $conexion->connect_errno . ") "
                    .$conexion->connect_error."<br>";
        }
    else{
        $BDEstado = "Base de Datos OK<br>";
    }


    $tablas = array(0=>"funcionarios","ingresos","fotos-reg");



    for($i=0;$i<count($tablas);$i++){
        
        $cons=$conexion->query("show tables from ".$baseD);

        while($chequeo=$cons->fetch_row()){
            for($h=0;$h<count($chequeo);$h++){
                if
            }
        }
    }
    echo $BDEstado;
    

?>