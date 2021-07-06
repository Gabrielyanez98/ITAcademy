<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="{{route('cookie.form')}}" method="POST">
    @csrf
        <label for="">Nombre de usuario <input type="text" name="usuario"></label>
        <br>
        <label for="">Contraseña <input type="password" name="password" ></label>
        <br>
        <button type="submit">Iniciar sesión</button>
    </form>

    <h3><a href="{{route('recuperarPassword')}}">¿Has olvidado la contraseña? ¡Haz click aquí! </a></h5>

</body>
</html>