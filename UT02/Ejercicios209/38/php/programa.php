<?php
    $precioTamano = 0;
    $precioBase = 0;
    $precioSalsa= 0;
    $precioIngredientes = 0;
    $tamano = "";
    $base = "";
    $salsa = "";
    $ingredientes = " ";
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
    <title>Ejercicio 2.38</title>
</head>
<body>
    <?php
    //para los checkbox hay poner isset porq es verdero o falso
            $tamanoPizza = $_REQUEST['tamanoPizza'];
            $basePizza = $_REQUEST['basePizza'];
            $salsaPizza =isset($_REQUEST['salsaPizza']);
            $pollo = isset($_REQUEST['pollo']);
            $bacon = isset($_REQUEST['bacon']);
            $jamon = isset($_REQUEST['jamon']);
            $cebolla = isset($_REQUEST['cebolla']);
            $aceitunas = isset($_REQUEST['aceitunas']);
            $pimiento = isset($_REQUEST['pimineto']);

    ?>
    <?php
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

        if(isset($_REQUEST['pollo'])) {
            $ingredientes = $ingredientes."Pollo";
            $precioIngredientes = $precioIngredientes + 0.55;
        }
        if(isset($_REQUEST['bacon'])) {
            $ingredientes = $ingredientes."Bacon";
            $precioIngredientes = $precioIngredientes + 0.75;
        }
        if(isset($_REQUEST['jamon'])) {
            $ingredientes = $ingredientes."Jamón";
            $precioIngredientes = $precioIngredientes + 0.95;
        }
        if(isset($_REQUEST['cebolla'])) {
            $ingredientes = $ingredientes."Cebolla";
            $precioIngredientes = $precioIngredientes + 0.45;
        }
        if(isset($_REQUEST['aceitunas'])) {
            $ingredientes = $ingredientes."Aceitunas";
            $precioIngredientes = $precioIngredientes + 0.55;
        }
        if(isset($_REQUEST['pimiento'])) {
            $ingredientes = $ingredientes."Pimiento";
            $precioIngredientes = $precioIngredientes + 0.65;
        }
        
        /*
        if(isset($pollo)) {
            $ingredientes = "Pollo(0,55€)";
            $precioIngredientes += 0.55;
        } elseif(isset($bacon)) {
            $ingredientes = "Bacon(0,75€)";
            $precioIngredientes += 0.75;
        } elseif(isset($jamon)) {
            $ingredientes = "Jamón(0,95€)";
            $precioIngredientes += 0.95;
        } elseif(isset($cebolla)) {
            $ingredientes = "Cebolla(0,45€)";
            $precioIngredientes += 0.45;
        } elseif($aceitunas) {
            $ingredientes = "Aceitunas(0,55€)";
            $precioIngredientes += 0.55;
        } elseif($pimiento) {
            $ingredientes = "Pimiento(0,65€)";
            $precioIngredientes += 0.65;
        }
        */

        $totalPrecio = $precioTamano + $precioBase + $precioSalsa + $precioIngredientes;
    ?>

    <table>
        <tr>
            <th>Tamaño Pizza</th>
            <th>Base</th>
            <th>Salsa</th>
            <th>Ingredientes</th>
            <th>Precio Total</th>

        </tr>
        <tr>
            <td><?php echo $tamano; ?></td>
            <td><?php echo $base; ?></td>
            <td><?php echo $salsa; ?></td>
            <td><?php echo $ingredientes;?></td>
            <td><?php printf("%05.2f€",$totalPrecio)?></td>
        </tr>
    </table>
</body>
</html>