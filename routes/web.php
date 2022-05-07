<?php

use App\Http\Controllers\activarCitasController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\cerrarSesionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\inicioSesionController;
use App\Http\Controllers\listarCitasController;
use App\Http\Controllers\listarUsuariosController;

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

Route::get('/', [HomeController::class, 'index'])->name('Inicio');
Route::get('Login',[inicioSesionController::class, 'index'])->name('login');
Route::get('Calendario',[CalendarioController::class, 'index'])->name('calendario');
Route::get('usuarioNoRegistrado', [cerrarSesionController::class, 'index'])->name('unr');
Route::get('Administracion',[listarUsuariosController::class, 'index'])->name('admin');
Route::get('Citas',[listarCitasController::class,'index'])->name('citas');
Route::get('Confirmarcita',[activarCitasController::class, 'index'])->name('confirmar');

