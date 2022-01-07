<?php

    require_once __DIR__ . '/../Modelo/gestion_modelo.php';
    // require_once('/Kodigo/Proyectos/GestorDeVuelosKODIGO/Modelo/gestion_modelo.php');

    $destinos = new Gestion_Modelo();
    $matrizDestinos = $destinos->get_destinos();

    require_once __DIR__ . '/../Vista/AgendarVueloBundle/destinos_vista.php';
    // require_once('/Kodigo/Proyectos/GestorDeVuelosKODIGO/Vista/AgendarVueloBundle/destinos_vista.php');

?>