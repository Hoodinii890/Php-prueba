<?php

use App\Http\Controllers\activarCitasController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\cerrarSesionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\inicioSesionController;
use App\Http\Controllers\listarCitasController;
use App\Http\Controllers\listarUsuariosController;
use App\Http\Controllers\listarVeterinariosController;
use App\Http\Controllers\RegisterController;

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

// Routes Get
Route::get('/', [HomeController::class, 'index'])->name('Inicio');
Route::get('Login',[inicioSesionController::class, 'index'])->name('login');
Route::get('Calendario',[CalendarioController::class, 'index'])->name('calendario');
Route::get('usuarioNoRegistrado', [cerrarSesionController::class, 'index'])->name('unr');
Route::get('Administracion',[listarUsuariosController::class, 'index'])->name('admin');
Route::get('Citas',[listarCitasController::class,'index'])->name('citas');
Route::get('Confirmarcita',[listarCitasController::class, 'IndexNoActivate'])->name('confirmar');
Route::get('Veterinarios',[listarVeterinariosController::class, 'index'])->name('Veterinarios');
Route::get('logout',[inicioSesionController::class, 'destroy'])->name('Logout');

// Routes Post for Login and Register
Route::post('Registro',[RegisterController::class, 'register'])->name('Registro');
Route::post('Login',[inicioSesionController::class, 'login'])->name('Authentication');

// Routes Post for Veterinario
Route::post('Veterinarios',[listarVeterinariosController::class, 'create']);
Route::patch('EditVeterinarios',[listarVeterinariosController::class, 'Edit'])->name('editVet_update');
Route::delete('DeleteVeterinarios/{id}',[listarVeterinariosController::class, 'delete'])->name('delVet');

// Routes Post for Usuarios
Route::patch('EditUsuario',[listarUsuariosController::class, 'Edit'])->name('editUsuario');
Route::post('Usuarios',[listarUsuariosController::class, 'create'])->name('createUser');
Route::delete('DeleteUsers/{id}',[listarUsuariosController::class, 'delete'])->name('delUser');

// Routes Post for Citas
Route::post('Citas',[listarCitasController::class, 'create'])->name('crearCita');
Route::patch('ActivarCita',[listarCitasController::class, 'Activar'])->name('activarCita');
Route::delete('DeleteCita/{id}',[listarCitasController::class, 'delete'])->name('delCita');
