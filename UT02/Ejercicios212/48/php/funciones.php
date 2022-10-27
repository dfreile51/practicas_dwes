<?php
    function comprobarJugada ($num, $num2, $nom) {
        if($num == $num2) {
            echo "<p>Enhorabuena $nom has ganado</p>";
        } else {
            echo "<p>Lo siento $nom has perdido</p>";
        }
    }
?>