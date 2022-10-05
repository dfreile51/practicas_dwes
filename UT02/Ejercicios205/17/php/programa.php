<?php 
    $precioPlacas = 0;
    $precioProces = 0;
    $precioMemorias = 0;
    $precioTarjetas = 0;
    $precioDiscos = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilos2.css">
    <title>Recogida la Configuración del PC</title>
</head>
<body>
    <?php
        if(isset($_REQUEST['enviar'])) {
            $placasBase = $_REQUEST['placasBase'];
            $procesadores = $_REQUEST['procesadores'];
            $memorias = $_REQUEST['memorias'];
            $discos = $_REQUEST['discos'];
            $tarjetas = $_REQUEST['tarjeta'];
        
    ?>

    <?php
        switch($placasBase){
            case "placa1":
                $precioPlacas = 60;
                break;
            case "placa2":
                $precioPlacas = 74;
                break;
            case "placa3":
                $precioPlacas = 179;
                break;
            case "placa4":
                $precioPlacas = 97;
                break;
            default:
                echo "Error no se a seleccionado correctamente";
        }
        switch($procesadores){
            case "proce1":
                $precioProces = 170;
                break;
            case "proce2":
                $precioProces = 230;
                break;
            case "proce3":
                $precioProces = 230;
                break;
            case "proce4":
                $precioProces = 330;
                break;
            default:
                echo "Error no se a seleccionado correctamente";
        }
        switch($memorias){
            case "mem1":
                $precioMemorias = 40;
                break;
            case "mem2":
                $precioMemorias = 80;
                break;
            case "mem3":
                $precioMemorias = 160;
                break;
            case "mem4":
                $precioMemorias = 320;
                break;
            default:
                echo "Error no se a seleccionado correctamente";
        }
        switch($discos){
            case "disco1":
                $precioDiscos = 32;
                break;
            case "disco2":
                $precioDiscos = 100;
                break;
            case "disco3":
                $precioDiscos = 54;
                break;
            case "disco4":
                $precioDiscos = 300;
                break;
            default:
                echo "Error no se a seleccionado correctamente";
        }
        switch($tarjetas){
            case "tarjeta1":
                $precioTarjetas = 0;
                break;
            case "tarjeta2":
                $precioTarjetas = 300;
                break;
            case "tarjeta3":
                $precioTarjetas = 800;
                break;
            case "tarjeta4":
                $precioTarjetas = 350;
                break;
            default:
                echo "Error no se a seleccionado correctamente";
        }

        $totalSinIva = $precioPlacas + $precioProces + $precioMemorias + $precioDiscos + $precioTarjetas;
        $iva = $totalSinIva * 0.21;
        $total = $totalSinIva + $iva
    ?>

    <table>
        <h1>Presupuesto de su PC</h1>
        <?php 
            switch($procesadores) {
                case "proce1":
                case "proce3":
                    echo '<img src="../imgs/intel.png" alt="logo intel" style="width: 100.5px; height: 66.3px; display: block; margin: auto;"/>';
                    break;
                case "proce2":
                case "proce4":
                    echo '<img src="../imgs/amd.png" alt="logo amd" class="imagenes" style="width: 256px; height: 61.1px; display: block; margin: auto;"/>';
                    break;
            }
        ?>
        <br/>
        <tr>
            <th class="componente">Componente</th>
            <th class="modelo">Modelo</th>
            <th class="precio">Precio</th>
        </tr>
        <tr>
            <td class="componente">Placa Base</td>
            <td class="modelo"><?php 
                    switch($placasBase) {
                        case "placa1":
                            echo "Gigabyte B450M DS3H(60€)";
                            break;
                        case "placa2":
                            echo "MSI H510M PRO-E(74€)";
                            break;
                        case "placa3":
                            echo "Asus TUF GAMING B550-PLUS WIFI II(179€)";
                            break;
                        case "placa4":
                            echo "Asus PRIME B560M-K(97€)";
                            break;
                    }
                ;?>
            </td>
            <td class="precio"><?php echo $precioPlacas;?></td>
        </tr>
        <tr>
            <td class="componente">Procesador</td>
            <td class="modelo">
                <?php 
                    switch($procesadores) {
                        case "proce1":
                            echo "Intel Core i5-11400F 2.6 GHz(170€)";
                            break;
                        case "proce2":
                            echo "AMD Ryzen 5 5600X 3.7GHz(230€)";
                            break;
                        case "proce3":
                            echo "Intel Core i5-12400F 4.4 GHz(230€)";
                            break;
                        case "proce4":
                            echo "AMD Ryzen 7 5800X 3.8GHz(330€)";
                            break;
                    }
                ;?>
            </td>
            <td class="precio"><?php echo $precioProces;?></td>
        </tr>
        <tr>
            <td class="componente">Memoria</td>
            <td class="modelo">
                <?php 
                    switch($memorias) {
                        case "mem1":
                            echo "8Gb(40€)";
                            break;
                        case "mem2":
                            echo "16Gb(80€)";
                            break;
                        case "mem3":
                            echo "32Gb(160€)";
                            break;
                        case "mem4":
                            echo "64Gb(320€)";
                            break;
                    }
                ;?>
            </td>
            <td class="precio"><?php echo $precioMemorias;?></td>
        </tr>
        <tr>
            <td class="componente">Disco Duro</td>
            <td class="modelo">
                <?php 
                    switch($discos) {
                        case "disco1":
                            echo "HDD 1Tb(32€)";
                            break;
                        case "disco2":
                            echo "SSD 1Tb(100€)";
                            break;
                        case "disco3":
                            echo "HDD 2Tb(54€)";
                            break;
                        case "disco4":
                            echo "SSD 2Tb(300€)";
                            break;
                    }
                ;?>
            </td>
            <td class="precio"><?php echo $precioDiscos;?></td>
        </tr>
        <tr>
            <td class="componente">Tarjeta Gráfica</td>
            <td class="modelo">
                <?php 
                    switch($tarjetas) {
                        case "tarjeta1":
                            echo "Ninguna(0€)";
                            break;
                        case "tarjeta2":
                            echo "MSI GeForce RTX 2060 VENTUS GP OC 6GB GDDR6(300€)";
                            break;
                        case "tarjeta3":
                            echo "MSI Radeon RX 6800 XT GAMING Z TRIO 16GB GDDR6(800€)";
                            break;
                        case "tarjeta4":
                            echo "PNY GeForce GTX 1660 SUPER Dual Fan 6GB GDDR6(350€)";
                            break;
                    }
                ;?>
            </td>
            <td class="precio"><?php echo $precioTarjetas;?></td>
        </tr>
        <tr>
            <th colspan='2' class="componente">TOTAL</th>
            <th class="precio"><?php echo $total;?></th>
        </tr>
    </table>

    <?php
        } else {
            echo "<h3>No se han recibido los datos del usuario</h3>";
        }
    ?>
    
</body>
</html>