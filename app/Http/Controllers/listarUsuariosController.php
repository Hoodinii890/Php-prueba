<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listarUsuariosController extends Controller
{
    public function index(){
        return view("Administracion/Usuarios");
    }
    //include('../modelo/conexion/conexion.php');

// $listado ="";

// $query = "SELECT codUsuario, nombre, email, edad, sexo, tel, contrasena from usuarios";

// if ($_POST['texto'] != "") {
  
// $query = "SELECT codUsuario, nombre, edad, sexo, email, tel, contrasena from usuarios where codUsuario LIKE '%".$_POST['texto']."%' OR nombre LIKE'%".$_POST['texto']."%' OR email LIKE'%".$_POST['texto']."%'  ";
// }
// $resultado = mysqli_query($conexion, $query) or die ("No fue posible ejecutar el query");
// while ($fila = mysqli_fetch_array($resultado)){
  

// $listado .=  '<tr>
//                    <td class="pt-3-half" contenteditable="true">'.$fila['codUsuario'].'</td>
//                    <td class="pt-3-half" contenteditable="true">'.$fila['nombre'].'</td>                                           
//                    <td class="pt-3-half" contenteditable="true">'.$fila['edad'].'</td>
//                    <td class="pt-3-half" contenteditable="true">'.$fila['sexo'].'</td>
//                    <td class="pt-3-half" contenteditable="true">'.$fila['email'].'</td>
//                    <td class="pt-3-half" contenteditable="true">'.$fila['tel'].'</td>
//                     <td>
//                       <span class="table-remove"><button onclick="cargarUsuario('.$fila['codUsuario'].')" type="button"
//                          classs="btn btn-warning btn-rounded btn-sm
//                              my-0">Editar</button></span>
//                              </td>
//                    <td>
//                       <span class="table-remove"><button onclick="eliminarUsuario('.$fila['codUsuario'].')" type="button"
//                          classs="btn btn-danger btn-rounded btn-sm
//                              my-0">Eliminar</button></span>
//                              </td>
//                              </tr>';  

//   }

// echo $listado;

}
