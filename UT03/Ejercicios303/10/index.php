<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3.10</title>
</head>
<body>
    <?php
        define("HOST", "localhost");
        define("USER", "escuela");
        define("PASS", "escuela");
        define("BD", "escuela");

        $alumno = array(
            "DNI" => "17454985B",
            "nombre" => "Sara",
            "apellidos" => "Freile Freile",
            "fechaNacimiento" => "2000-12-01",
            "direccion" => "hola buenas tardes",
            "localidad" => "Valladolid",
            "telefono" => 789456132,
        );


        try {
            echo "<p>Iniciando la conexion 1... </p>";
            $con1 = new mysqli(HOST, USER, PASS, BD);
            echo "<p>Conexion establecida... </p>";
            $con1->autocommit(false);
            $con1->begin_transaction();
            echo "<p>Transacción iniciada... </p>";
            $sql1 = "INSERT INTO alumnos (DNI, nombre, apellidos, fechaNacimiento, direccion, localidad, telefono) values ('".$alumno['DNI']."', '".$alumno['nombre']."', '".$alumno['apellidos']."', '".$alumno['fechaNacimiento']."', '".$alumno['direccion']."', '".$alumno['localidad']."', '".$alumno['telefono']."')";
            $result_insert = $con1->query($sql1);
            if($result_insert) {
                echo "<p>Alumno Insertado </p>";
            } else {
                echo "<p>Alumno no Insertado </p>";
            }
            
            // Mostrar datos desde con1
            $sql = "SELECT * FROM alumnos";
            $result1 = $con1->query($sql);
            if($result1 && $result1->num_rows>0) {
                $datos = array();
                while($registro = $result1->fetch_row()) {
                    $datos[] = $registro;
                }
                echo "<p>Alumnos (con1)</p>";
                echo "<pre>";
                print_r($datos);
                echo "</pre>";
            } else {
                echo "No hay alumnos";
            }

            // Creamos segunda conexion
            echo "<p>Iniciando conexion 2...</p>";
            $con2 = new mysqli(HOST,USER,PASS,BD);
            echo "<p>Conexion establecida</p>";
            $sql = "SELECT * FROM alumnos";
            $result2 = $con2->query($sql);
            $con2->close();
            echo "<p>Alumnos (con2)</p>";
            if($result2 && $result2->num_rows>0) {
                $datos = array();
                while($registro = $result2->fetch_row()) {
                    $datos[] = $registro;
                }
                echo "<pre>";
                echo print_r($datos);
                echo "</pre>";
            }
            else {
                echo "<p>No hay datos</p>";
            }

            //Finalizamos la transaccion
            if($result_insert) {
                $con1->commit();
                echo "<p>Transaccion finalizada con exito</p>";
            }
            else {
                $con1->rollback();
                echo "<p>Transaccion finalizada sin exito</p>";
            }
            $con1->close();

            echo "<p>Iniciando conexion 2...</p>";
            $con3 = new mysqli(HOST,USER,PASS,BD);
            echo "<p>Conexion establecida</p>";
            $sql = "SELECT * FROM alumnos";
            $result3 = $con3->query($sql);
            $con3->close();
            echo "<p>Alumnos (con3)</p>";
            if($result3 && $result3->num_rows>0) {
                $datos = array();
                while($registro = $result3->fetch_row()) {
                    $datos[] = $registro;
                }
                echo "<pre>";
                echo print_r($datos);
                echo "</pre>";
            }
            else {
                echo "<p>No hay datos</p>";
            }
        }catch (Exception $e) {
            echo "<p>Error: {$e->getMessage()}</p>";
        }
    ?>
</body>
</html>