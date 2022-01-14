<?php

    require_once __DIR__ . '/../Modelo/gestion_modelo.php';

    $vuelosDia = new Gestion_Modelo();
    $matrizVuelosDia = $vuelosDia->get_vuelos_dia();

    require_once __DIR__ . '/../Vista/VueloPorDiaBundle/vuelo_dia_vista.php';

?>