<?php

use App\Http\Controllers\HolaControlador;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HolaControlador::class, 'raiz'])->name('inicio');
Route::match(['get', 'post'], '/saludo/{nombre?}/{apellido?}', [HolaControlador::class, 'saludo'])->name('saludo');
Route::match(['get', 'post'], '/suma/{num1?}/{num2?}/{num3?}', [HolaControlador::class, 'suma'])->name('suma');
