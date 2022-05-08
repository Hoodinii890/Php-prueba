<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicioSesionController extends Controller
{

    public function index()
    {
        return view('Auth.login');
    }
    //include('../modelo/conexion/conexion.php');

// $email = $_POST['email'];
// $contrasena = $_POST['passwordinput'];
// $rol = $_POST['rol'];

// if($rol=="1"){
// 	$query = "SELECT * from usuarios where email = '".$email."' and contrasena ='".$contrasena."'";
// } else if($rol=="2"){
// 	$query = "SELECT * from admin where email = '".$email."' and contrasena ='".$contrasena."'";
// }

// $resultado = mysqli_query($conexion, $query) or die ("No fue posible ejecutar el query");

// $numeroRegistros = mysqli_num_rows($resultado);

// if($numeroRegistros > 0){
// session_start();
// 	$datosUsuario = mysqli_fetch_array($resultado);
// 	$_SESSION["nombreUsuario"]=$datosUsuario['nombre'];
// 	if ($rol == "1") {
// 	   $_SESSION['u'] = $datosUsuario['codUsuario'];
//        $codigo = $datosUsuario['codUsuario'];
// 	}elseif ($rol == "2") {
// 	   $_SESSION['adm'] = $datosUsuario['codAdmin'];
//        $codigo = $datosUsuario['codAdmin'];
// 	}
// 	if ($rol == "1") {
// 		$_SESSION['rol'] = 1;
// 	}elseif ($rol == "2") {
// 		$_SESSION['rol'] = 2;
// 	}

// 	switch ($rol) {
// 		case '1':
// 			header("location:../vista/index.php");
// 			break;
// 		case '2':
// 			header("location:../vista/index.php");
// 			break;
// 		default:
// 			header("location:../vista/login.php");
// 			session_destroy();
// 			break;
// 	}
// }else{
// 	header("location:../vista/login.php");
// }

}
