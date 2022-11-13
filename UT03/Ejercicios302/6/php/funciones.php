<?php
    // Parametros BD

    /* define("HOST", "localhost");
    define("USER", "escuela");
    define("PASS", "escuela");
    define("BD", "escuela"); */

    // Funcion insertar

    /* function insertar($dni, $nombre, $apellidos, $fecha, $direccion, $localidad, $tlfn) {
            $insertado = false;
            try {
                $con = mysqli_connect(HOST, USER, PASS, BD);
                $sql = "INSERT INTO alumnos (DNI, nombre, apellidos, fechaNacimiento, direccion, localidad, telefono) values ('".$dni."', '".$nombre."', '".$apellidos."', '".$fecha."', '".$direccion."', '".$localidad."', '".$tlfn."')";
                $result = mysqli_query($con, $sql);
                if($result && mysqli_affected_rows($con)==1) {
                    $insertado = true;
                }
                mysqli_close($con);
            } catch (mysqli_sql_exception $e) {
                $insertado = false;
            }
            return $insertado;
    } */

    define("HOST","localhost");
    define("USUARIO","escuela");
    define("CONTRASEÑA","escuela");

    function insertar($bd,$tabla,$registro){
        $insertado = false;
        if (is_array($registro)){
            try {
                $con = mysqli_connect(HOST,USUARIO,CONTRASEÑA,$bd);
                // $sql = "INSERT INTO $tabla (";
                // foreach($registro as $campo => $valor) {
                //     $sql = $sql.$campo.",";
                // }
                // $sql = substr($sql,0,-1).") VALUES (";
                // foreach($registro as $campo => $valor) {
                //     $sql = $sql."'".$valor."',";
                // }
                // $sql = substr($sql,0,-1).")";
               
                $campos = "";
                $valores = "";
                foreach($registro as $campo => $valor) {
                     $campos = $campos.$campo.",";
                     $valores = $valores."'".$valor."',";
                }
                $campos = substr($campos,0,-1);
                $valores = substr($valores,0,-1);

                $sql = "INSERT INTO $tabla ($campos) VALUES ($valores)";

                $result = mysqli_query($con,$sql);
                if($result && mysqli_affected_rows($con) == 1){
                    $insertado = true;
                }  
            } catch(mysqli_sql_exception $e) {
                
            }
        }
        return $insertado;
    }
?>