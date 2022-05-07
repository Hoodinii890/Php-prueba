<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cargarProductoController extends Controller
{
    // include('../modelo/conexion/conexion.php');

  // $codP = "1";

  // $query = "SELECT texto, NProducto, precio FROM productos where codImagen = $codP";

  // $resultado = mysqli_query($conexion, $query) or die("no fue posible ejecutar la selección");

  // $fila = mysqli_fetch_array($resultado);

  // $textoHtml = '<input type="hidden" id="codP" name="" type="null" value="1" disabled="disabled"> 
  
  //             <div class="form-group">
  //             <label class="col-md-4 control-label" for="usuario"></label> 
  //             <h1>Nombre</h1> 
  //             <input id="proP" name="" value="'.$fila['NProducto'].'" type="text" placeholder="Ingrese el texto" class="form-control input" required="required">
  //           </div>  
  
  //           <div class="form-group">
  //             <label class="col-md-4 control-label" for="usuario"></label> 
  //             <h1>texto</h1> 
  //             <input id="textoP" name="" type="text"value="'.$fila['texto'].'" placeholder="Ingrese el texto" class="form-control input" required="required">
  //           </div>
            
  //           <div class="form-group">
  //             <label class="col-md-4 control-label" for="usuario"></label> 
  //             <h1>Precio</h1> 
  //             <input id="precioP" name="" value="'.$fila['precio'].'" type="text" placeholder="Ingrese el texto" class="form-control input" required="required">
  //           </div>';

  //   echo $textoHtml;

}
