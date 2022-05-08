<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;
use PhpOption\None;

class listarMedicoController extends Controller
{
    //
    public function index(){
        $Vet = Medico::all();
        return view("Administracion/veterinarios",['Veterinarios'=>$Vet]);
    }
    public function create(Request $request){
        $request->validate([
            'Nombre'=>'required|string',
            'tel'=>'required|min:10|max:10'
        ]);
        $Vet = new Medico();
        $Vet->Nombre = $request->Nombre;
        $Vet->Telefono = $request->tel;
        $Vet->save();
        return redirect()->route('medico')->with('success', 'Se registro el veterinario de forma correcta');
    }

    public function Edit(Request $request){
        $request->validate([
            'Nombre'=>'required|string',
            'tel'=>'required|min:10|max:10'
        ]);
        $Vet = Medico::find($request['id']);
        $Vet->Nombre = $request['Nombre'];
        $Vet->Telefono = $request['tel'];
        $Vet->save();
        return redirect()->route('medico')->with('success', 'Se actualizado el veterinario de forma correcta');
    }
    public function delete($id){
        $Vet = Medico::find($id);
        $Vet->delete();
        return redirect()->route('medico')->with('success', 'Se eliminado el veterinario de forma correcta');
    }
} 
