<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Ficheros JSON</title>
</head>
<style>
    table {
        margin: 0 auto;
    }
    td, th {
        border: 1px solid black;
        padding: 4px 8px;
    }
</style>
<body>
    <?php
        $clientesJSON = file_get_contents("data/customers.json");
        if($clientesJSON) {
            $clientes = json_decode($clientesJSON);
            echo "<table>";
            echo "<tr>";
            echo "<th>CustomerID</th>";
            echo "<th>CompanyName</th>";
            echo "<th>ContactName</th>";
            echo "<th>ContactTitle</th>";
            echo "<th>Address</th>";
            echo "<th>City</th>";
            echo "<th>Region</th>";
            echo "<th>PostalCode</th>";
            echo "<th>Country</th>";
            echo "<th>Phone</th>";
            echo "<th>Fax</th>";
            echo "</tr>";
            foreach($clientes as $cliente) {
                echo "<tr>";
                echo "<td>{$cliente->CustomerID}</td>";
                echo "<td>{$cliente->CompanyName}</td>";
                echo "<td>{$cliente->ContactName}</td>";
                echo "<td>{$cliente->ContactTitle}</td>";
                echo "<td>{$cliente->Address}</td>";
                echo "<td>{$cliente->City}</td>";
                echo "<td>{$cliente->Region}</td>";
                echo "<td>{$cliente->PostalCode}</td>";
                echo "<td>{$cliente->Country}</td>";
                echo "<td>{$cliente->Phone}</td>";
                echo "<td>{$cliente->Fax}</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Archivo inaccesible</p>";
        }
    ?>
    <form action="#" method="post">
        <label for="nombre">Nombre cliente: </label>
        <br>
        <input type="text" name="nombre" id="nombre" />
        <br><br>
        <label for="fecha">Fecha de nacimineto: </label>
        <br>
        <input type="date" name="fecha" id="fecha" />
        <br><br>
        <label for="curso">Curso: </label>
        <br>
        <input type="text" name="curso" id="curso" />
        <br><br>
        <label for="email">Email: </label>
        <br>
        <input type="text" name="email" id="email" />
        <br><br>
        <input type="submit" value="Enviar" name="enviar" id="enviar" />
    </form>
</body>
</html>