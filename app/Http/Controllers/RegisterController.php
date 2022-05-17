<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Exception;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register(Request $request){
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
                    $user->email_verified_at = now();
                    $user->administrador=0;
                    $user->remember_token = Str::random(10);
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
    }
    
