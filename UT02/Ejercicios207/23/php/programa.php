<?php
    $precioTamano = 0;
    $precioBase = 0;
    $precioSalsa= 0;
    $precioIngredientes = 0;
    $tamano = "";
    $base = "";
    $salsa = "";
    $ingredientes = "";
    $salto = "<br>";
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
<style>
    table {
        margin: 0 auto;
    }
    td, th {
        border: 1px solid black;
        padding: 8px;
    }
</style>
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
            $ingredientes .= "Pollo{$salto}";
            $precioIngredientes = $precioIngredientes + 0.55;
        }
        if(isset($_REQUEST['bacon'])) {
            $ingredientes .= "Bacon{$salto}";
            $precioIngredientes = $precioIngredientes + 0.75;
        }
        if(isset($_REQUEST['jamon'])) {
            $ingredientes .= "Jamón{$salto}";
            $precioIngredientes = $precioIngredientes + 0.95;
        }
        if(isset($_REQUEST['cebolla'])) {
            $ingredientes .= "Cebolla{$salto}";
            $precioIngredientes = $precioIngredientes + 0.45;
        }
        if(isset($_REQUEST['aceitunas'])) {
            $ingredientes .= "Aceitunas{$salto}";
            $precioIngredientes = $precioIngredientes + 0.55;
        }
        if(isset($_REQUEST['pimiento'])) {
            $ingredientes .= "Pimiento{$salto}";
            $precioIngredientes = $precioIngredientes + 0.65;
        }

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
            <td><?php echo $totalPrecio; ?></td>
        </tr>
    </table>
</body>
</html>