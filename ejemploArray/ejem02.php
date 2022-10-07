<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
    <?php
        /*
        $alumno = array();
        $alumno['nombre'] = "Juan";
        $alumno['apellido'] = "Martin";
        $alumno['curso'] = "ESO4";
        */

        //echo "<p>Curso: {$alumno['curso']}</p>";

        /*
        $alumno = array(
            "nombre" => "Ana",
            "apellido" => "García",
            "curso" => "DAW2",
        );

        echo "<ul>";

        foreach($alumno as $campo=>$valor) {
            echo "<li>$campo: $valor</li>";
        }

        echo "</ul>";
        */

        $alumnos = array();

        $alumnos[] = array(
            "nombre" => "Juan",
            "apellido" => "Pérez",
            "curso" => "ESO1",
        );
        $alumnos[] = array(
            "nombre" => "Diego",
            "apellido" => "Freile",
            "curso" => "DAW2",
        );
        $alumnos[] = array(
            "nombre" => "Sergio",
            "apellido" => "Garcia",
            "curso" => "BACH2",
        );
        /*
        echo "<pre>";
            print_r($alumnos);
        echo "</pre>";
        */

        echo "<table>";
        echo "<tr>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>Curso</th>";
        echo "</tr>";
        foreach($alumnos as $alumno) {

            echo "<tr>";
                foreach ($alumno as $valor) {
                    echo "<td>$valor</td>";
                }
            echo "</tr>";

        }
        
        echo "</table>";
    ?>
</body>
</html>