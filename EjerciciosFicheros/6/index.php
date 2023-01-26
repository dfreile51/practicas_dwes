<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio XML</title>
</head>
<style>
    table {
        margin: 0 auto;
    }
    td, th {
        border: 1px solid black;
        padding: 4px 8px;
    }
</style>
<body>
    <?php
        @$clinica = simplexml_load_file("data/clinica.xml");
        if($clinica) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Nombre</th>";
            echo "<th>Especie</th>";
            echo "<th>Raza</th>";
            echo "<th>Nacimiento</th>";
            echo "<th>Foto</th>";
            echo "</tr>";
            foreach($clinica->mascotas->mascota as $mascota) {
                echo "<tr>";
                echo "<td>{$mascota->nombre}</td>";
                echo "<td>{$mascota->especie}</td>";
                echo "<td>{$mascota->raza}</td>";
                echo "<td>{$mascota->nacimiento}</td>";
                if($mascota->foto=='' && $mascota->especie == "perro") {
                    echo "<td><img src='images/perro.jpg' /></td>";
                } elseif($mascota->foto=='' && $mascota->especie == "gato"){
                    echo "<td><img src='images/gato.jpg' /></td>";
                } else {
                    echo "<td><img src='".substr($mascota->foto,3)."' /></td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>