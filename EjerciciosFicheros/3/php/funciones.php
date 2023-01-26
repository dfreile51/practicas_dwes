<?php
    function leerCsv($ruta) {
        $alumnos = array();
        @$file = fopen("$ruta", "r");
        if($file) {
            while(!feof($file)) {
                $alumno = fgetcsv($file, 0, ";");
                if($alumno) {
                    $alumnos[] = $alumno;
                }
            }
            fclose($file);
        } else {
            echo "<p>Archivo inaccesible</p>";
        }
        return $alumnos;
    }

    function insertarAlumno($alumno, $ruta) {
        @$file = fopen("$ruta", "a");

        if($file) {
            $numcars = fputcsv($file, $alumno, ";");
            fclose($file);
            if($numcars) {
                header("Location: index.php");
            } else {
                echo "<p>Alumno no añadido</p>";
            }
        } else {
            echo "<p>Archivo inacessibe</p>";
        }
    }

    function mostrarAlumnos($alumnos) {
        echo "<table>";
            echo "<tr>";
            echo "<th>Nombre</th>";
            echo "<th>Fecha</th>";
            echo "<th>Curso</th>";
            echo "<th>Email</th>";
            echo "</tr>";
            foreach($alumnos as $alumno) {
                echo "<tr>";
                echo "<td>{$alumno[0]}</td>";
                echo "<td>{$alumno[1]}</td>";
                echo "<td>{$alumno[2]}</td>";
                echo "<td>{$alumno[3]}</td>";
                echo "</tr>";
            }
        echo "</table>";
    }
?>