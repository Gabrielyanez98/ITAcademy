<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar.php" method="post">
        <label> valor 1</label>
        <p></p>
        <input type="text" name="val1">
        <p></p>
        <label>valor 2</label>
        <p></p>
        <input type="text" name="val2">
        <p></p>
        <select name="opcion">
             <option value="suma">Suma</option>
             <option value="resta">Resta</option>
             <option value="division">Divisón</option>
             <option value="multiplicacion">Multiplicación</option>
        </select>
        <button>Calcular</button>
    </form>
</body>
</html>