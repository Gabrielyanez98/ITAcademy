<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
    <form action="{{route('equipo.update', $liga)}}" method="POST">
       
        @csrf
    
        @method('put')

        <label for="">Equipo local: <input type="text" name="equipoLocal"  value="{{$liga->equipoLocal}}"></label><br>
        <label for="">Equipo visitante: <input type="text" name="equipoVisitante" value="{{$liga->equipoVisitante}}"></label><br>
        <label for="">Goles equipo local <input type="text" name="golesLocal" value="{{$liga->golesLocal}}"></label><br>
        <label for="">Goles equipo visitante <input type="text" name="golesVisitante" value="{{$liga->golesVisitante}}"></label><br>
        <input type="submit" value="Actualizar">
        
    </form>

    <form action="{{route('equipo.delete', $liga)}}" method="POST">
        @csrf

        @method('delete')

        <button type="submit">Eliminar equipo</button>
    </form>

    
</body>
</html>