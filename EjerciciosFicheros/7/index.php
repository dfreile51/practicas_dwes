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
        $mascotasID = $clinica->xpath("//mascota/@id");
        $id = intval(array_pop($mascotasID)+1);
        $idFinal = sprintf("%03s", $id);
        echo "$idFinal";
        
        if(isset($_REQUEST['enviar'])) {
            $nombre = $_REQUEST['nombre'];
            $sexo = $_REQUEST['sexo'];
            $especie = $_REQUEST['especie'];
            $raza = $_REQUEST['raza'];
            $nacimiento = $_REQUEST['nacimiento'];

            if($clinica) {
                $mascota = $clinica->mascotas->addChild("mascota");
                $mascota->addAttribute('id', $idFinal);
                $mascota->addAttribute('sexo', $sexo);
                $mascota->addChild('nombre', $nombre);
                $mascota->addChild('especie', $especie);
                $mascota->addChild('raza', $raza);
                $mascota->addChild('nacimiento', $nacimiento);
                $mascota->addChild('foto');
                if($clinica->asXML("data/clinica.xml")) {
                    echo "<p>Mascota almacenada</p>";
                } else {
                    echo "<p>Mascota no almacenada</p>";
                }
            } else {
                echo "<p>No se puede agregar</p>";
            }
        }
    ?>
    <?php
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
    <form action="#" method="post">
        <label for="nombre">Nombre mascota: </label>
        <br>
        <input type="text" name="nombre" id="nombre" />
        <br><br>
        <label for="sexo">Sexo: </label>
        <br>
        <select name="sexo" id="sexo">
            <option>M</option>
            <option>H</option>
        </select>
        <br><br>
        <label for="especie">Especie: </label>
        <br>
        <select name="especie" id="especie">
            <option>perro</option>
            <option>gato</option>
            <option>caballo</option>
            <option>conejo</option>
        </select>
        <br><br>
        <label for="raza">Raza: </label>
        <br>
        <input type="text" name="raza" id="raza" />
        <br><br>
        <label for="nacimiento">Año de Nacimineto: </label>
        <br>
        <input type="number" name="nacimiento" id="nacimiento" />
        <br><br>
        <input type="submit" value="Enviar" name="enviar" id="enviar" />
    </form>

    
</body>
</html>