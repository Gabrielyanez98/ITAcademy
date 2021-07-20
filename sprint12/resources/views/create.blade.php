<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <br>
    <br>
    <section class="container">

    <form action="{{route('equipo.store')}}" method="POST">

        @csrf

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Equipo Local: </span>
            <input type="text" class="form-control" name="equipoLocal" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Equipo Visitante: </span>
            <input type="text" class="form-control"  name="equipoVisitante"  aria-label="Username" aria-describedby="basic-addon1">
        </div>
        
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Goles Equipo Local: </span>
            <input type="text" class="form-control"  name="golesLocal"  aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Goles Equipo Visitante: </span>
            <input type="text" class="form-control" name="golesVisitante"  aria-label="Username" aria-describedby="basic-addon1">
        </div>


        
        <input type="submit" class="btn btn-primary" value="Enviar">
       
    </form>


</body>
</html>