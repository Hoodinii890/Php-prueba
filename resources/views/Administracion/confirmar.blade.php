@extends('layouts.menuAdministracion')


@section('contenido')
<div class="formn">
  <div class="card">
      <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Citas</h3>

         @if (session('success'))
            <h2 class="alert alert-success">{{session('success')}}</h2>
         @endif
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
          
          <table class="table table-bordered table-responsive-md table-striped text-center">
          <thead>
              <tr>
              <th class="text-center">Id</th>
              <th class="text-center">Fecha</th>
              <th class="text-center">Hora</th>
              <th class="text-center">Nombre</th>
              <th class="text-center">Email</th>
              <th class="text-center">Nombre Mascota</th>
              <th class="text-center">Nombre Veterinario</th>
              <th class="text-center">Confirmar cita</th>
              <th class="text-center">Eliminar</th>
              </tr>
          </thead>
          <tbody>
            @if (strlen($Citas)>2)
              @foreach ($Citas as $cita)
                @if ($cita->Estado==False)
                    
                    <tr>
                        @php  
                        $User = $Users->find($cita->user_id);
                        $Veterinario = $Veterinarios->find($cita->medico_id);
                        @endphp
                        <td>{{$cita->id}}</td>
                        <td>{{$cita->Fecha}}</td>
                        <td>{{$cita->Hora}}</td>
                        <td>{{$User->name}}</td>
                        <td>{{$User->email}}</td>
                        <td>{{$cita->Nombre_Mascota}}</td>
                        <td>{{$Veterinario->Nombre}}</td>
                        <th>
                            <form action="" method="post">
                            @csrf
                            <div class="btn btn-primary" onclick="Editarcita({{$cita->id}}, '{{$cita->Fecha}}', '{{$cita->medico_id}}', '{{$cita->Hora}}','{{$Veterinario->Nombre}}')" data-toggle="modal" data-target="#modificarCita">Editar</div>
                            </form>
                        </th>
                        <th>
                            <form id="formp" action="#" method="post">
                            @csrf
                            @method('DELETE')
                            <div  class="btn btn-danger" onclick="Eliminarcita('{{route('delVet', [$cita->id])}}')">Eliminar
                                
                            </div>
                            </form>
                        </th>
                    </tr>
                    @else
               <tr><td>No hay más citas en espera actualmente</td></tr>
                @endif
              @endforeach
              
            @endif
          </tbody>
          </table>
      </div>
      </div>
  </div>
</div>
@endsection
@section('urls')
<a class="collapse-item" href="{{route('admin')}}">Administración de Usuarios</a>
<br>
<a class="collapse-item" href="{{route('citas')}} ">Concluir citas</a>
<br>
<a class="collapse-item" href="{{route('medico')}} ">Veterinarios</a>
@endsection
@section('modales')
<div class="modal fade" id="modificarCita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Confirmar cita</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div id="datosModificar" class="modal-body">
        <form class="form-horizontal" action="{{route('activarCita')}}" method="post">
            @csrf
            @method('PATCH')
            <input type="hidden" id="id_editarcita" name="id" value="">
            <!-- Text input-->
            <div class="form-group">
               <label class="col-md-4 control-label" for="textinput">Fecha</label>  
               <div class="col-md-8">
                  <input id="fecha_editarcita" name="fecha" type="date" value="2017-06-01" class="form-control input-md" required="">
               </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
               <label class="col-md-4 control-label" for="textinput">Veterinario</label>  
               <div class="col-md-8">
                  <select name="m_id" id="">
                      <option  value="" id="mid_editarcita"></option>
                      @foreach ($Veterinarios as $Vet)
                        <option id="veterinarios" value="{{$Vet->id}}">{{$Vet->Nombre}}</option>
                      @endforeach
                  </select>
               </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
               <label class="col-md-4 control-label" for="textinput">Hora</label>  
               <select id="hora" name="hora" class="">
                     <option value="6:00am">6:00am</option>
                     <option value="10:00am">10:00am</option>
                     <option value="1:00pm">1:00pm</option>
                  </select>
            </div>
                <input type="hidden" value="1" name="estado">
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