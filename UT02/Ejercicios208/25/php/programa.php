<?php
    if(!isset($_REQUEST['enviar'])) {
        header("Location: ../index.html");
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.15</title>
</head>
<body>
    <?php
        $alumnos = $_REQUEST['alumno'];

        foreach($alumnos as $i=>$valor) {
            echo "<table>
                    <tr>
                        <td>Alumno $i</td>
                        <td>$valor</td>
                    </tr>
                </table>";
        }
    ?>
    
</body>
</html>