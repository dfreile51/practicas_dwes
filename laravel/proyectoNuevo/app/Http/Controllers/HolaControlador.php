<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaControlador extends Controller
{
    public function raiz() {
        $paginas = [
            ['titulo' => 'Inicio', 'alias' => 'inicio'],
            ['titulo' => 'Saludo', 'alias' => 'saludo'],
            ['titulo' => 'Suma', 'alias' => 'suma']
        ];
        $pedidos = [
            ['num' => 101, 'producto' => 'Camisa', 'precio' => 49.95],
            ['num' => 102, 'producto' => 'Pantalón', 'precio' => 79.95],
            ['num' => 103, 'producto' => 'Sudadera', 'precio' => 29.95],
            ['num' => 104, 'producto' => 'Chandal', 'precio' => 69.95],
        ];
        return view('inicio', [
            'titulo'=>'Página principal',
            'paginas'=>$paginas,
            'pedidos'=> $pedidos,
        ]);
    }

    public function saludo($nombre='', $apellido='') {
        if($nombre=='') {
            $nombre = request()->nombre;
        }
        if($apellido=='') {
            $apellido = request()->apellido;
        }
        if($nombre!='' && $apellido!='') {
            $mensaje = "Hola, {$nombre} {$apellido}";
        } else {
            $mensaje = "Hola, Laravel";
        }
        return view('mensaje')->with(['mensaje'=>$mensaje]);
    }

    public function suma($num1='', $num2='', $num3='') {
        if($num1=='') {
            $num1 = request()->num1;
        }
        if($num2=='') {
            $num2 = request()->num2;
        }
        if($num3=='') {
            $num3 = request()->num3;
        }
        $result = $num1 + $num2 + $num3;
        return view('suma')->with([
            'num1' => $num1,
            'num2' => $num2,
            'num3' => $num3,
            'result' => $result
        ]);
        // $mensaje = "Suma: ";
        // if($num1!='') {
        //     $suma += $num1;
        // }
        // if($num2!='') {
        //     $suma += $num2;
        // }
        // if($num3!='') {
        //     $suma += $num3;
        // }
        // if($num1=='' && $num2=='' && $num3=='') {
        //     $suma = 0;
        // }
        // $mensaje .= $suma;
        // return view('mensaje')->with(['mensaje'=>$mensaje]);
    }
}
