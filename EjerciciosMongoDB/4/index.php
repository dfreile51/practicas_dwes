<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
        require 'funciones.php';

        $categorias = obtenerCategorias();
        $proveedores = obtenerProveedores();

    ?>

    <h1>Ejercicio 04: Filtrado de productos</h1>
    <hr/>
    <table class="filtros">
        <form action="#" method="post">
            <tr>
                <th>Categoria</th>
                <th>Proovedor</th>
            </tr>
            <tr>
                <td>
                    <select name="categoria" id="categoria" class="listado">
                        <option value="0">Todas</option>
                        <?php
                            foreach($categorias as $key => $categoria) {
                                echo "<option value='$key' selected='selected'>$categoria</option>";
                            }
                        ?>
                    </select>
                </td>
                <td>
                    <select name="proveedor" id="proveedor" class="listado">
                        <option value="0">Todos</option>
                        <?php
                            foreach($proveedores as $key => $proveedor) {
                                echo "<option value='$key' selected='selected'>$proveedor</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"> 
                    <input type="submit" value="Seleccionar" name="selec" id="selec">
                </td>
            </tr>
        </form>
    </table>
    <hr/>

    <?php
        if(isset($_REQUEST['selec'])) {
            $categoria = $_REQUEST['categoria'];
            $proveedor = $_REQUEST['proveedor'];

            $productos = obtenerProductos($categoria, $proveedor);

            mostrarProductos($productos);
        }
    ?>
</body>
</html>