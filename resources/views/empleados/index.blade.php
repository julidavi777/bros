@extends('layouts.admin')

@section('titulo')

    <span>Empleados</span>

    <a href="" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#createModal" title="Crear Empleado">
        <i class="fas fa-plus"></i>
    </a>

@endsection



@section('contenido')

@include('empleados.modals.create')
@include('empleados.modals.update')
@include('empleados.modals.delete')


  <div class="card">
    <div class="card-body">
        <table id="tabla-empleados" class="table table-striped table-bordered dts">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>apellido</th>
                    <th>cedula</th>
                    <th>dirección</th>
                    <th>barrio</th>
                    <th>salario</th>
                </tr>
            </thead>
            <tbody>
                @foreach  ($empleados as $empleado)

                <tr class="text-center">
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->tipo_documento }}</td>
                    <td>{{ $empleado->num_documento }}</td>
                    <td>{{ $empleado->correo }}</td>
                    <td>{{ $empleado->num_telefonico }}</td>
                    <td>{{ $empleado->direccion }}</td>
                    <td>{{ $empleado->ciudad }}</td>
                    <td>
                                <a href="{{ route('empleados.show', $empleado->id) }}" class="ver-form-data"  data-id="{{ $empleado->id }}" title="ver">

                                <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>

                                <!-- Espacio en blanco -->
                            <span>&nbsp;&nbsp;</span>


                                <a href="{{ route('empleados.edit', $empleado->id) }}" class="edit-form-data" data-toggle="modal" data-target="#editModal"  data-id="{{ $empleado->id }}" title="Editar">

                                <i class="far  fa-edit"></i>
                                </a>

                                <!-- Espacio en blanco -->
                            <span>&nbsp;&nbsp;</span>

                                <a href="" class="delete-form-data" data-toggle="modal" data-target="#deleteModal" title="Eliminar">

                                <i class="far  fa-trash-alt"></i>
                                </a>
                        </td>
                </tr>

                @endforeach



            </tbody>

        </table>
    </div>
  </div>

@endsection


@push('styles')
   <link rel="stylesheet" href="{{asset('libs/datatables/dataTables.bootstrap4.min.css')}}">
@endpush

@push('scripts')
    <script src="{{asset('/libs/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>
@endpush


