@extends('layouts.admin')

@section('titulo', 'Usuarios')

@section('contenido')
@if(session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif

<p>Este es mi contenido para el formulario Usuarios</p>
<a href={{ url('/usuarios/create') }}>registrar usuario</a> <br>

<table class="table table-dark table-striped  ">
                <thead>
                    <tr>

                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach ($users as $user)
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td> @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $rolName)
                            {{ $rolName }}
                            @endforeach
                        
                        @endif
                        </td>
                        <td class="d-flex">
                            @can('editar-usuario')
                            <a class=" mb-3 btn btn-warning" href="{{ url('/usuarios/' . $user->id . '/edit') }}">Editar</a>
                            @endcan
                            <form action="{{ url('/usuarios/' . $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class=" btn btn-danger" type="submit" value="Eliminar">
                            </form>
                        </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
@endsection