<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veterinario;
use PhpOption\None;

class listarVeterinariosController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        if ($this->middleware('auth')){
            if (auth()->user()->administrador == False){
                return redirect()->route('Inicio');
            }
        }
        $Vet = Veterinario::all();
        return view("Administracion/veterinarios",['Veterinarios'=>$Vet]);
    }
    public function create(Request $request){
        $request->validate([
            'Nombre'=>'required|string',
            'tel'=>'required|min:10|max:10'
        ]);
        $Vet = new Veterinario();
        $Vet->Nombre = $request->Nombre;
        $Vet->Telefono = $request->tel;
        $Vet->save();
        return redirect()->route('Veterinarios')->with('success', 'Se registro el veterinario de forma correcta');
    }

    public function Edit(Request $request){
        $request->validate([
            'Nombre'=>'required|string',
            'tel'=>'required|min:10|max:10'
        ]);
        $Vet = Veterinario::find($request['id']);
        $Vet->Nombre = $request['Nombre'];
        $Vet->Telefono = $request['tel'];
        $Vet->save();
        return redirect()->route('Veterinarios')->with('success', 'Se actualizado el veterinario de forma correcta');
    }
    public function delete($id){
        $Vet = Veterinario::find($id);
        $Vet->delete();
        return redirect()->route('Veterinarios')->with('success', 'Se eliminado el veterinario de forma correcta');
    }
}
