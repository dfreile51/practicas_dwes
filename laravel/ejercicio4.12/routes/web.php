<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'inicio'])->name('inicio');
Route::get('/empresa', [MainController::class, 'empresa'])->name('empresa');
Route::get('/contacto', [MainController::class, 'contacto'])->name('contacto');
// Route::get('/discos', [MainController::class, 'discos'])->name('discos');

Route::resource('discos', 'App\Http\Controllers\DiscoController');
