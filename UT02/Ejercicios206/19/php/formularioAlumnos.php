<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 206</title>
</head>
<body>
    <?php
        if(isset($_REQUEST['enviar'])) {
            $numAlum = $_REQUEST['numAlum'];
    ?>
    <?php
        for($i = 0; $i<$numAlum; $i++) {
            $n = $i + 1;
            echo "<p>Alumno ".$n."</p>";
            echo "<form action='mostrar.php'>
                    <label for='nombre'>Nommbre: </label>
                    <input type='text' name='nombre$i' id='nombre'/>
                    <br/><br/>
                    <label for='apellidos'>Apellidos: </label>
                    <input type='text' name='apellidos$i' id='apellidos'/>
                    <br/><br/>
                    <label for='tlfn'>Teléfono: </label>
                    <input type='number' name='tlfn$i' id='tlfn'/>
                    <br/><br/>
                    <label for='dire'>Dirección: </label>
                    <input type='text' name='dire$i' id='dire'/>
                    <br/><br/>
                    <label for='pobla'>Población: </label>
                    <input type='text' name='pobla$i' id='pobla'/>
                    <br/><br/>
                    <label for='fechaNac'>Fecha de nacimiento: </label>
                    <input type='date' name='fechaNac$i' id='fechaNac'/>
                    <br/><br/>
                    <label for='estudios'>Estudios: </label>
                    <select name='estudios$i' id='estudios'>
                        <option value='eso'>ESO</option>
                        <option value='bachiller'>Bachillerato</option>
                        <option value='ciclo'>Ciclo Formativo</option>
                    </select>
                    <br/><br/>
                    <input type='submit' value='Enviar' name='enviar' id='enviar'/>
                    <br/><br/>
                </form>";
        }
    ?>
    <?php
        } else {
            echo "<h3>No se han recibido datos del usuario</h3>";
        }
    ?>
</body>
</html>