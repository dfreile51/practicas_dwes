<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.29</title>
</head>
<body>
<?php

    echo "<h2>Números</h2>";
    if (isset($_REQUEST['enviar'])){
        $operacion = $_REQUEST ['operacion'];
        $valores = $_REQUEST ['n'];

        foreach ($valores as $valor) {
            echo "<p>$valor</p>";
        }

        switch ($operacion) {

            case 'minimo':
                $min=$valores[0];
                min($valores);
                echo "<p>El mínimo es $min</p>";
                break;

            case 'maximo':
                $max=$valores[0];
                max($valores);
                echo "<p>El máximo es $max</p>";
                break; 

            case 'suma':
                $suma = $valores[0];
                array_sum($valores);
                echo "suma = " . array_sum($valores) . "\n";
                break; 

            case 'media':
                $suma = array_sum($valores);
                $total_numeros = count($valores);
                $media = $suma/$total_numeros;
                echo "La media es: $media";
                break;

            default:
                $txt= "Operacion erronea";
                $op=null;
                break;

        }
        
    } else{
        echo"<h3> No se han recibido datos del usuario</h3>";
    }
    ?>
    
    <a href="../index.html"><h3>Volver</h3></a>
</body>
</html>