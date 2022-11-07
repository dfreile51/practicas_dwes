<?php
    //Parametros BD

    define("HOST", "localhost");

    // OBTENER TABLAS DE LAS BASES DE DATOS

    function obtenerTablas($username, $password, $database) {
        $tablas = false;
        try {
            $con = mysqli_connect(HOST, $username, $password, $database);
            $sql = "SHOW TABLES";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $tablas = array();
                while($tabla = mysqli_fetch_row($result)) {
                    $tablas[] = $tabla[0];
                }
            }
        } catch(mysqli_sql_exception $e) {
            $tablas = false;
        }
        return $tablas;
    }

    // OBTENER CAMPOS DE LA TABLA

    function obtenerCampos($username, $password, $database, $tabla) {
        $campos = false;
        try {
            $con = mysqli_connect(HOST, $username, $password, $database);
            $sql = "SHOW COLUMNS FROM $tabla";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $campos = array();
                while($campo = mysqli_fetch_row($result)) {
                    $campos[] = $campo[0];
                }
            }
        } catch(mysqli_sql_exception $e) {
            $campos = false;
        }
        return $campos;
    }

    // CONSULTA IGUAL A

    function igualA($username, $password, $database, $tabla, $campo, $valor) {
        $consultas = false;
        try {
            $con = mysqli_connect(HOST, $username, $password, $database);
            $sql = "SELECT $campo FROM $tabla WHERE $campo='$valor'";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $consultas = array();
                while($consulta = mysqli_fetch_row($result)) {
                    $consultas[] = $consulta[0];
                }
            }
        } catch(mysqli_sql_exception $e) {
            $consultas = false;
        }
        return $consultas;
    }

    // CONSULTA CONTIENE

    function contiene($username, $password, $database, $tabla, $campo, $valor) {
        $contiene = false;
        try {
            $con = mysqli_connect(HOST, $username, $password, $database);
            $sql = "SELECT $campo FROM $tabla WHERE $campo LIKE '$valor'";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $contiene = array();
                while($reg = mysqli_fetch_row($result)) {
                    $contiene[] = $reg[0];
                }
            }
        } catch(mysqli_sql_exception $e) {
            $contiene = false;
        }
        return $contiene;
    }

    // CONSULTA EMPIEZA POR

    function empiezaPor($username, $password, $database, $tabla, $campo, $valor) {
        $empiezaPor = false;
        try {
            $con = mysqli_connect(HOST, $username, $password, $database);
            $sql = "SELECT $campo FROM $tabla WHERE $campo LIKE '$valor%'";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $empiezaPor = array();
                while($reg = mysqli_fetch_row($result)) {
                    $empiezaPor[] = $reg[0];
                }
            }
        } catch(mysqli_sql_exception $e) {
            $empiezaPor = false;
        }
        return $empiezaPor;
    }

    // CONSULTA TERMINA POR

    function terminaPor($username, $password, $database, $tabla, $campo, $valor) {
        $terminaPor = false;
        try {
            $con = mysqli_connect(HOST, $username, $password, $database);
            $sql = "SELECT $campo FROM $tabla WHERE $campo LIKE '%$valor'";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $terminaPor = array();
                while($reg = mysqli_fetch_row($result)) {
                    $terminaPor[] = $reg[0];
                }
            }
        } catch(mysqli_sql_exception $e) {
            $terminaPor = false;
        }
        return $terminaPor;
    }
?>