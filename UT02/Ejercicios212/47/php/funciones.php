<?php
    function sumar ($nums = array()) {
        $suma = 0;
        foreach($nums as $num) {
            $suma += $num;
        }
        return $suma;
    }

    function media ($nums = array()) {
        $suma = sumar($nums);
        $media = $suma/count($nums);
        return $media;
    }

    function maximo ($nums = array()) {
        $maximo = 0;
        foreach ($nums as $num => $valor) {
            if($valor > $maximo) {
                $maximo = $valor;
            }
        }
        return $maximo;
    }

    function minimo ($nums = array()) {
        $minimo = min($nums);
        return $minimo;
    }

    function recorrido ($nums = array()) {
        $recorrido = maximo($nums) - minimo($nums);
        return $recorrido;
    }

    /* function desviacion () {

    } */

    /* function moda () {

    } */
?>