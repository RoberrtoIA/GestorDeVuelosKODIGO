<?php
    $contador = 0;
        foreach($matrizDestinos as $destinos)
        {
            $contador++;
            echo '<tr>';
            echo '<th scope="row">'.$contador.'</th>';
            echo '<td class="ciudad">'. $destinos["ciudad"]. '</td>';
            echo '<td class="vuelo">'. $destinos["vuelo"]. '</td>';
            echo '<td class="boton"><button type="submit" class="btn btn-outline-light" name="destino['. $destinos["ciudad"]. ']['. $destinos["vuelo"]. ']">';
            // echo '<td class="boton"><button type="submit" class="btn btn-outline-light" name="destino" value="'. $destinos["ciudad"]. ' '. $destinos["vuelo"].'">';
            echo '<i class="fas fa-calendar-check"></i>';
            echo '</button></td>';
            echo '</tr>';
        }
?>