<?php

    require_once __DIR__ . '/../Modelo/gestion_modelo.php';

    $vuelos = new Gestion_Modelo();

    $hora = '00:00:00';
    @session_start();
    $vuelos->modificar_vuelo($hora, $_SESSION['clima'], 'Cancelar', $_SESSION['id']);
    // $vuelos->modificar_vuelo('5', 'Siii', 'Cancelado', 10);


    header('Location: ../Vista/VueloPorDiaBundle/vuelo_dia.php');
    die();

?>