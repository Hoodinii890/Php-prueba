@extends('layouts.menuAdministracion')


@section('contenido')
<div class="formn">
  <div class="card">
      <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Citas</h3>
      <div class="card-body">
      <div id="table" class="table-editable">
          <span class="table-add float-right mb-3 mr-2"><a href="#!" data-toggle="modal" data-target="#exampleModal" class="text-success"><i
              class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
          <table class="table table-bordered table-responsive-md table-striped text-center">
          <thead>
              <tr>
              <th class="text-center">Idcita</th>
              <th class="text-center">Fecha</th>
              <th class="text-center">Hora</th>
              <th class="text-center">Nombre</th>
              <th class="text-center">Email</th>
              <th class="text-center">Nombre mascota</th>
              <th class="text-center">Cod</th>
              <th class="text-center">Activo</th>
              <th class="text-center">Confirmar cita</th>
              <th class="text-center" onclick="eliminarUsuario()">Eliminar</th>
              </tr>
          </thead>
          <tbody>
              
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
<div class="modal fade" id="modificarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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