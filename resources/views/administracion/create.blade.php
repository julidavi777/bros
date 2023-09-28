<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Rol</title>
</head>
<body>
    <h1>Crear Rol</h1>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <form action="/roles" method="post">
        @method('post')
        @csrf
        <label for="name">Nombre del Rol:</label>
        <input type="text" id="name" name="name" required>
        
        <table>
            <thead>
                <tr>
                    <th>Permiso</th>
                    <th>Habilitar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($permisos as $permiso)
                    <tr>
                        <td>{{ $permiso->description }}</td>
                        <td>
                            <input type="checkbox" name="permission[]" value="{{ $permiso->name }}">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        <button type="submit">Guardar Rol</button>
    </form>
</body>
</html>
