<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaControlador extends Controller
{
    public function raiz() {
        return view("saludo", ["texto" => 'Página Principal']);
    }

    public function saludo() {
        return view("saludo")->with(["texto" => "Hola Laravel!"]);
    }
}
