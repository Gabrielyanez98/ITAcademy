<?php

$conexion = mysqli_connect("localhost", "root", "","php_m8");

if($conexion->connect_error)
    die("PRoblemas con la conexión a la base de datos");

/*$conexion->query("INSERT INTO compra(nom, quantitat,preu) VALUES ('Plátano', 3, 15)") or die($conexion->error);

$conexion->query("INSERT INTO compra(nom, quantitat,preu) VALUES ('Manzana', 5, 20)") or die($conexion->error);

$conexion->query("INSERT INTO compra(nom, quantitat,preu) VALUES ('Tomate', 4, 18)") or die($conexion->error);*/


class Taula {
    function introducirProducto($conexion, $nombreUnidad,$cantidad, $precioUnidad){
        $conexion->query("INSERT INTO compra(nom,quantitat,preu) VALUES ('$nombreUnidad', $cantidad, $precioUnidad)") or die($conexion->error);
    }   
}

$aniadirProducto = new Taula;

$aniadirProducto-> introducirProducto($conexion,'Manzana', 4, 18);

$conexion->close();

?>