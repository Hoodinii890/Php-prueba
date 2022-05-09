<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class inicioSesionController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function login(Request $request){
        $email = $request['email'];
        $password=$request['passwordinput'];
        if (auth()->attempt(['email' => $email, 'password' =>$password])) {
            return redirect()->to('/');
        }
        else{
            return back()->withErrors([
                'message'=>'El email o la contraseña son incorrectos, por favor intentelo de nuevo',
            ]);
        }
    }
    public function destroy(){
        auth()->logout();
        return redirect(route('login'));
    }
}