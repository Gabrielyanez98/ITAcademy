<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Catálogo de libros</h1>

    <ul>
        <li>Mi libro 1</li> 
            <button><a href="{{route('catalog.editVista', '1')}}">Editar</a> </button>
            <button>Eliminar</button>
        <li>Mi libro 2</li> 
            <button><a href="{{route('catalog.editVista', '1')}}">Editar</a> </button>
            <button>Eliminar</button>
        <li>Mi libro 3</li> 
            <button><a href="{{route('catalog.editVista', '1')}}">Editar</a> </button>
            <button>Eliminar</button>
    </ul>
</body>
</html>