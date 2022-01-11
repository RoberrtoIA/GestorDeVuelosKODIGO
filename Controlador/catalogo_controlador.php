<?php

    require_once __DIR__ . '/../Modelo/gestion_modelo.php';

    $catalogo = new Gestion_Modelo();
    $matrizCatalogos = $catalogo->get_catalogo();

    require_once __DIR__ . '/../Vista/CatalogoBundle/catalogo_vista.php';

?>