<?php
$contador = 0;
foreach ($matrizCatalogos as $catalogos) {
    $contador++;
    echo "\t\t\t\t" . '<tr>' . "\n";
    echo "\t\t\t\t\t" . '<th scope="row">' . $contador . '</th>';
    echo '<td class="vuelo">' . $catalogos["aerolinea"] . '</td>';
    echo "\t\t\t\t" . '</tr>' . "\n";
}
?>
