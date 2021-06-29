
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php
        require_once 'controllers/compra.php';
        $compra = new Compra();

        $compras = $compra->list();

    ?>

    



    <h1>Productos</h1>

    <table>
        <thead>
            <tr>
                <th></th>
                <th>Nombre producto comprado</th>
                <th>Cantidad</th>
                <th>precio</th>
                <th>total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($compras as $compra): ?>
            <tr>
                <th><?php echo $compra['id'] ?></th>
                <td>
                    <?php echo $compra['nom'] ?>
                </td>
                <td>
                    <?php echo $compra['quantitat'] ?>
                </td>
                <td>
                    <?php echo $compra['preu'] ?>
                </td>
                <td>
                    <button><a href="modificar.php?id=<?php echo $compra['id'] ?>">Modificar</a></button>
                    <button><a href="">Eliminar</a></button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <button><a href="insereix.php">Añadir nuevo producto</a></button>
    
</body>
</html>