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
    <?php
        $numero = $_REQUEST['numero'];
        $funcion = $_REQUEST['funcion'];
    ?>
    <title><?php echo $funcion?></title>
</head>
<body>
    
    <?php
        $resultado = 0;
        switch($funcion) {
            case 'opuesto':
                $resultado = $numero - ($numero*2);
                break;
            case 'inverso':
                if($numero != 0) {
                    $resultado = 1/$numero;
                } else {
                    $resultado = "No existe";
                }
                break;
            case 'cuadrado':
                $resultado = $numero*$numero;
                break;
            case 'raiz':
                if($numero >0) {
                    $resultado = sqrt($numero);
                } else {
                    $resultado = "No existe";
                }
                break;
            case 'sumatorio':
                for($i=0;$i<=$numero;$i++) {
                    $resultado += $i;
                }
                break;
            case 'factorial':
                $resultado = 1;
                for($i=1;$i<=$numero;$i++) {
                    $resultado *= $i;
                }
                break;
        }
        echo "<h3>$funcion($numero): $resultado</h3>";
    ?>
</body>
</html>