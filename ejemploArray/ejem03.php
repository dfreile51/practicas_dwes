<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $alumnos = array (
            "ASIR1" => array (
                array ( "nombre"=>"Ana", "apellido"=>"Sánchez", "telefono"=>949123123 ),
                array ( "nombre"=>"Javier", "apellido"=>"Pérez", "telefono"=>949321321 )
            ),
            "DAW1" => array (
                array ( "nombre"=>"Juan", "apellido"=>"Martínez", "telefono"=>949321123 ),
                array ( "nombre"=>"Maria", "apellido"=>"Gómez", "telefono"=>949123321 )
            ),
            "DAM1" => array (
                array ("nombre"=>"Abel", "apellido"=>"Sanz", "telefono"=>949111222 ),
                array ("nombre"=>"Laura", "apellido"=>"Polo", "telefono"=>949333444 )
            )
            );

            echo "<pre>";
            print_r($alumnos);
            echo "</pre>";
            /*
            foreach($alumnos as $clase) {
                foreach($clase as $alumno) {
                    if($alumno['nombre'] == "Maria" && $alumno['apellido'] == "Gómez") {
                        echo "<h2>Telefono: {$alumno['telefono']}</h2>";
                    }
                }
            }
            */
    ?>
</body>
</html>