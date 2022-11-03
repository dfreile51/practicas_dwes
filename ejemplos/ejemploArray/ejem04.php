<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo ordenar array multiple</title>
</head>
<body>
    <h1>Ejemplo ordenar array multiple</h1>

    <?php

        function compara ($x, $y) {
            if ($x["curso"] == $y["curso"])
                if ($x["apellido"] == $y["apellido"])
                    return 0;
                elseif ($x["apellido"] < $y["apellido"])
                    return -1;
                else
                    return 1;
            elseif ($x["curso"] < $y["curso"])
                return -1;
            else
                return 1;
        }
    
        $alumnos = array();

        $alumnos[] = array ("nombre"=>"abel", "apellido"=>"martin", "curso"=>"ESO1", "edad"=>15);
        $alumnos[] = array ("nombre"=>"diego", "apellido"=>"freile", "curso"=>"DAW2", "edad"=>23);
        $alumnos[] = array ("nombre"=>"sergio", "apellido"=>"freile", "curso"=>"BACH1", "edad"=>18);
        $alumnos[] = array ("nombre"=>"marina", "apellido"=>"garcia", "curso"=>"ESO4", "edad"=>15);
        $alumnos[] = array ("nombre"=>"alba", "apellido"=>"peñin", "curso"=>"ESO3", "edad"=>15);
        $alumnos[] = array ("nombre"=>"javier", "apellido"=>"calvo", "curso"=>"ESO4", "edad"=>16);
        $alumnos[] = array ("nombre"=>"diego", "apellido"=>"fernandez", "curso"=>"ESO2", "edad"=>13);

        echo "<h2>Antes de ordenar</h2>";
        echo "<pre>";
        print_r($alumnos);
        echo "</pre>";

        echo "<h2>Despues de ordenar</h2>";
        usort($alumnos, 'compara');
        echo "<pre>";
        print_r($alumnos);
        echo "</pre>";
    ?>
</body>
</html>