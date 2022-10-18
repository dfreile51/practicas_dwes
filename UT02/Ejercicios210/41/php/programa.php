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
    <title>Ejercicio 2.41</title>
</head>
<body>
    <?php
        $texto = $_REQUEST['texto'];
        $buscar = $_REQUEST['buscar'];
        $reemplazar = $_REQUEST['reemplazar'];

        echo "<h2>Texto Original: </h2>";
        echo "<p>$texto</p>";
        echo "<h2>Palabra a buscar: </h2>";
        echo "<p>$buscar</p>";
        echo "<h2>Palabra a reemplazar: </h2>";
        echo "<p>$reemplazar</p>";

        if ($reemplazar == "") {
            $reemplazar = "<mark>$buscar</mark>";
        }

        $textoNuevo = str_replace($buscar, $reemplazar, $texto);


        // $textoModificado = implode(" ", $palabrasTexto);
        
        echo "<h2>Texto Modificado: </h2>";
        echo "<p>$textoNuevo</p>";



        /* echo "<pre>";
        print_r($letrasBuscar);
        echo "</pre>"; */

        /* echo "<h2>Texto de buscar: </h2>";
        echo "<p>$buscar</p>";
        echo "<h2>Texto de reemplazar: </h2>";
        echo "<p>$reemplazar</p>"; */
    ?>
    
</body>
</html>