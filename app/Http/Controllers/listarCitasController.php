<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\Medico;
use App\Models\User;
class listarCitasController extends Controller
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
        $Citas = Cita::all();
        $users = User::all();
        $vets = Medico::all();
        return view("Administracion.terminarCita",['Citas'=>$Citas])->with(['Users'=>$users,'Veterinarios'=>$vets]);
    }
    public function create(Request $request){
        if(auth()->user()->administrador==False){
            $request->validate([
                'NM'=>'required|string',
                'fecha'=>'required|date',
                'hora'=>'required',
            ]);
            $cita = new Cita();
            $cita->Nombre_Mascota = $request['NM'];
            $cita->Fecha = $request['fecha'];
            $cita->Hora = $request['hora'];
            $cita->user_id = auth()->user()->id;
            $cita->Estado = 0;
            $Vets = Medico::all();
            $cantVet = 0;
            foreach ($Vets as $Vet) {
                $cantVet = $cantVet + 1;
            }
            if ($cantVet > 0) {
                $cita->medico_id = rand(1, $cantVet);
                $cita->save();
                return back()->with('success','La cita se ha realizado con exito.');
            }
            else{
                return back()->with('info','No hay Veterinarios registrados actualmente.');
            }
        }
        else{
            return back()->with('info','Un administrador no puede ordenar una cita.');
        }
        
    }

    public function IndexNoActivate(){
        if ($this->middleware('auth')){
            if (auth()->user()->administrador == False){
                return redirect()->route('Inicio');
            }
        }
        $Citas = Cita::all();
        $users = User::all();
        $vets = Medico::all();
        return view("Administracion.confirmar",['Citas'=>$Citas])->with(['Users'=>$users,'Veterinarios'=>$vets]);
    }
    public function Activar(Request $request){
        $request->validate([
            'id'=>'required',
            'fecha'=>'required',
            'm_id'=>'required',
            'hora'=>'required',
            'estado'=>'required',
        ]);
        $Cita = Cita::find($request['id']);
        $Cita->Fecha=$request['fecha'];
        $Cita->medico_id=$request['m_id'];
        $Cita->Hora=$request['hora'];
        $Cita->Estado=$request['estado'];
        $Cita->save();
        return redirect()->route('confirmar')->with('success', 'la cita ha sido aceptada');
    }
    public function delete($id){
        $Vet = Cita::find($id);
        $Vet->delete();
        return redirect()->route('citas')->with('success', 'Se concluyó la cita de forma correcta');
    }
}
