<?php

    require_once __DIR__ . '/../Modelo/gestion_modelo.php';

    $vuelos = new Gestion_Modelo();
    $matrizVuelos = $vuelos->get_vuelos();

    require_once __DIR__ . '/../Vista/ListaDeVuelosBundle/lista_vuelos_vista.php';

?>