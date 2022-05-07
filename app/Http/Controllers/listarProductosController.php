<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listarProductosController extends Controller
{
    //include('../modelo/conexion/conexion.php');

// $query = "SELECT  NProducto, NImagen, texto, precio FROM productos WHERE codImagen ='1' ";

// $resultado = mysqli_query($conexion, $query) or die ("No fue posible ejecutar el query");

// $fila = mysqli_fetch_array($resultado);

// $listado =  '<div class="modal-dialog" role="document">
//             <div class="modal-content">
//                <div class="modal-header">
//                   <h5 class="modal-title" id="exampleModalLabel">'.$fila['NProducto'].'</h5>
//                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
//                   <span aria-hidden="true">&times;</span>
//                   </button>
//                </div>
               
//                <div class="modal-body">
//                               <div class="nueve">
//                   <h1 type="button">Seleccionar Imagen</h1>
//                   <input type="file" id="file1" onchange="return NombreImg1()">
//                   <img style="width:150px; height:150px; margin: 0 2.5%;" type="button" src="../modelo/images/'.$fila['NImagen'].'" onclick="select1()">
//                   </div>
//                   <div class="ocho">
//                      <h1>Descripción</h1>
//                       <p>'.$fila['texto'].'</p>
//                      <br>
//                   </div>
                  
//                </div>   
//                <div style="display: grid;grid-template-columns: 1fr 1fr;"class="modal-footer">
//                <p style="margin-right:62%;color:#000;">'.$fila['precio'].'</p>
//                <span class="table-remove" style="float:right;"><button class="btn btn-primary" onclick="cargarTexto()" type="button"
//                          classs="btn btn-warning btn-rounded btn-sm
//                              my-0">editar</button>
//                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button></span>
//                </div>
//             </div>
//          </div>';

// echo $listado;

}
