<header>
    <h1>Foro de noticias</h1>
    <?php
        if($_SESSION['usuario'] == "invitado") {
            echo "<a href='php/iniciar-sesion.php'>Inciar sesion</a>";
            echo "<p>Bienvenido, {$_SESSION['usuario']}</p>";
        } else {
            echo "<a href='php/cerrar-sesion.php'>Cerrar sesion</a>";
            echo "<p>Bienvenido, {$_SESSION['usuario']}</p>";
        }
    ?>
</header>