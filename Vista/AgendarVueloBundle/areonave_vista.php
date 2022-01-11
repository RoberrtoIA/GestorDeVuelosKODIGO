<?php
$select = array();
$selectID = array();
$categoria = array();
foreach ($matrizDestinos as $destinos) {
    if (strtotime($destinos["vuelo"]) > strtotime($destinoElegido[1])) {
        echo "\t\t\t\t" . '<tr>' . "\n";
        echo "\t\t\t\t\t" . '<th scope="row">' . $destinos["idAreonave"] . '</th>';
        echo '<td class="ciudad">' . $destinos["Modelo"] . '</td>';
        echo '<td class="vuelo">' . $destinos["Capacidad_pasajeros"] . '</td>';
        echo '<td class="ciudad">' . $destinos["Rango_combustible_lleno"] . '</td>';
        echo '<td class="ciudad">' . $destinos["Aerolinea"] . '</td>';
        echo '<td class="ciudad">' . $destinos["vuelo"] . '</td>';
        echo '<td class="ciudad">' . $destinos["categoria"] . '</td>';
        echo "\t\t\t\t" . '</tr>' . "\n";
        array_push($select, $destinos["Modelo"]);
        array_push($selectID, $destinos["idAreonave"]);
        array_push($categoria, $destinos["categoria"]);
    }
}

// public function select()
// {
//     $var = '';
//     foreach ($select as $key => $value) {
//         if ($value == 0) {
//             $var .= '<option selected value="'. $value. '">'. $value. '</option>';
//         } else {
//             $var .= '<option value="'. $value. '">'. $value. '</option>';
//         }
//     }
//     return $var;
// }
?>
