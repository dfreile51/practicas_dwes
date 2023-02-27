<?php
    class Saludo
    {
        /**
         * @param string $nombre
         * @return string $saludo
         */
        public function hola($nombre = '')
        {
            if ($nombre == '') {
                $nombre = 'desconocido';
            }
            return "Saludo: Hola, {$nombre}";
        }
        /**
         * @param string $cadena
         * @return string $rever
         */
        public function alreves($cadena = '')
        {
            if ($cadena = '') {
                $cadena = 'desconocido';
            }
            $rever = strrev($cadena);
            return "Alreves({$cadena}): ".$rever;
        }
    }
?>