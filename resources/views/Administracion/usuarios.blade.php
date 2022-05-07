@extends('layouts.menuAdministracion')


@section('contenido')
   <div class="formn">
      <div class="card">
         <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Usuarios</h3>
         <div class="card-body">
         <div id="table" class="table-editable">
            <span class="table-add float-right mb-3 mr-2"><a href="#!" data-toggle="modal" data-target="#exampleModal" class="text-success"><i
                  class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
            <table class="table table-bordered table-responsive-md table-striped text-center">
               
               <thead class="">
               <tr>
                  <th class="text-center">Cod</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Edad</th>
                  <th class="text-center">Sexo</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Tel</th>
                  <th class="text-center">Modificar</th>
                  <th class="text-center" onclick="eliminarUsuario()">Eliminar</th>
               </tr>
               </thead>

               <tbody onload="buscar()">
               
               </tbody>
            </table>
         </div>
         </div>
      </div>
   </div>
@endsection
@section('urls')
<a class="collapse-item" href="{{route('confirmar')}}">Confirmar Cita</a>
<br>
<a class="collapse-item" href="{{route('citas')}} ">Concluir citas</a>
@endsection
@section('modales')
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <!-- formulario registro -->

            <form class="form-horizontal" action="../control/controlregistro.php" method="post" autocomplete="off">
               <!-- Text input-->
               <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Nombres y Apellidos</label>  
                  <div class="col-md-8">
                     <input id="nombre" name="nombre" type="text" placeholder="Juan Cardona" class="form-control input-md" required="">
                  </div>
               </div>
               <!-- Text input-->
               <div class="form-group">
                  <label class="col-md-4 control-label" for="cambio">E-Mail</label>  
                  <div class="col-md-8">
                     <input id="email" name="email" type="email" placeholder="Ejemplo@gmail.com" class="form-control input-md" required="">
                  </div>
               </div>
               <!-- Text input-->
               <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Edad</label>  
                  <div class="col-md-8">
                     <input id="edad" name="edad" type="number" placeholder="28" class="form-control input-md" required="">
                  </div>
               </div>
               <!-- Select Basic -->
               <div class="form-group">
                  <label class="col-md-4 control-label" name="sex" for="">Sexo</label>
                  <div class="col-md-8">
                     <select id="sex" name="sex" class="form-control">
                        <option value="1">Hombre</option>
                        <option value="2">Mujer</option>
                     </select>
                  </div>
               </div>
               <!-- Text input-->
               <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Telefono/Celular</label>  
                  <div class="col-md-8">
                     <input id="tel" name="tel" type="tel" placeholder="+573002903032" class="form-control input-md" required="">
                  </div>
               </div>
               <!-- Password input-->
               <div class="form-group">
                  <label class="col-md-4 control-label" for="pass">Contraseña</label>
                  <div class="col-md-8">
                     <input id="password" name="password" type="password" placeholder="************" class="form-control input-md" required="">
                  </div>
               </div>
               </fieldset>
            <div class="boton">
                     <button type="submit" name="submit" class="btn btn-info">Registrar</button>
                  </div>
            
               <br><br>

               </form>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="modificarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div id="datosModificar" class="modal-body">
            
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button onclick="modificarUsuario()" type="button" class="btn btn-primary">Guardar Cambios</button>
         </div>
         </div>
      </div>
   </div>
@endsection
   </body>
   
</html>