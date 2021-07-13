<?php

    require_once '../controllers/compra.php';

    if(!isset($GET['id']) || $_GET['id'] == ''){
        header("Location: ../index.php");
    }

    $id = $_GET['id'];

    if(!isset($_POST['nom']) || $_POST['nom'] == '' || !isset($_POST['quantitat']) || $_POST['quantitat'] == ''|| !isset($_POST['preu']) || $_POST['preu'] == ''){
        exit('Error con la conexión a la base de datos');
    }

    $request = [
        "id" => $id,
        "nom" => $_POST['nom'],
        "quantitat" => $_POST['quantitat'],
        "preu" => $_POST['preu']
    ];

    $compra = new Compra();
    $result = $compra->update($request);

    if($result-> connect_error){
        die('Error de conexión ' . $connection -> connect_error);
    } else {
        header("Location: ../index.php");
    }

?>