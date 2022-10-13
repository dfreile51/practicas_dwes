<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo array multisort</title>
</head>
<body>
    <?php
        /*
        $alumnos = array();

        $alumnos[] = array ("nombre"=>"abel", "apellido"=>"martin", "curso"=>"ESO1", "edad"=>15);
        $alumnos[] = array ("nombre"=>"diego", "apellido"=>"freile", "curso"=>"DAW2", "edad"=>23);
        $alumnos[] = array ("nombre"=>"sergio", "apellido"=>"freile", "curso"=>"BACH1", "edad"=>18);
        $alumnos[] = array ("nombre"=>"marina", "apellido"=>"garcia", "curso"=>"ESO4", "edad"=>15);

        $nombres = array ("camisa", "panralon", "falda", "chaqueta");
        $precios = array (29.95, 49.95, 19.50, 100);
        $marcas = array ("blueberry", "levis", "mango", "sportiva");

        array_multisort($nombres, SORT_ASC, SORT_REGULAR, $precios, $marca);

        echo "<h2>Nombres</h2>";
        echo "<pre>";
        print_r($nombres);
        echo "</pre>";

        echo "<h2>Precios</h2>";
        echo "<pre>";
        print_r($precios);
        echo "</pre>";

        echo "<h2>Marcas</h2>";
        echo "<pre>";
        print_r($marcas);
        echo "</pre>";

        
        $productos = array(
            "nombres" => $nombres,
            "precios" => $precios,
            "marcas" => $marcas
        );

        echo "<h2>Productos sin ordenar</h2>";
        echo "<pre>";
        print_r($productos);
        echo "</pre>";

        array_multisort($productos['nombres'], SORT_ASC, SORT_REGULAR, $productos['precios'], $productos['marcas']);

        echo "<h2>Productos ordenados por nombre</h2>";
        echo "<pre>";
        print_r($productos);
        echo "</pre>";
        

        $productos = array();

        for($i=0;$i<count($nombres);$i++) {
            $productos[] = array(
                "nombre" => $nombres[$i],
                "precio" => $precios[$i],
                "marca" => $marcas[$i]
            );
        }

        echo "<h2>Productos sin ordenar</h2>";
        echo "<pre>";
        print_r($productos);
        echo "</pre>";

        array_multisort($nombres, SORT_ASC, SORT_REGULAR, $productos);

        echo "<h2>Productos ordenados por nombre</h2>";
        echo "<pre>";
        print_r($productos);
        echo "</pre>";

        $precios = array_column($productos,"precio");

        echo "<h2>Precios</h2>";
        echo "<pre>";
        print_r($precios);
        echo "</pre>";

        

        $productos = array(
            array(
                "nombre" => "camisa",
                "precio" => 29.95,
                "marca" => "blueberry",
            ),
            array(
                "nombre" => "pantalon",
                "precio" => 49.95,
                "marca" => "levis",
            ),
            array(
                "nombre" => "falda",
                "precio" => 19.50,
                "marca" => "mango",
            ),
            array(
                "nombre" => "chaqueta",
                "precio" => 100,
                "marca" => "sportiva",
            ),
        );
    
        echo "<h2>Productos sin ordenar</h2>";
        echo "<pre>";
        print_r($productos);
        echo "</pre>";

        $precios = array_column($productos, "precio");
        array_multisort($precios, SORT_DESC, SORT_NUMERIC, $productos);

        echo "<h2>Productos ordenados por precio desc</h2>";
        echo "<pre>";
        print_r($productos);
        echo "</pre>";

        $producto = current($productos);
        echo "<h2>Productos Actual</h2>";
        echo "<pre>";
        print_r($producto);
        echo "</pre>";

        $producto = reset($productos);
        echo "<h2>Productos Primero</h2>";
        echo "<pre>";
        print_r($producto);
        echo "</pre>";
        */
        
        function aplicarIVA (&$valor) {
            $valor *= 1.21;
        }
        $precios = array(5, 9, 126, 8, 248, 55);

        array_walk($precios, "aplicarIVA");

        echo "<pre>";
        print_r($precios);
        echo "</pre>";

    ?>
    
</body>
</html>