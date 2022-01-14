<?php
$contador = 0;
foreach ($matrizVuelos as $vuelos) {
    $contador++;
    echo "\t\t\t\t" . '<tr>' . "\n";
    echo "\t\t\t\t\t" . '<th scope="row">' . $vuelos["idVuelos"]. '</th>';
    // echo '<td class="ciudad">' . $vuelos["idVuelos"] . '</td>';
    echo '<td class="ciudad">' . $vuelos["NumeroVuelo"] . '</td>';
    echo '<td class="vuelo">' . $vuelos["PaisCiudad_origen"] . '</td>';
    echo '<td class="vuelo">' . $vuelos["PaisCiudad_destino"] . '</td>';
    echo '<td class="vuelo">' . $vuelos["FechaHora_salida"] . '</td>';
    echo '<td class="vuelo">' . $vuelos["FechaHora_llegada"] . '</td>';
    echo '<td class="vuelo">' . $vuelos["Tiempo_retraso"] . '</td>';
    echo '<td class="vuelo">' . $vuelos["Retraso"] . '</td>';
    echo '<td class="vuelo">' . $vuelos["estado"] . '</td>';
    // echo '<td class="vuelo"><button type="submit" name="cancelar" class="btn btn-outline-dark">Cancelar</button></td>';
    // echo '<td class="vuelo"><button id="botons'. $contador. '" onClick="reply_click2(this.id)" type="button" name="borrar" value="'. $vuelos["idVuelos"].'" data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn btn-outline-light">Cancelar</button></td>';
    echo '<td class="vuelo"><button id="boton'. $contador. '" onClick="reply_click(this.id)" type="button" name="actualizar" value="'. $vuelos["idVuelos"].'" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-light">Actualizar</button></td>';
    echo "\t\t\t\t" . '</tr>' . "\n";
}
?>
