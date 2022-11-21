<?php
    // Parametros BD

    define("HOST","localhost");
    define("USER","escuela");
    define("PASS","escuela");
    define("BD", "escuela");

    function insertar($bd,$tabla,$registro){
        $insertado = false;
        if (is_array($registro)){
            try {
                $con = mysqli_connect(HOST,USER,PASS,$bd);
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

    function obtenerAlumnos($campo="", $valor="") {
        $alumnos = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "SELECT * FROM alumnos WHERE 1";
            if($campo!= "" && $valor != "") {
                $sql .= " AND $campo='$valor'";
            }
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $alumnos = array();
                while($reg = mysqli_fetch_assoc($result)) {
                    $alumnos[] = $reg;
                }
            }
        } catch (mysqli_sql_exception $e) {
            $alumnos = false;
        }
        return $alumnos;
    }

    function obtenerAlumnosPorId($id, $bd) {
        $alumnos = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, $bd);
            $sql = "SELECT * FROM alumnos WHERE id_alumno=$id";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $alumnos = array();
                while($reg = mysqli_fetch_assoc($result)) {
                    $alumnos[] = $reg;
                }
            }
        } catch (mysqli_sql_exception $e) {
            $alumnos = false;
        }
        return $alumnos;
    }

    /* function alumnosPorNombreOApellidos($nombre, $apellidos, $bd) {
        $alumnos = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, $bd);
            $sql = "SELECT * FROM alumnos WHERE nombre='$nombre' OR apellidos='$apellidos'";
            $result = mysqli_query($con, $sql);
            mysqli_close($con);
            if(mysqli_num_rows($result)>0) {
                $alumnos = array();
                while($reg = mysqli_fetch_assoc($result)) {
                    $alumnos[] = $reg;
                }
            }
        } catch (mysqli_sql_exception $e) {
            $alumnos = false;
        }
        return $alumnos;
    } */

    function eliminar($id, $bd) {
        $eliminado = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, $bd);
            $sql = "DELETE FROM alumnos WHERE id_alumno=$id";
            $result = mysqli_query($con, $sql);
            if($result && mysqli_affected_rows($con)==1) {
                $eliminado = true;
            }
            mysqli_close($con);
        } catch (mysqli_sql_exception $e) {
            $eliminado = false;
        }
        return $eliminado;
    }

    function actualizar($id, $bd, $dni, $nombreAlumno, $apellidosAlumno, $fechaNacimiento, $direccion, $localidad, $telefono) {
        $actualizado = false;
        try {
            $con = mysqli_connect(HOST, USER, PASS, $bd);
            $sql = "UPDATE alumnos SET DNI='$dni', nombre='$nombreAlumno', apellidos='$apellidosAlumno', fechaNacimiento='$fechaNacimiento', direccion='$direccion', localidad='$localidad', telefono='$telefono' WHERE id_alumno=$id";
            $result = mysqli_query($con, $sql);
            if($result && mysqli_affected_rows($con)==1) {
                $actualizado = true;
            }
            mysqli_close($con);
        } catch (mysqli_sql_exception $e) {
            $actualizado = false;
        }
        return $actualizado;
    }
?>