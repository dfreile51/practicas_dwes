<header>
    <h2>Foro de noticias</h2>
    <?php
        if($_SESSION['usuario'] == "invitado") {
            echo "<a href='php/iniciar-sesion.php' class='iniciar-sesion'>Inciar sesion</a>";
        } else {
            echo "<a href='php/cerrar-sesion.php' class='cerrar-sesion'>Cerrar sesion</a>";
        }
    ?>
</header>