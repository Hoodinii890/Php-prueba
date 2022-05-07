<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class activarCitasController extends Controller
{
	public function index(){
		return view("Administracion.confirmar");
	}
    //
    // include('../modelo/conexion/conexion.php');

	// $cod = $_POST['cod'];
	// $activo = $_POST['activo'];
	// $fecha = $_POST['fecha'];
	// $NV = $_POST['NV'];
	// $query = "UPDATE citas set activo = '$activo',
	// 					fecha = '$fecha',
	// 						NV = '$NV'
	// 				where cod";
	// $resultado = mysqli_query($conexion, $query) or die ("No fue posible ejecutar el query");

	// 	if($resultado){
	// 		echo "Modificado correctamente";
	// 	}else{
	// 		echo "No fue posible modificar";
	// 	}
}
