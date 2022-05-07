<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class finalizarCitaController extends Controller
{
    //
// include('../modelo/conexion/conexion.php');

// $query = "SELECT codCita, fecha, hora, nombre, NM, email, codUsuario, activo, NV, codMedico FROM citas WHERE codUsuario";

// $resultado = mysqli_query($conexion, $query) or die ("No fue posible ejecutar el query");

// $listado ="";


// while ($fila = mysqli_fetch_array($resultado)){
//     $activo = $fila['activo'];
// if ($activo == "si") {


// $listado .=  '<tr>
//                    <td class="pt-3-half" contenteditable="true">'.$fila['codCita'].'</td>
//                    <td class="pt-3-half" contenteditable="true">'.$fila['fecha'].'</td>                                           
//                    <td class="pt-3-half" contenteditable="true">'.$fila['hora'].'</td>
//                    <td class="pt-3-half" contenteditable="true">'.$fila['nombre'].'</td>
//                    <td class="pt-3-half" contenteditable="true">'.$fila['email'].'</td>
//                    <td class="pt-3-half" contenteditable="true">'.$fila['NM'].'</td>
//                    <td class="pt-3-half" contenteditable="true">'.$fila['codUsuario'].'</td>
//                    <td>
//                       <span class="table-remove"><button onclick="eliminarCita('.$fila['codCita'].')" type="button"
//                          classs="btn btn-danger btn-rounded btn-sm
//                              my-0">Terminar cita</button></span>
//                              </td>
//                              </tr>';  
// }
//   }
//   if ($listado == "") {
//   $listado = "No hay citas";
// }
// echo $listado;
}
