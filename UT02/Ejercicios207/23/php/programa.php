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
    <title>Ejercicio 2.23</title>
</head>
<body>
    <?php
        if(isset($_REQUEST['enviar'])) {
            $tamanoPizza = $_REQUEST['tamanoPizza'];
            $basePizza = $_REQUEST['basePizza'];
            $salsaPizza =$_REQUEST['salsaPizza'];
            $ingredientesPizza = $_REQUEST['ingredientesPizza'];
    ?>

    <?php
        switch($tamanoPizza){
            case 'mini':
                $tamano = "Mini(2,95€)";
                $precioTamano = 2.95;
                break;
            case 'media':
                $tamano = "Media(4,95€)";
                $precioTamano = 4.95;
                break;
            case 'maxi':
                $tamano = "Maxi(8,95€)";
                $precioTamano = 8.95;
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

        switch($ingredientesPizza) {
            case 'pollo':
                $ingredientes = "Pollo(0,55€)";
                $precioIngredientes += 0.55;
                break;
            case 'bacon':
                $ingredientes = "Bacon(0,75€)";
                $precioIngredientes += 0.75;
                break;
            case 'jamon':
                $ingredientes = "Jamon(0,95€)";
                $precioIngredientes += 0.95;
                break;
            case 'cebolla':
                $ingredientes = "Cebolla(0,45€)";
                $precioIngredientes += 0.45;
                break;
            case 'aceitunas':
                $ingredientes = "Aceitunas(0,55€)";
                $precioIngredientes += 0.55;
                break;
            case 'Pimiento':
                $ingredientes = "Aceitunas(0,55€)";
                $precioIngredientes += 0.55;
                break;

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
            <td><?php echo $totalPrecio?></td>
        </tr>
    </table>

    <?php
        } else {
            echo "Error no se ha recibido ningún dato.";
        }
    ?>
</body>
</html>