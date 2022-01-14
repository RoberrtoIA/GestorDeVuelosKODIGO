<?php
$contador = 0;
foreach ($matrizVuelosDia as $vuelosDia) {
    $contador++;
    echo "\t\t\t\t" . '<tr>' . "\n";
    // echo "\t\t\t\t\t" . '<th class="ciudad">' . $vuelosDia['idVuelos'] . '</th>';
    // echo '<td class="ciudad">' . $vuelos["idVuelos"] . '</td>';
    echo '<td class="ciudad">' . $vuelosDia["idVuelos"] . '</td>';
    echo '<td class="ciudad">' . $vuelosDia["NumeroVuelo"] . '</td>';
    echo '<td class="vuelo">' . $vuelosDia["PaisCiudad_origen"] . '</td>';
    echo '<td class="vuelo">' . $vuelosDia["PaisCiudad_destino"] . '</td>';
    echo '<td class="vuelo">' . $vuelosDia["vuelo"] . '</td>';
    echo '<td class="vuelo">' . $vuelosDia["Salida"] . '</td>';
    echo '<td class="vuelo">' . $vuelosDia["Retraso"] . '</td>';
    echo '<td class="vuelo">' . $vuelosDia["Tiempo_retraso"] . '</td>';
    echo '<td class="vuelo">' . $vuelosDia["estado"] . '</td>';
    echo '<td class="vuelo">' . $vuelosDia["Aerolinea"] . '</td>';
    echo '<td class="vuelo"><button type="submit" name="climaID['. $vuelosDia["idVuelos"]. ']['. $vuelosDia["PaisCiudad_destino"]. ']" class="btn btn-outline-light clima"><i class="fas fa-cloud-moon-rain"></i></button></td>';
    echo "\t\t\t\t" . '</tr>' . "\n";
}
?>
