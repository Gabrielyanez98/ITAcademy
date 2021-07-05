<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="{{route('catalog.create')}}" method="POST">
        <label>Introduce el nombre de tu libro:
            <input type="text" name="libro">
        </label>
        <button type="submit">Enviar libro</button>
    </form>

</body>

</html>