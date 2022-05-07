<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistasCitasController extends Controller
{
    //session_start();
//  $codUsuario = $_SESSION["u"];
// include('../modelo/conexion/conexion.php');
// $query = "Select fecha, hora, activo, NV from citas where codUsuario = $codUsuario";

// $resultado = mysqli_query($conexion, $query) or die ("No fue posible ejecutar el query");

// $fila = mysqli_fetch_array($resultado);
// $numeroRegistros = mysqli_num_rows($resultado);
// if ($numeroRegistros > 0) {

// $activo = $fila['activo'];
// $listado ="";
// if ($activo=="si") {

// $listado .='<h1 class="hi">Su cita se programo para el: '.$fila['fecha'].' a las '.$fila['hora'].'</h1>
//                     <h5 class="hp">Con el veterinario: '.$fila['NV'].'</h5>';
// }elseif ($activo=="no") {
// 	echo '<h1 class="hi">Su cita esta en espera</h1>';
// }
//                     echo $listado;
// }else  {
// 	echo '<h1 class="hi">Usted no ha programado ninguna cita</h1>';
// }

}
