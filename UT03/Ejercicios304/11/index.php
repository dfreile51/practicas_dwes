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
<?php
    if(isset($_REQUEST['enviar'])) {
        $colorFondo = $_REQUEST['colorFondo'];
        echo "<body class='$colorFondo'>";
    } else {
        echo "<body>";
    }
?>
    <?php
        include('layout/header.php');
    ?>
    
    <?php
        require_once('php/funciones.php');

        $fechaActual = date('Y-m-d');

        echo "<hr/>";

        if($_SESSION['permiso'] == "editor") {
            $idUsuario = obtenerIdUsuario($_SESSION['usuario']);
            echo "<p>Seccion para añadir una noticia: </p>";
            echo "
                <form action='php/validar-insertar.php' method='post'>
                    <input type='hidden' name='id' id='id' value='$idUsuario' />
                    <label for='titulo'>Título de la noticia:</label>
                    <br/>
                    <textarea name='titulo' id='titulo' cols='30' rows='4'></textarea>
                    <br/><br/>
                    <label for='noticia'>Texto de la noticia:</label>
                    <br/>
                    <textarea name='noticia' id='noticia' cols='50' rows='8'></textarea>
                    <br/><br/>
                    <label for='fecha'>Fecha de la noticia:</label>
                    <br/>
                    <input type='date' name='fecha' id='fecha' value='$fechaActual' readonly/>
                    <br/><br/>
                    <input type='submit' value='Enviar' name='enviar' id='enviar' />
                </form>
                <hr/>
            ";
        }

        if($_SESSION['permiso'] == "usuario" || $_SESSION['permiso'] == "editor") {
            echo "<p>Seccion para cambiar formato: </p>";
            echo "
            <table>
                <form action='index.php' method='post'>
                    <tr>
                        <td>
                            <label for='colorFondo'>Color del fondo: </label>
                            <select name='colorFondo' id='colorFondo'>
                                <option value=''>ninguno</option>
                                <option>red</option>
                                <option>blue</option>
                            </select>
                        </td>
                        <td>
                            <label for='colorLetra'>Color de la letra: </label>
                            <select name='colorLetra' id='colorLetra'>
                                <option value=''>ninguno</option>
                                <option value='red2'>red</option>
                                <option value='blue2'>blue</option>
                            </select>
                        </td>
                        <td>
                            <label for='tipoLetra'>Tipo de la letra: </label>
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
            <hr/>
            ";
        }

        $noticias = obtenerNoticias();
        if(isset($_REQUEST['enviar'])) {
            $tipoLetra = $_REQUEST['tipoLetra'];
            $colorLetra = $_REQUEST['colorLetra'];

            if(is_array($noticias) && count($noticias)>0) {
                foreach($noticias as $noticia) {
                    echo "<h1 class='$tipoLetra $colorLetra'>{$noticia['titulo']}</h1>";
                    echo "<p class='$tipoLetra $colorLetra'>{$noticia['noticia']}</p>";
                    echo "<p class='$tipoLetra $colorLetra'>{$noticia['fecha']}</p>";
                    echo "<p class='$tipoLetra $colorLetra'>Editor: {$noticia['user']}</p>";
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