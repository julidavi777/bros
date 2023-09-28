@extends('layouts.admin')

@section('titulo', 'Roles')

@section('contenido')
@if (Session::has('msg'))
<div class="alert alert-success alert-dismissible fade show" role="alert">

    <strong> {{ Session::get('msg') }}</strong>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" ></button>
</div>
@endif
<h1>Roles</h1>
<table>
    <th>Nombre</th>
    <th>accion</th>

    @foreach ($roles as $role)
    <tr>

        <td>

            {{$role->name}}
        </td>

        <td>
            <a  class=" btn btn-primary" href="{{url('/roles/'. $role->id . '/edit')}}">Editar</a>

            <form action="{{ url('/roles/' . $role->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input class=" btn btn-danger" type="submit" value="Eliminar">
            </form>
        </td>
    </tr>

    @endforeach
</table>

@endsection