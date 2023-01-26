<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaControlador extends Controller
{
    public function inicio() {
        return view('inicio');
    }

    public function empresa() {
        return view('empresa');
    }

    public function articulos() {
        return view('articulos');
    }

    public function contacto() {
        return view('contacto');
    }
}
