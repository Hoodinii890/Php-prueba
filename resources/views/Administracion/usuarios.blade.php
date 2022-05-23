@extends('layouts.menuAdministracion')


@section('contenido')
   <div class="formn">
      <div class="card">
         <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Usuarios</h3>
         @if (session('success'))
            <h2 class="alert alert-success">{{session('success')}}</h2>
         @endif
         @error('tel')
            <h2 class="alert alert-danger">{{$message}}</h2>
         @enderror
         @error('email')
            <h2 class="alert alert-danger">{{$message}}</h2>
         @enderror
         @if (session('error'))
            <h2 class="alert alert-danger">{{session('error')}}</h2>
         @endif
         @error('message')
            <h2 class="alert alert-info"></h2>
         @enderror
         @foreach ($errors->all() as $message)
            <h2 class="alert alert-warning">{{$message}}</h2>
         @endforeach
         <div class="card-body">
         <div id="table" class="table-editable">
            <span class="table-add float-right mb-3 mr-2"><a href="#!" data-toggle="modal" data-target="#exampleModal" class="text-success"><i
                  class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
            <table class="table table-bordered table-responsive-md table-striped text-center">

               <thead class="">
               <tr>
                  <th class="text-center">Id</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Edad</th>
                  <th class="text-center">Sexo</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Tel</th>
                  <th class="text-center">Modificar</th>
                  <th class="text-center">Eliminar</th>
               </tr>
               </thead>

               <tbody>
               @if (strlen($Users)>2)
                  @foreach ($Users as $user)
                     @if ($user->administrador == False)

                     <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->age}}</td>
                        <td>@if ($user->sex)
                           Masculino
                        @else
                           Femenino
                        @endif</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <th>
                           <form action="" method="post">
                              @csrf
                              <div class="btn btn-primary" onclick="EditaUser(
                                 {{$user->id}},
                                 '{{$user->name}}',
                                 '{{$user->phone}}',
                                 '{{$user->email}}',
                                 )" data-toggle="modal" data-target="#modificaruser">Editar</div>
                           </form>
                        </th>
                        <th>
                           <form id="formp" action="#" method="post">
                              @csrf
                              @method('DELETE')
                              <div  class="btn btn-danger" onclick="EliminarUser('{{route('delUser', [$user->id])}}')">Eliminar

                              </div>
                           </form>
                        </th>
                     </tr>

                     @endif

                  @endforeach
               @else
               @endif
                     <tr><td>No hay usuarios registrados actualmente</td></tr>
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
<a class="collapse-item" href="{{route('Veterinarios')}} ">Veterinarios</a>
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

            <form class="form-horizontal" action="{{route('createUser')}}" method="post" autocomplete="off">
               <!-- Text input-->
               @csrf
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
                        <option value="0">Mujer</option>
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
               <div class="form-group">
                  <label class="col-md-4 control-label" for="pass">Confirmar Contraseña</label>
                  <div class="col-md-8">
                     <input id="password" name="password1" type="password" placeholder="************" class="form-control input-md" required="">
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

   <div class="modal fade" id="modificaruser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div id="datosModificar" class="modal-body">
            <form class="form-horizontal" action="{{route('editUsuario')}}" method="post">
               @csrf
               @method('PATCH')
               <input type="hidden" id="id_editaruser" name="id" value="">
               <!-- Text input-->
               <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Nombres y Apellidos</label>
                  <div class="col-md-8">
                     <input id="nombre_editaruser" name="Nombre" type="text" value="" class="form-control input-md" required="">
                  </div>
               </div>
               <!-- Text input-->
               <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Telefono/Celular</label>
                  <div class="col-md-8">
                     <input id="tel_editaruser" name="tel" type="number" value="" class="form-control input-md" required="">
                  </div>
               </div>
               <!-- Text input-->
               <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Email</label>
                  <div class="col-md-8">
                     <input id="email_editaruser" name="email" type="email" value="" class="form-control input-md" required="">
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
