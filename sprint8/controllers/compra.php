<?php

    require_once 'db.php';

    class Compra {
        function list(){
            $connection = new Connection();

            $mysql = $connection->create();

            $sql = "SELECT * FROM php_m8.compra";
            $result = $mysql->query($sql);
            $compra = $result->fetch_all(MYSQLI_ASSOC);

            $connection-> close ($mysql);

            return $compra;
        }

        function create($request){
            $connection = new Connection();

            $mysql = $connection->create();

            $sql = "INSERT INTO compra(nom, quantitat, preu) VALUES ('{$request['nom']}', '{$request['quantitat']}', '{$request['preu']}')";

            $result = $mysql->query($sql);

            $connection -> close($mysql);

            return $result;

        }
    }
?>
