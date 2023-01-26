<?php
    if(!isset($_REQUEST['enviar'])) {
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1 ficheros</title>
    </head>
<body>
    <?php
        $precioTamano = 0;
        $precioBase = 0;
        $precioSalsa= 0;
        $precioIngredientes = 0;
        $tamano = "";
        $base = "";
        $salsa = "";
        $ingredientes = "";

        $fecha = date("Y-m-d");

        $usuario = $_REQUEST['username'];
        $tamanoPizza = $_REQUEST['tamanoPizza'];
        $basePizza = $_REQUEST['basePizza'];
        $salsaPizza =isset($_REQUEST['salsaPizza']);
        $pollo = isset($_REQUEST['pollo']);
        $bacon = isset($_REQUEST['bacon']);
        $jamon = isset($_REQUEST['jamon']);
        $cebolla = isset($_REQUEST['cebolla']);
        $aceitunas = isset($_REQUEST['aceitunas']);
        $pimiento = isset($_REQUEST['pimineto']);

        switch($tamanoPizza){
            case 'mini':
                $tamano = "Mini(2,95€)";
                $precioTamano += 2.95;
                break;
            case 'media':
                $tamano = "Media(4,95€)";
                $precioTamano += 4.95;
                break;
            case 'maxi':
                $tamano = "Maxi(8,95€)";
                $precioTamano += 8.95;
                break;
        }
        
        switch($basePizza){
            case 'normal':
                $base = "Normal(0€)";
                $precioBase = 0;
                break;
            case 'crujiente':
                $base = "Crujiente(1€)";
                $precioBase = 1;
                break;
            case 'rellena':
                $base = "Rellena(2€)";
                $precioBase = 8.95;
                break;
        }

        switch($salsaPizza){
            case 'barbacoa':
                $salsa = "Barbacoa(0,95€)";
                $precioSalsa = 0.95;
                break;
            case 'carbonara':
                $salsa = "Carbonara(1,45€)";
                $precioSalsa = 1.45;
                break;
            default:
                $salsa = "Ninguna(0€)";
                $precioSalsa = 0;
        }

        if($pollo) {
            $ingredientes .= "Pollo,";
            $precioIngredientes += 0.55;
        }
        if($bacon) {
            $ingredientes .= "Bacon,";
            $precioIngredientes += 0.75;
        }
        if($jamon) {
            $ingredientes .= "Jamón,";
            $precioIngredientes += 0.95;
        }
        if($cebolla) {
            $ingredientes .= "Cebolla,";
            $precioIngredientes += 0.45;
        }
        if($aceitunas) {
            $ingredientes .= "Aceitunas,";
            $precioIngredientes += 0.55;
        }
        if($pimiento) {
            $ingredientes .= "Pimiento,";
            $precioIngredientes += 0.65;
        }

        $totalPrecio = $precioTamano + $precioBase + $precioSalsa + $precioIngredientes;

        $pizza = array(
            "Tamaño" => $tamano,
            "Base" => $base,
            "Salsa" => $salsa,
            "Ingredientes" => $ingredientes,
            "Precio" => $totalPrecio
        );

        $linea = "{$fecha} \t {$usuario} \t {$pizza['Tamaño']} \t {$pizza['Base']} \t {$pizza['Salsa']} \t {$pizza['Ingredientes']} \t {$pizza['Precio']} \n";
        if(file_put_contents("../data/pedidos.txt", $linea, FILE_APPEND)) {
            echo "<p>Pedido registrado correctamente</p>";
        } else {
            echo "<p>Pedido no registrado</p>";
        }

        $ventaFile = array();
        @$file = fopen("../data/pedidos.txt", 'r');
        if($file) {
            while ( !feof($file) ) {
                $linea = fgets($file, 1024);
                if($linea != "") {
                    $ventaFile[] = explode("\t", $linea);
                }
            }
        } else {
            echo "<p>No se puede acceder al fichero</p>";
        }
    ?>
</body>
</html>