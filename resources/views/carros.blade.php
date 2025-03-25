<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de carros</title>
</head>
<body>
    <h2>Lista de carros</h2>
    <table border="1">
        <thead>
            <tr>
                <th>carros</th>
                <th>fecha</th>
                <th>rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carros as $carros)
                <tr>
                    <td>{{ $carros['modelo'] }}</td>
                    <td>{{ $carros['año'] }}</td>
                    <td>{{ $carros['rol'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>