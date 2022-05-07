<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cerrarSesionController extends Controller
{
    public function index(){
        return view("Inicio/usuarioNoRegistrado");
    }
    //session_start();
// if ($_SESSION['rol'] > 0) {
// session_destroy();
// }
}
