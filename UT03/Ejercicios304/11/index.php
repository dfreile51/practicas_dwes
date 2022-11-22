<?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
        $_SESSION['usuario'] = "invitado";
        $_SESSION['permiso'] = "invitado";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Ejercicio 3.11</title>
</head>
<body>
    <?php
        include('layout/header.php');
    ?>
    
    <?php
        require_once('php/funciones.php'); 
        echo "<p>Bienvenido, {$_SESSION['usuario']}</p>";
        echo "<hr/>";

        if($_SESSION['permiso'] == "usuario") {
            echo "<p>Seccion para cambiar formato: </p>";
            echo "
            <table>
                <form action='index.php' method='post'>
                    <tr>
                        <td>
                            <label for='colorFondo'>Color del fondo: </label>
                            <br>
                            <select name='colorFondo' id='colorFondo'>
                                <option value=''>ninguno</option>
                                <option>red</option>
                                <option>blue</option>
                            </select>
                        </td>
                        <td>
                            <label for='colorLetra'>Color de la letra: </label>
                            <br>
                            <select name='colorLetra' id='colorLetra'>
                                <option value=''>ninguno</option>
                                <option>red</option>
                                <option>blue</option>
                            </select>
                        </td>
                        <td>
                            <label for='tipoLetra'>Tipo de la letra: </label>
                            <br>
                            <select name='tipoLetra' id='colorLetra'>
                                <option value=''>ninguno</option>
                                <option value='times'>Times New Roman</option>
                                <option value='arial'>Arial</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='3' style='text-align: center'>
                            <input type='submit' value='Enviar' id='enviar' name='enviar' />
                        </td>
                    </tr>
                </form>
            </table>
            ";
        }

        $noticias = obtenerNoticias();
        if(isset($_REQUEST['enviar'])) {
            $tipoLetra = $_REQUEST['tipoLetra'];
            $colorLetra = $_REQUEST['colorLetra'];

            if(is_array($noticias) && count($noticias)>0) {
                foreach($noticias as $noticia) {
                    echo "<h1 class='$tipoLetra, $colorLetra'>{$noticia['titulo']}</h1>";
                    echo "<p class='$tipoLetra, $colorLetra'>{$noticia['noticia']}</p>";
                    echo "<p class='$tipoLetra, $colorLetra'>{$noticia['fecha']}</p>";
                    echo "<p class='$tipoLetra, $colorLetra'>Editor: {$noticia['user']}</p>";
                }
            }
        } else {
            if(is_array($noticias) && count($noticias)>0) {
                foreach($noticias as $noticia) {
                    echo "<h1>{$noticia['titulo']}</h1>";
                    echo "<p>{$noticia['noticia']}</p>";
                    echo "<p>{$noticia['fecha']}</p>";
                    echo "<p>Editor: {$noticia['user']}</p>";
                }
            }
        }
        
    ?>
</body>
</html>