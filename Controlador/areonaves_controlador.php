<?php

    require_once __DIR__ . '/../Modelo/gestion_modelo.php';

    $destinos = new Gestion_Modelo();
    $matrizDestinos = $destinos->get_areonaves();
    $destinoElegido = $destinos->get_destino_elegido();

    require_once __DIR__ . '/../Vista/AgendarVueloBundle/areonave_vista.php';

?>