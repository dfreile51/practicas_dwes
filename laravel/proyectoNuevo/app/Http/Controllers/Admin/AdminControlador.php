<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminControlador extends Controller
{
    public function admin() {
        return view('admin.mensajeAdmin')->with(['texto'=>'Inicio']);
    }
    public function articulos() {
        return view('admin.mensajeAdmin')->with(['texto'=>'Artículos']);
    }
    public function clientes() {
        return view('admin.mensajeAdmin')->with(['texto'=>'Clientes']);
    }
    public function facturas() {
        return view('admin.mensajeAdmin')->with(['texto'=>'Facturas']);
    }
}
