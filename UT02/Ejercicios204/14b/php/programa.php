<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <title>Formulario recogido</title>
</head>
<body>
    <?php
        echo "<h2>DATOS RECOGIDOS</h2>";

        $descuento = 0;

        if (isset($_REQUEST['enviar'])) {
            $artA = $_REQUEST['artA'];
            $artB = $_REQUEST['artB'];
            $artC = $_REQUEST['artC'];
    ?>
    <?php 
        $totalUnidades = ($artA + $artB + $artC);
        
        if ($totalUnidades<5) {
            $descuento = 0;
        } elseif ($totalUnidades>=5 && $totalUnidades<=10) {
            $descuento = 0.05;
        } elseif ($totalUnidades>=11 && $totalUnidades<=20) {
            $descuento = 0.10;
        } else {
            $descuento = 0.25;
        }
    ?>
        <table>
            <tr>
                <th>Artículo</th>
                <th>Precio</th>
                <th>Unidades</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>Artículo A</td>
                <td>5.99€</td>
                <td><?php echo $artA;?></td>
                <td><?php $precioArtA = $artA * 5.99; echo $precioArtA."€";?></td>
            </tr>
            <tr>
                <td>Artículo B</td>
                <td>12.49€</td>
                <td><?php echo $artB;?></td>
                <td><?php $precioArtB = $artB * 12.49; echo $precioArtB."€";?></td>
            </tr>
            <tr>
                <td>Artículo C</td>
                <td>19.99€</td>
                <td><?php echo $artC;?></td>
                <td><?php $precioArtC = $artC * 19.99; echo $precioArtB."€";?></td>
            </tr>

            <tr>
                <td class='oculto' colspan='4'></td>
                
            </tr>
            <tr>
                <td class='oculto' colspan='2'></td>
                <td><?php echo "Dto.(".$descuento.")";?></td>
                <td><?php $subTotalDescuento = ($precioArtA + $precioArtB + $precioArtC) * $descuento; echo $subTotalDescuento."€"?></td>
            </tr>
            <tr>
                <td class='oculto' colspan='2'></td>
                <td>IVA 20%</td>
                <td><?php $subTotalIva = ($precioArtA + $precioArtB + $precioArtC) * 0.20; echo $subTotalIva."€"?></td>
            </tr>
            <tr>
                <td class='oculto' colspan='2'></td>
                <td>TOTAL</td>
                <td><?php $subTotal = ($precioArtA + $precioArtB + $precioArtC) + $subTotalIva - $subTotalDescuento; echo $subTotal."€"?></td>
            </tr>
            
        </table>
    <?php
        } else {
            echo "<h3>No se han recibido los datos del usuario</h3>";
        }

    ?>
        
        
    
    <a href="../index.html"><h3>Volver</h3></a>
</body>
</html>