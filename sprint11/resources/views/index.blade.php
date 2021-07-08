<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Página principal de empleados</h1>
    
    <a href="{{route('empleados.create')}}">Crear empleado</a>
    <br>
    <ul>
        @foreach ($empleados as $empleado)
            <li>
                <a href="{{route('empleados.edit', $empleado->id)}}">{{$empleado->nombre}}</a>
            </li>
           
        @endforeach
    </ul>
</body>
</html>