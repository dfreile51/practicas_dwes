<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario recogido</title>
</head>
<body>
    <?php 
        echo "<h2>DATOS RECOGIDOS</h2>";
        if(isset($_REQUEST['enviar'])) {
            $num1 = intval($_REQUEST['num1']);
            $num2 = intval($_REQUEST['num2']);
            $operaciones = $_REQUEST['operaciones'];
        
    ?>
    <?php
        $suma = $num1 + $num2;
        $resta = $num1 - $num2;
        $multiplicacion = $num1 * $num2;

        if($num2 != 0) {
            $division = $num1 / $num2;
        } else {
            echo "Error no se puede dividir entre 0";
        }
        
        if($num2 != 0) {
            $modulo = $num1 % $num2;
        } else {
            echo "Error no se puede dividir entre 0";
        }

        switch($operaciones) {
            case "suma":
                echo "La suma entre ".$num1." y ".$num2." es: ".$suma;
                break;
            case "resta":
                echo "La resta entre ".$num1." y ".$num2." es: ".$resta;
                break;
            case "multiplicacion":
                echo "La multiplicación entre ".$num1." y ".$num2." es: ".$multiplicacion;
                break;
            case "division":
                echo "La division entre ".$num1." y ".$num2." es: ".$division;
                break;
            case "modulo":
                echo "La modulo entre ".$num1." y ".$num2." es: ".$modulo;
                break;
            default:
                echo "ERROR";
        }
    ?>

    <?php
        } else {
            echo "<h3>No se han recibido los datos del usuario</h3>";
        }
    ?>
</body>
</html>