<?php
    /*
    function conexion($bbdd){
        $serv="91.199.120.17";
        $usuario="s05bd7e4_streetwear";
        $clave="Adrian2001";
        $conn=mysqli_connect($serv,$usuario,$clave,$bbdd);
        if(mysqli_connect_errno()){
            printf("Conexion fallida: %s\n", mysqli_connect_errno());
            exit();
        }
        return $conn;
    }
    */
    
    function conexion($bbdd){
        $serv="127.0.0.1";
        $usuario="root";
        $clave="";
        $conn=mysqli_connect($serv,$usuario,$clave,$bbdd);
        if(mysqli_connect_errno()){
            printf("Conexion fallida: %s\n", mysqli_connect_errno());
            exit();
        }
        return $conn;
    }

?>