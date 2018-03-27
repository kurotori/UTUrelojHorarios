<?php
    function crearMarca($ci_funcionario,$dia,$hora,$tipo,$coneccion){
        $coneccion->query("insert into marcas (dia,hora,tipo) values ('$dia','$hora','$tipo')");
        $ultMarca=$coneccion->query("select ID from marcas order by ID desc limit 1");
        $idMarca=$ultMarca["ID"];
        echo "<p>AAAAA-- $idMarca --AAAA</p>";
        $coneccion->query("insert into genera(ci_funcionario,id_marcas) values ($ci, $idMarca)");
        return 1;
    }


?>