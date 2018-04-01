<?php
    function crearMarca($ci_funcionario,$dia,$hora,$tipo,$coneccion){
        $coneccion->query("insert into marcas (dia,hora,tipo) values ('$dia','$hora','$tipo')");
        $ultMarca=$coneccion->query("select ID from marcas order by ID desc limit 1");
        $idMarca=$ultMarca["ID"];
        echo "<p>AAAAA-- $idMarca --AAAA</p>";
        $coneccion->query("insert into genera(ci_funcionario,id_marcas) values ($ci, $idMarca)");
        return 1;
    }


    function crearSal(){
        $baseSal= "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+=][}{<>";
        
        $sal="";
        
        for($i=0;$i < 100;$i++){
            $azar=random_int(0,99);
            $sal=$sal.$baseSal[$azar];
        }
        echo "$sal";
    }
    
    // crearSal();
    
    $pass = "300ratones";
    $phash= password_hash($pass, PASSWORD_DEFAULT);
    echo($phash."<br/>");
    echo password_verify($pass,$phash);
    echo password_verify($pass,'$2y$10$BKWWKVGueDY64aX33odyPO05WZmzB8Ed2h2BoUs2BxWPXrQ3nPaFa');

?>