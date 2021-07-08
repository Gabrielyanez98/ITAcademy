<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Bienvenid@ {{$empleado->nombre}} </h1>

    <form action="{{route('empleados.update', $empleado)}}" method="POST">

        @csrf 

        @method('put')

        <label for="">
            Nombre: 
            <br>
            <input type="text" name="nombre" value="{{$empleado->nombre}}">
        </label>

        <br>
        <label for="">
            Apellido: 
            <br>
            <input type="text" name="apellido" value="{{$empleado->apellido}}">
        </label>
        <br>
        <button type="submit">Actualizar empleado</button>
    </form>
    <form action="{{route('empleados.delete', $empleado)}}" method="POST">

        @csrf

        @method('delete')

        <button type="submit">Eliminar empleado</button>
    </form>

</body>
</html>