<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Exception;
class listarUsuariosController extends Controller
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
        $users = User::all();
        return view("Administracion/Usuarios",['Users'=>$users]);
    }
    public function Edit(Request $request){
        $request->validate([
            'Nombre'=>'required|string',
            'tel'=>'required|min:10|max:10',
            'email'=>'required|email'
        ]);
        $User = User::find($request['id']);
        $User->name = $request['Nombre'];
        $User->phone = $request['tel'];
        $User ->email = $request['email'];
        $User->save();
        return redirect()->route('admin')->with('success', 'Se actualizado el usuario de forma correcta');
    }
    public function create(Request $request){
        $request->validate([
            'nombre'=>'required|string',
            'email'=>'required|email',
            'edad'=>'required|max:3',
            'sex'=>'required|boolean',
            'password'=>'required|min:8',
            'password1'=>'required',
            'tel'=>'required|min:10|max:10',
        ]);
        $password = $request['password'];
        $pass1 = $request['password1'];
        if ($password == $pass1) {
            if ($request['edad']>15) {
                try {
                    $user = new User;
                    $user->name=$request['nombre'];
                    $user->age=$request['edad'];
                    $user->sex=$request['sex'];
                    $user->email=$request['email'];
                    $user->phone=$request['tel'];
                    $user->password=Hash::make($request['password']);
                    $user->administrador=0;
                    $user->save();
                    return back()->with('success', 'Usuario registrado de forma correcta');
    
                } catch (Exception $e) {
                    return back()->with('error',$e);
                }
            }
            else{
                back()->with('error','El usuario no es mayor de 15 años');
            }
        }
        else{
            return back()->with('error','Las contraseñas no coinciden');
        }
    }
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin')->with('success', 'Se eliminado el usuario de forma correcta');
    
    }
}
