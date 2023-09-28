@extends('layouts.admin')

@section('titulo')
<span>Roles</span>
<a href="" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#createRolmodal" title="Crear Roles">
    <i class="fas fa-plus"></i>
</a>
@endsection

@section('contenido')
@include('roles.modals.createUsuario')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table id="tabla-clientes" class="table table-striped table-bordered" style="font-size: 14px;">
                        <thead>
                            <tr>
                                <th>Nombre:</th>
                                <th>Fecha de creación:</th>
                                <th>Acciones:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Aquí irán los datos de tu tabla, reemplaza esta sección con tus datos -->
                            <tr>
                                <td>operativo</td>
                                <td>18/19/2023</td>
                                <td>
                                    <a href="" class="edit-form-data" data-toggle="modal" data-target="#editModal" title="Editar">
                                        <i class="far fa-edit"></i>
                                    </a>

                                    <!-- Espacio en blanco -->
                                    <span>&nbsp;&nbsp;</span>

                                    <a href="" class="delete-form-data" data-toggle="modal" data-target="#deleteModal" title="Eliminar">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            <!-- Fin de los datos de ejemplo -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <form action="{{ route('asignar_permisos') }}" method="POST">
    @csrf

    <label for="nombre_rol">Nombre del Rol:</label>
    <input type="text" name="nombre_rol" id="nombre_rol" required>

    <label>Permisos:</label>
    @foreach($permisos as $permiso)
    <label>
        <input type="checkbox" name="permisos[]" value="{{ $permiso->name }}">
        {{ $permiso->name }}
    </label>
    @endforeach

    <button type="submit">Guardar</button>
</form> -->
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('libs/datatables/dataTables.bootstrap4.min.css')}}">
@endpush

@push('scripts')
<script src="{{asset('/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>
@endpush
