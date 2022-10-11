<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.29</title>
</head>
<body>
<form action="programa2.php" method="post">
<?php

    echo "<h2>Numeros</h2>";
    if (isset($_REQUEST['enviar'])){
        $numValores = $_REQUEST ['numero1'];
        $operacion = $_REQUEST ['operacion'];
        
        for ($i=0; $i<$numValores; $i++){
            echo "
            <label for='n$i'>Valor $i: </label>
            <input type='number' name='n[$i]' id='n$i'>
            <br/><br/>
            ";
        }
        echo "<input type='hidden' value='$operacion' name='operacion' id='operacion'>";
        echo "<input type='hidden' value='$numValores' name='numValores' id='numValores'>";
        echo "<input type='submit' value='Enviar' name='enviar' id='enviar'>";
    }else{
        echo "<h3> No se han recibido datos del usuario</h3>";
    }
    ?>
</form>
    
    <a href="../index.html"><h3>Volver</h3></a>
</body>
</html>