@extends('layouts.admin')

@section('titulo')

    <span>Clientes</span>

    <a href="" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#createClienteModal" title="Crear Clientes">
        <i class="fas fa-plus"></i>
    </a>

@endsection



@section('contenido')

@include('clientes.modals.createCliente')
@include('clientes.modals.updateCliente')
@include('clientes.modals.deleteCliente')


  <div class="card">
    <div class="card-body">
        <table id="tabla-clientes" class="table table-striped table-bordered dts">
            <thead>
            <tr>
                <th>Tipo identificación:</th>
                <th>Identificación:</th>
                <th>Nombre completo:</th>
                <th>Razon comercial:</th>
                <th>Numero telefono:</th>
                <th>Acciones:</th>
            </tr>
            </thead>
            <tbody>
                    <!-- Aquí irán los datos de tu tabla, reemplaza esta sección con tus datos -->
                    <tr>

                        <td>cc</td>
                        <td>1111111</td>
                        <td>Nombre Completo 1</td>
                        <td>Razón Comercial 1</td>
                        <td>333333</td>
                        <td>
                                <a href="" class="ver-form-data" data-toggle="modal" data-target="#verModal" title="ver">

                                <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>

                                <!-- Espacio en blanco -->
                            <span>&nbsp;&nbsp;</span>


                                <a href="" class="edit-form-data" data-toggle="modal" data-target="#editModal" title="Editar">

                                <i class="far  fa-edit"></i>
                                </a>

                                <!-- Espacio en blanco -->
                            <span>&nbsp;&nbsp;</span>

                                <a href="" class="delete-form-data" data-toggle="modal" data-target="#deleteModal" title="Eliminar">

                                <i class="far  fa-trash-alt"></i>
                                </a>
                        </td>
                    </tr>
                    <!-- Fin de los datos de ejemplo -->
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


