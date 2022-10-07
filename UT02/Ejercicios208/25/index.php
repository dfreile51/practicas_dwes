<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.25</title>
</head>
<body>
    <form action='php/programa.php' method='post'>
    <?php
        for($i=0;$i<=10;$i++) {
            echo "
                    <label for='alumnno$i'>Alumno $i: </label>
                    <input type='text' name='alumno[$i]' id='alumno$i'/>
                    <br/><br/>
                ";
        }
    ?>
    <input type="submit" value="Enviar" name="enviar" id="enviar">
    </form>
</body>

</html>