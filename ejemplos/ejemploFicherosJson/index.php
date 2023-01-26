<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Clientes de NorthWind</h1>
    <?php
        $cliente = array(
            "CustomerID"=>"CARLE",
            "CompanyName"=>"Carnicas Leon",
            "ContactName"=>"Carlos Martin",
            "ContactTitle"=>"Sales Representative",
            "Address"=>"Picara Justina, 1",
            "City"=>"Leon",
            "Region"=>"NULL",
            "PostalCode"=>"24001",
            "Country"=>"Spain",
            "Phone"=>"987-123123",
            "Fax"=>"987-123123"
        );

        /* $clienteJson = json_encode($cliente); */

        $clientesJson = file_get_contents('data/customers.json');
        if($clientesJson) {
            $clientes = json_decode($clientesJson);
            
            $clientes[] = $cliente;

            $clientesJson = json_encode($clientes);

            $cars = file_put_contents('data/customers.json', $clientesJson);
            if($cars) {
                echo "<p>Se ha escrito el archivo correctamente</p>";
            } else {
                echo "<p>No se ha escrito el archivo</p>";
            }
        }
        //Leer el archivo
        $clientesJson2 = file_get_contents('data/customers.json');
        if($clientesJson2) {
            $clientes = json_decode($clientesJson2);
            echo "<pre>";
            print_r($clientes);
            echo "</pre>";
            /* echo "<ul>";
            foreach($clientes as $cliente) {
                echo "<li>{$cliente->CompanyName}</li>";
            }
            echo "</ul>"; */
        } else {
            echo "<p>Archivo inaccesible</p>";
        }
    ?>
</body>
</html>