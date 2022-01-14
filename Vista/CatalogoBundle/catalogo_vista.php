<?php
$contador = 0;
$vuelos = 0;
foreach ($matrizCatalogos as $catalogos) {
    $contador++;
    echo "\t\t\t\t" . '<tr>' . "\n";
    echo "\t\t\t\t\t" . '<th scope="row">' . $contador . '</th>';
    echo '<td class="vuelo">' . $catalogos["aerolinea"] . '</td>';
    echo '<td class="vuelo">' . $catalogos["Modelo"] . '</td>';
    echo '<td class="vuelo">' . $catalogos["capacidad"] . '</td>';
    echo '<td class="vuelo">' . $catalogos["Millas"] . '</td>';
    echo '<td class="vuelo">' . $catalogos["vuelo"] . '</td>';
    echo "\t\t\t\t" . '</tr>' . "\n";
    $vuelos += $catalogos["vuelo"];
}
echo '<tfoot>';
echo '<tr>';
echo '<td class="vuelo"></td>';
echo '<td class="vuelo"></td>';
echo '<td class="vuelo"></td>';
echo '<td class="vuelo"></td>';
echo '<td class="vuelo"></td>';
echo '<td class="vuelo">' . $vuelos. '</td>';
echo '</tr>';
echo '</tfoot>';
