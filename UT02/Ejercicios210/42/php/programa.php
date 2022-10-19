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
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <title>Ejercicio 2.42</title>
</head>
<body>
    <?php
        $nombre = $_REQUEST['nombre'];
        $apellidos = $_REQUEST['apellidos'];
        $email = $_REQUEST['email'];
        $departamento = $_REQUEST['depar'];
        $tema = $_REQUEST['tema'];
        $mensaje = $_REQUEST['mensaje'];

        $fechaActual = date('d-m-Y');

        echo "
            <table>
                <tr>
                    <td>DE: </td>
            ";
        echo "<td>".$departamento."@daw2.com</td>";
        echo "</tr>";        
        
        echo "<tr>
                    <td>PARA: </td>
                    <td>$email</td>
                </tr>
                <tr>
                    <td>TEMA: </td>
                    <td>$tema</td>
                </tr>
                <tr>
                    <td colspan='2'>MENSAJE: </td>
                </tr>
                <tr>
                    <td colspan='2'>Estimado Sr. $apellidos. 
 
                    En relación a su mensaje del día $fechaActual, le informamos que nuestro personal de
                    $departamento está realizando las gestiones necesarias para darle la mejor respuesta. 
                     
                    Reciba un cordial saludo. </td>
                </tr>
            </table>
            ";
        
    ?>
</body>
</html>