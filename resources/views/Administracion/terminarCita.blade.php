@extends('layouts.menuAdministracion')
@section('contenido')
  <div class="formn">
    <div class="card">
      <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Concluir citas</h3>
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
                </tr>
            </thead>
            <tbody>
              @if (strlen($Citas)>2)
              @foreach ($Citas as $cita)
                @if ($cita->Estado==True)

                    <tr>
                        @php
                        $User = $Users->find($cita->user_id);
                        $Veterinario = $Veterinarios->find($cita->veterinario_id);
                        @endphp
                        <td>{{$cita->id}}</td>
                        <td>{{$cita->Fecha}}</td>
                        <td>{{$cita->Hora}}</td>
                        <td>{{$User->name}}</td>
                        <td>{{$User->email}}</td>
                        <td>{{$cita->Nombre_Mascota}}</td>
                        <td>{{$Veterinario->Nombre}}</td>
                        <th>
                            <form id="formp" action="#" method="post">
                            @csrf
                            @method('DELETE')
                            <div  class="btn btn-warning" onclick="Terminarcita('{{route('delCita', [$cita->id])}}')">Concluir

                            </div>
                            </form>
                        </th>
                    </tr>
                    @else

                @endif
              @endforeach

            @endif
            <tr><td>No hay más citas activas actualmente</td></tr>
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
<a class="collapse-item" href="{{route('admin')}} ">Administración Usuarios</a>
<br>
<a class="collapse-item" href="{{route('Veterinarios')}} ">Veterinarios</a>
@endsection
@section('modales')
  <div class="modal fade" id="Cita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmar cita</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="datosModificar" class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button onclick="activo()" type="button" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </div>
    </div>
  </div>
@endsection

   </body>

</html>
