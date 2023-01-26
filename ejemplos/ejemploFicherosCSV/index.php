<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo ficheros CSV</title>
</head>
<body>
    <?php
        //Escribir
        $alumno = array(
            "71451546g",
            "Manuel",
            "Garcia Garcia",
            "2022-02-20",
            "la buena",
            "madrid",
            "112344455"
        );
        @$file = fopen("data/escuela.csv", "a");

        if($file) {
            $numcars = fputcsv($file, $alumno, ";");
            fclose($file);
            if($numcars) {
                echo "<p>Alumno añadido</p>";
            } else {
                echo "<p>Alumno no añadido</p>";
            }
        } else {
            echo "<p>archivo inacessibe</p>";
        }
        //Leer archivo
        @$file = fopen("data/escuela.csv", "r");
        if($file) {
            $alumnos = array();
            while(!feof($file)) {
                $alumno = fgetcsv($file, 0, ";");
                if($alumno) {
                    $alumnos[] = $alumno;
                }
            }
            fclose($file);
            echo "<pre>";
            print_r($alumnos);
            echo "</pre>";
        } else {
            echo "<p>Archivos inaccesibles</p>";
        }
    ?>
</body>
</html>