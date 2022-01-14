<?php

    require_once __DIR__ . '/../Modelo/gestion_modelo.php';

    $vuelos = new Gestion_Modelo();

    var_dump($_POST['razon']); // Retraso
    var_dump($_POST['hora']); // Tiempo retraso
    var_dump($_POST['enviarFinal']); // Id
    var_dump($_POST['estado']); // Estado

    $hora = $_POST['hora']. ':00:00';

    $vuelos->modificar_vuelo($hora, $_POST['razon'], $_POST['estado'], $_POST['enviarFinal']);
    // $vuelos->modificar_vuelo('5', 'Siii', 'Cancelado', 10);


    header('Location: ../Vista/ActualizarVueloBundle/actualizar.php');
    die();

?>