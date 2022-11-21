<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión a una base de datos</title>
</head>
<!-- <style>
    table {
        margin: 0 auto;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
    }
</style> -->
<body>
    <?php
        /* try {
            $con = mysqli_connect("localhost", "laescuela", "laescuela", "laescuela");
            // echo "<p>Conxeión establecida</p>";
            $curso = "ESO1";
            $sql = "SELECT * FROM alumnos WHERE curso='$curso'";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result)>0) {
                echo "<table>";
                echo "<tr>";
                echo "<th>#</th>";
                echo "<th>Nombre</th>";
                echo "<th>Apellidos</th>";
                echo "<th>Fecha Nacimiento</th>";
                echo "<th>Ciudad</th>";
                echo "<th>Telefono</th>";
                echo "<th>Cursos</th>";
                echo "</tr>";
                while($alumno = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    foreach ($alumno as $valor) {
                        echo "<td>$valor</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No hay ningun alumno en $curso</p>";
            }
            mysqli_close($con);
        } catch(mysqli_sql_exception $e) {
            echo "<p>Error de conexión: ".$e->getMessage()."</p>";
        } */

        /* require_once("funciones/funciones.php");
        $temporadas = obtenerTemporadas();
        echo "<ul>";
        foreach($temporadas as $valor) {
            if(str_starts_with($valor, 0)) {
                $valorMostrar = "20".$valor;
            } else {
                $valorMostrar = "19".$valor;
            }
            echo "<li>$valorMostrar ($valor)</li>";
        }
        echo "</ul>"; */

        /* define("HOST", "localhost");
        define("USER", "nba");
        define("PASS", "nba");
        define("BD", "nba");

        try {
            $con = mysqli_connect(HOST, USER, PASS, BD);
            $sql = "DELETE FROM equipos WHERE division='Spain'";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result)>0) {
                $eliminados = mysqli_affected_rows($con);
                echo "<h2>Equipos eliminados: $eliminados</h2>";
            } else {
                echo "<h2>No se ha elimiado ningun equipo</h2>";
            }
            mysqli_close($con);
        } catch(mysqli_sql_exception $e) {
            echo "<p>Error de conexión: ".$e->getMessage()."</p>";
        } */

        /* require_once("funciones/funciones.php");
        $equipo = array(
            'nombre' => 'Baloncesto Valencia',
            'ciudad' => 'Valencia',
            'conferecia' => 'norte',
            'division' => 'Spain',
        );
        if(insertar($equipo)) {
            echo "<h2>Equipo insertado correctamente</h2>";
        } else {
            echo "<h2>Equipo no insertado</h2>";
        } */

        /* $alumnos = array(
            array (
                "DNI" => "789789789G",
                "nombre" => "Diego",
                "apellidos" => "Fernandez Fernandez",
                "fechaNacimiento" => "1997-10-27",
                "direccion" => "la inventada",
                "localidad" => "Astorga",
                "telefono" => "78978979"
            ),
        );

        define("HOST","localhost");
        define("USER","escuela");
        define("PASS","escuela");
        define("BD","escuela");

        try {
            $con = new mysqli(HOST,USER,PASS,BD);
            $sql = "INSERT INTO alumnos(DNI, nombre, apellidos, fechaNacimiento, direccion, localidad, telefono) VALUES (?,?,?,?,?,?,?)";
            $stmt = $con->prepare($sql);
            $insertados = 0;
            foreach($alumnos as $al) {
                $stmt->bind_param("sssssss", $al['DNI'], $al['nombre'], $al['apellidos'], $al['fechaNacimiento'], $al['direccion'], $al['localidad'], $al['telefono']);
                $stmt->execute();
                $insertados += $con->affected_rows;
            }
            $stmt->close();
            $con->close();
            if($insertados>0) {
                echo "<h2>Alumnos insertados: {$insertados}</h2>";
            } else {
                echo "<h2>No se han podido insertar los alumnos</h2>";
            }
        } catch(Exception $e) {
            echo "<p>ERROR: {$e->getMessage()}</p>";
        } */

        define("HOST","localhost");
        define("USER","escuela");
        define("PASS","escuela");
        define("BD","escuela");

        try {
            $con = new mysqli(HOST, "root", "", BD);
            $sql = "
                LOAD DATA LOCAL INFILE 'csv/escuela.csv' INTO TABLE alumnos
                FIELDS TERMINATED BY ';'
                OPTIONALLY ENCLOSED BY '\"'
                LINES TERMINATED BY '\\r\n'
                IGNORE 1 LINES
                (DNI, nombre, apellidos, fechaNacimiento, direccion, localidad, telefono)
            ";
            $result = $con->query($sql);
            if($result) {
                $cambios = $con->affected_rows;
                echo "<h2>Alumnos almacenados: {$cambios}</h2>";
            } else {
                echo "<h2>Ningún alumno almacenado</h2>";
            }
            $con->close();
        } catch(Exception $e) {
            echo "<p>ERROR: {$e->getMessage()}</p>";
        }
    ?>
</body>
</html>