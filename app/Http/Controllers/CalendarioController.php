<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Veterinario;
use App\Models\User;

class CalendarioController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $Citas = Cita::where('user_id', auth()->user()->id)->get();
        $vets = Veterinario::all();
        return view("Usuarios/calendarioCitas",['Citas'=>$Citas, 'Veterinarios'=>$vets]);
    }
}
