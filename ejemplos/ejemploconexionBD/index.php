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

        require_once("funciones/funciones.php");
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
        echo "</ul>";
    ?>
</body>
</html>