<?php
    require "php/funciones.php";
    if(!isset($_REQUEST['fuente'])) {
        $noticias = obtenerTodasNoticias();
    } elseif($_REQUEST['fuente'] == 'Todos') {
        $noticias = obtenerTodasNoticias();
    } elseif($_REQUEST['fuente'] == 'El pais') {
        $noticias = obtenerNoticiasPais();
    } elseif($_REQUEST['fuente'] == 'El mundo') {
        $noticias = obtenerNoticiasMundo();
    } else {
        $noticias = obtenerNoticiasLeon();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Últimas noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="#" method="post">
                    <div>
                        <label for="fuente" class="form-label">Seleccione Fuente</label><br>
                        <select name="fuente" id="fuente" class=form-control" onchange="this.form.submit()">
                            <option>Todos</option>
                            <option>El pais</option>
                            <option>El mundo</option>
                            <option>Diario de León</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <?php
                    mostrarNoticias($noticias);
                ?>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>