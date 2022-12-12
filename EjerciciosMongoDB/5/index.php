<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 mongo</title>
    <link rel="stylesheet" href="css/estilos.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>

    <?php 
        include 'vista/header.php';
        require 'php/funciones.php';
    ?>
    <div class="container mt-1">
        <?php
            if(isset($_REQUEST['mensaje'])) {
                switch($_REQUEST['mensaje']) {
                    case "invalido":
                        alerta("alert-danger", "Operación no permitida");
                        break;
                    case "faltanDatos":
                        alerta("alert-danger", "Debe rellenar todos los campos");
                        break;
                    case "insertExito":
                        alerta("alert-success", "Producto insertado correctamente");
                        break;
                    case "insertError":
                        alerta("alert-danger", "Error al insertar el producto");
                        break;
                    case "updateExito":
                        alerta("alert-success", "Producto actualizado correctamente");
                        break;
                    case "updateError":
                        alerta("alert-danger", "Error al actualizar el producto");
                        break;
                    case "deleteExito":
                        alerta("alert-success", "Producto eliminado correctamente");
                        break;
                    case "deleteError":
                        alerta("alert-danger", "Error al eliminar el producto");
                        break;
                }
            }
        ?>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-secundary">Productos a la venta</h4>
                    </div>
                    <div class="p-6">
                        <table class="table table-striped table-secondary align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Categoría</th>
                                    <th scope="col">Proveedor</th>
                                    <th scope="col" class="text-center">Precio</th>
                                    <th scope="col" colspan="2" class="text-cente">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $productos = obtenerProductos();
                                    foreach($productos as $producto) {
                                ?>
                                    <tr>
                                        <td scope='row'><?php echo $producto['idProducto']; ?></td>
                                        <td><?php echo $producto['nombreProducto']; ?></td>
                                        <td><?php echo $producto['nombreCategoria']; ?></td>
                                        <td><?php echo $producto['nombreProvee']; ?></td>
                                        <td class='text-end'><?php echo $producto['precio']."€"; ?></td>
                                        <td class='text-end'>
                                            <a href='controlador/editar.php?id=<?php echo $producto['id']; ?>'>
                                                <i class='bi bi-pencil-square text-success'></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href='controlador/eliminar.php?id=<?php echo $producto['id']; ?>'>
                                                <i class='bi bi-trash text-danger'></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-secundary">Nuevo Producto</h4>
                    </div>
                    <?php
                        $idProductos = obtenerIdProductos();
                        $categorias = obtenerCategorias();
                        $proveedores = obtenerProveedores();
                        $ultimoId = intval(array_pop($idProductos));

                        $ultimoId += 1;
                    ?>
                    <form class="p-4" action="controlador/insertar.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Id Producto</label>
                            <input type="text" class="form-control" name="idProducto" value="<?php echo $ultimoId; ?>" readonly/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" autofocus required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Categoría</label>
                            <select class="form-control" name="categoria">
                                <?php
                                    foreach($categorias as $key => $categoria) {
                                        echo "<option value='$key'>$categoria</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Proveedor</label>
                            <select class="form-control" name="proveedor">
                                <?php
                                    foreach($proveedores as $key => $proveedor) {
                                        echo "<option value='$key'>$proveedor</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Precio</label>
                            <input type="text" class="form-control" name="precio"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Cantidad por unidad</label>
                            <input type="text" class="form-control" name="cantidad"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Unidades en Stock</label>
                            <input type="text" class="form-control" name="unidadesStock"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Unidades en orden</label>
                            <input type="text" class="form-control" name="unidadesOrder"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Reorder Level</label>
                            <input type="text" class="form-control" name="reorder"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Discontinued</label>
                            <input type="number" class="form-control" name="discon" min="0" max="1"/>
                        </div>
                        <div class="d-grid">
                            <input type="submit" class="btn btn-success" name="btnInsertar" value="Guardar"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'vista/footer.php' ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>