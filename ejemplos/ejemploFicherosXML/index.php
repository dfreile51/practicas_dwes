<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejemplo XML</h1>
    <?php
        // Escribir
        @$clinica = simplexml_load_file("data/clinica.xml");
        if($clinica) {
            $mascota = $clinica->mascotas->addChild("mascota");
            $mascota->addAttribute('id', '009');
            $mascota->addAttribute('sexo', 'h');
            $mascota->addChild('nombre', 'Dori');
            $mascota->addChild('especie', 'gato');
            $mascota->addChild('raza', 'siamés');
            $mascota->addChild('nacimiento', '2020');
            $mascota->addChild('foto');
            if($clinica->asXML("data/clinica.xml")) {
                echo "<p>Mascota almacenada</p>";
            } else {
                echo "<p>Mascota no almacenada</p>";
            }
            echo "<pre>";
            var_dump($clinica);
            echo "</pre>";
        } else {
            echo "<p>No se puede agregar</p>";
        }



        // Leer archivo xml
        @$clinica = simplexml_load_file("data/clinica.xml");
        if($clinica) {
            /* echo "<pre>";
            var_dump($clinica);
            echo "</pre>"; */

            echo "<h2>{$clinica->nombre}</h2>";
            echo "<h2>{$clinica->propietario}</h2>";
            $mascotas = $clinica->xpath("//mascota/nombre");
            echo "<ul>";
            foreach($mascotas as $mascota) {
                echo "<li>{$mascota->__toString()}</li>";
            }
            /* foreach($clinica->mascotas->mascota as $mascota) {
                echo "<li>{$mascota->nombre}</li>";
            }  */  
            echo "</ul>";
        } else {
            echo "<p>Archivo inacessible</p>";
        }
    ?>
</body>
</html>