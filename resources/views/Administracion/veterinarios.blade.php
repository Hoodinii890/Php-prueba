@extends('layouts.menuAdministracion')


@section('contenido')
   <div class="formn">
      <div class="card">
         <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Veterinarios</h3>
         
         @if (session('success'))
            <h2 class="alert alert-success">{{session('success')}}</h2>
         @endif
         @error('tel')
            <h2 class="alert alert-danger">{{$message}}</h2>
         @enderror
         <div class="card-body">
         <div id="table" class="table-editable">
            <span class="table-add float-right mb-3 mr-2"><a href="#!" data-toggle="modal" data-target="#exampleModal" class="text-success"><i
                  class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
            <table class="table table-bordered table-responsive-md table-striped text-center">
               
               <thead class="">
               <tr>
                  <th class="text-center">Id</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Tel</th>
                  <th class="text-center">Modificar</th>
                  <th class="text-center" onclick="eliminarUsuario()">Eliminar</th>
               </tr>
               </thead>

               <tbody>
                  @if (strlen($Veterinarios)>2)
                  @foreach ($Veterinarios as $Veterinario)
                  <tr>
                     <th>{{$Veterinario->id}}</th>
                     <th>{{$Veterinario->Nombre}}</th>
                     <th>{{$Veterinario->Telefono}}</th>
                     <th>
                        <form action="" method="post">
                           @csrf
                           <div class="btn btn-primary" onclick="EditaVeterinario({{$Veterinario->id}}, '{{$Veterinario->Nombre}}', '{{$Veterinario->Telefono}}')" data-toggle="modal" data-target="#modificarVeterinario">Editar</div>
                        </form>
                     </th>
                     <th>
                        <form id="formp" action="#" method="post">
                           @csrf
                           @method('DELETE')
                           <div  class="btn btn-danger" onclick="EliminarVeterinario('{{route('delVet', [$Veterinario->id])}}')">Eliminar
                              
                           </div>
                        </form>
                     </th>
                  </tr>
                  
                  @endforeach
                  @else
                       <tr><td>No hay veterinarios registrados actualmente</td></tr>
                  @endif
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
<br>

<a class="collapse-item" href="{{route('admin')}}">Administración de Usuarios</a>

@endsection
@section('modales')
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Registro de Veterinario</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <!-- formulario registro -->

            <form class="form-horizontal" action="" method="post">
               @csrf
               <!-- Text input-->
               <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Nombres y Apellidos</label>  
                  <div class="col-md-8">
                     <input id="nombre" name="Nombre" type="text" placeholder="Juan Cardona" class="form-control input-md" required="">
                  </div>
               </div>
               <!-- Text input-->
               <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Telefono/Celular</label>  
                  <div class="col-md-8">
                     <input id="tel" name="tel" type="number" placeholder="+573002903032" class="form-control input-md" required="">
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

    {{-- Modal editar veterinario --}}
   <div class="modal fade" id="modificarVeterinario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar Veterinario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div id="datosModificar" class="modal-body">
            <form class="form-horizontal" action="{{route('editVet_update')}}" method="post">
               @csrf
               @method('PATCH')
               <input type="hidden" id="id_editarVeterinario" name="id" value="">
               <!-- Text input-->
               <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Nombres y Apellidos</label>  
                  <div class="col-md-8">
                     <input id="nombre_editarVeterinario" name="Nombre" type="text" value="" class="form-control input-md" required="">
                  </div>
               </div>
               <!-- Text input-->
               <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Telefono/Celular</label>  
                  <div class="col-md-8">
                     <input id="tel_editarVeterinario" name="tel" type="number" value="" class="form-control input-md" required="">
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
@endsection
   </body>
   
</html>