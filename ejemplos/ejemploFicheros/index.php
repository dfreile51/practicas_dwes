<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Ficheros</title>
</head>
<body>
    <?php
        $ventas = array(
            array(
                "articulo" => "Nike jordan",
                "unidades" => 10,
                "precio" => 99
            ),
            array(
                "articulo" => "Adidas guapas",
                "unidades" => 12,
                "precio" => 49
            ),
            array(
                "articulo" => "Joma futbol",
                "unidades" => 20,
                "precio" => 50
            ),
        );

        // Escribir en el archivo: fputs

        /* @$file = fopen("data/file1.txt", "a");
        if($file) {
            $fecha = date("Y-m-d H:i:s");
            $lineasEscritas = 0;
            foreach($ventas as $venta) {
                $linea = "{$fecha} \t {$venta['articulo']} \t {$venta['unidades']} \t {$venta['precio']} \n";
                if(fputs($file, $linea)) {
                    $lineasEscritas++;
                } else {
                    echo "<p>Error al escribir el registro</p>";
                }
            }
            echo "<p>Registros añadidos: {$lineasEscritas}</p>";
            fclose($file);
        } else {
            echo "<p>No se puede acceder al archivo</p>";
        } */

        // Escribir en el archivo: file_put_contents

        /* $fecha = date("Y-m-d H:i:s");
        $lineasEscritas = 0;
        foreach($ventas as $venta) {
            $linea = "{$fecha} \t {$venta['articulo']} \t {$venta['unidades']} \t {$venta['precio']} \n";
            if(file_put_contents("data/file1.txt", $linea, FILE_APPEND)) {
                $lineasEscritas++;
            }
        }
        if($lineasEscritas == count($ventas)) {
            echo "<p>Registros almacenados correctamente: {$lineasEscritas}</p>";
        } else {
            echo "<p>Se produjo un problema al almacenar la linea</p>";
        } */

        //  Lectura de archivo
        /* $ficheroVentas = file("data/file1.txt");
        echo "<pre>";
        print_r($ficheroVentas);
        echo "</pre>"; */

        // Leer archivo linea a linea

        $ventaFile = array();
        @$file = fopen("data/file1.txt", 'r');
        if($file) {
            while ( !feof($file) ) {
                $linea = fgets($file, 1024);
                if($linea != "") {
                    $ventaFile[] = explode("\t", $linea);
                }
            }
            echo "<pre>";
            print_r($ventaFile);
            echo "</pre>";
        } else {
            echo "<p>No se puede acceder al fichero</p>";
        }
    ?>

</body>
</html>