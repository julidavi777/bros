@extends('layouts.admin')

@section('titulo', 'Roles')

@section('contenido')


    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <form action="/roles/{{ $role->id }}" method="post">
        @csrf
        @method('PUT') <!-- Para indicar que es una solicitud PUT -->
        <label for="name">Nombre del Rol:</label>
        <input type="text" id="name" name="name" value="{{ $role->name }}" required>
        
        <table>
            <thead>
                <tr>
                    <th>Permiso</th>
                    <th>Habilitar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($permission as $permiso)
                    <tr>
                        <td>{{ $permiso->name }}</td>
                        <td>
                            <input type="checkbox" name="permission[]" value="{{ $permiso->name }}" 
                            {{ $role->hasPermissionTo($permiso->name) ? 'checked' : '' }}>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <button type="submit">Actualizar Rol</button>
    </form>


@endsection