<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>crear empleado</h1>

    <form action="{{route('empleados.store')}}" method="POST">

        @csrf
        <label for="">Nombre
            <input type="text" name="nombre">
        </label>
        <label for="">Apellido
            <input type="text" name="apellido">
        </label>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>