@extends('layouts.admin')

@section('titulo')

<span>Oportunidades Comerciales</span>

<a href="" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#createOfertaModal" title="Crear Oferta Comercial">
    <i class="fas fa-plus"></i>
</a>

@endsection



@section('contenido')

@include('ofertas.modals.createOferta')
@include('ofertas.modals.updateOferta')
@include('ofertas.modals.deleteOferta')


<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabla-clientes" class="table table-striped table-bordered dts">
                <thead>
                    <tr>
                        <th style="width: 123px;">Color oportunidad:</th>
                        <th style="width: 140px;">Consecutivo:</th>
                        <th style="width: 200px;">Identificacion cliente:</th>
                        <th style="width: 180px;">Nombre completo:</th>
                        <th style="width: 280px;">Razón comercial:</th>
                        <th style="width: 280px;">Responsable:</th>
                        <th style="width: 300px;">Objeto:</th>
                        <th style="width: 125px;">Estado oportunidad:</th>
                        <th style="width: 125px;">Observaciones:</th>
                        <th style="width: 170px;">Acciones:</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí irán los datos de tu tabla, reemplaza esta sección con tus datos -->
                    <tr>
                        <td>
                            <div style="height: 40px; width: 40px; background-color: #FF0000;"></div>
                        </td>
                        <td>Consecutivo 1</td>
                        <td>Cliente 1</td>
                        <td>Nombre Completo 1</td>
                        <td>Razón Comercial 1</td>
                        <td>Responsable 1</td>
                        <td>Objeto 1</td>
                        <td>Estado 1</td>
                        <td>observacion</td>
                        <td>
                            <a href="" class="delete-form-data" data-toggle="modal" data-target="#deleteModal" title="Cotización">
                                <i class="fa fa-file" aria-hidden="true"></i>
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

                            <!-- Espacio en blanco -->
                            <span>&nbsp;&nbsp;</span>

                            <a href="" class="delete-form-data" data-toggle="modal" data-target="#deleteModal" title="Seguimientos">
                                <i class="fa fa-binoculars" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <!-- Fin de los datos de ejemplo -->
                </tbody>
            </table>
        </div>
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
