<?php
$contador = 0;
foreach ($matrizVuelos as $vuelos) {
    $contador++;
    echo "\t\t\t\t" . '<tr>' . "\n";
    echo "\t\t\t\t\t" . '<th scope="row">' . $contador . '</th>';
    // echo '<td class="ciudad">' . $vuelos["idVuelos"] . '</td>';
    echo '<td class="ciudad">' . $vuelos["NumeroVuelo"] . '</td>';
    echo '<td class="vuelo">' . $vuelos["PaisCiudad_origen"] . '</td>';
    echo '<td class="vuelo">' . $vuelos["PaisCiudad_destino"] . '</td>';
    echo '<td class="vuelo">' . $vuelos["FechaHora_salida"] . '</td>';
    echo '<td class="vuelo">' . $vuelos["FechaHora_llegada"] . '</td>';
    echo '<td class="vuelo">' . $vuelos["Tiempo_retraso"] . '</td>';
    echo '<td class="vuelo">' . $vuelos["Retraso"] . '</td>';
    echo '<td class="vuelo">' . $vuelos["Modelo"] . '</td>';
    echo "\t\t\t\t" . '</tr>' . "\n";
}
?>
