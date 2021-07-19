<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <form action="{{route('equipo.store')}}" method="POST">

        @csrf

        <label for="">Equipo local: <input type="text" id="yo" name="equipoLocal"></label><br>
        <label for="">Equipo visitante: <input type="text" name="equipoVisitante"></label><br>
        <label for="">Goles equipo local <input type="text" name="golesLocal"></label><br>
        <label for="">Goles equipo visitante <input type="text" name="golesVisitante"></label><br>
        <input type="submit" value="Enviar">
       
    </form>


</body>
</html>