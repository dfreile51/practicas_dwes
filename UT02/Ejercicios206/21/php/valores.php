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
    <title>Ejercicio 2.21</title>
</head>
<body>
    <form action="programa.php" method="post">
        <?php
            $numValores = $_REQUEST['valores'];
            $funcion = $_REQUEST['funciones'];
            for($i = 1; $i <= $numValores; $i++) {
                echo "<label for='num$i'>Valor $i: </label>";
                echo "<input type='number' name='num$i'/><br/>";
            }
        ?>
        <input type="hidden" value="<?php echo $numValores; ?>" name="numValores"/>
        <input type="hidden" value="<?php echo $funcion; ?>" name="funcion"/>
        <br/><br/>
        <input type="submit" value="calcular" name="calcular"/>
    </form>
</body>
</html>