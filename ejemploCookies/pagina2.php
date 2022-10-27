<?php
    if(isset($_COOKIE['nuevaCookie'])) {
        setcookie("nuevaCookie", "1", time()-1);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Cookie</title>
</head>
<body>
    <h1>Pagina 2</h1>
    <?php
        if(isset($_COOKIE['nuevaCookie'])) {
            echo "<p>nueva cookie: {$_COOKIE['nuevaCookie']}</p>";
        }else {
            echo "<p>La cookie no esta disponible</p>";
        }
    ?>
    <a href="index.php">Ir a index</a>
</body>
</html>