<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Personas</title>
</head>
<body>
    <h2>Lista de Personas</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $persona->nombre }}</td>
                    <td>{{ $persona->edad }}</td>
                    <td>{{ $persona->rol }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
