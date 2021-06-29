<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    require_once 'controllers/compra.php';
    $compra = new Compra();

    $id = $_GET['id'];

    $data = $compra-> show($id);


?>

    <form method="POST" action="myRequest/editRequest.php?id=<?php echo $data['id']; ?>">
        
        <label for="nom">Escribe el producto a comprar</label>
        <textarea name="nom" id="nom" cols="30" rows="10">
        <?php echo $data ['nom']; ?>
        </textarea>

        <label for="quantitat">Cantidad</label>
        <input type="text" value="<?php echo $data ['quantitat']; ?>" name="quantitat" id="quantitat">

        <label for="preu">Precio</label>
        <input type="text" value="<?php echo $data ['preu']; ?>" name="preu" id="preu">

        
         
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>