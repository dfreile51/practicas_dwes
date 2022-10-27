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
        $maximo = $nums[0];
        for($i=1;$i<count($nums);$i++) {
            if($nums[$i] > $maximo) {
                $maximo = $nums[$i];
            }
        }
        return $maximo;
    }

    function minimo ($nums = array()) {
        $minimo = $nums[0];
        for($i=1;$i<count($nums);$i++) {
            if($nums[$i] < $minimo) {
                $minimo = $nums[$i];
            }
        }
        return $minimo;
    }

    function recorrido ($nums = array()) {
        $recorrido = maximo($nums) - minimo($nums);
        return $recorrido;
    }

    function desviacion ($nums = array()) {
        $media = media($nums);
        $parte1 = 0;
        foreach($nums as $i => $valor) {
            $parte1 += ($valor - $media)**2;
        }
        $parte2 = $parte1 / $i;
        return sqrt($parte2);
    }

    function moda($nums = array()) {
        $cuenta = array_count_values($nums);
        arsort($cuenta);
        echo key($cuenta);
    }
?>