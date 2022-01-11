<?php
    require_once __DIR__ . '/../Modelo/gestion_modelo.php';

    $vuelos = new Gestion_Modelo();
    // $agregarVuelo = $vuelos->agregar_vuelo();

    if (isset($_POST['fecha'])) {
        session_start();
        // $_SESSION["admin"];
        $random = random_int(0, 23);
        $inicio = $_POST['hora']. ':00:00';
        // echo $_POST['fecha'];
        $fecha_salida = $_POST['fecha']. ' '. $inicio;
        // echo $fecha_salida;
        // echo $_POST['avion'];
        // var_dump($_SESSION["admin"]);
        $array_viaje = array();
        foreach ($_SESSION["admin"] as $key => $value) {
            // echo $key. ' ';
            array_push($array_viaje, $key);
            foreach ($value as $keys => $values) {
                // echo $keys. ' ';
                array_push($array_viaje, $keys);
            }
        }
        $hora = explode(":", $array_viaje[1]);
        var_dump($hora);
        echo $hora[0]. '<br>';
        echo $hora[1]. '<br>';
        // $fecha_llegada = date($fecha_salida, strtotime(sprintf("+%d hours", 5)));
        // $fecha_llegada = (clone ($fecha_salida->format('Y-m-d H:i:s')))->add(new DateInterval("PT{$hours}H"));
        // $fecha_llegada = date('Y-m-d H:i:s',strtotime('+'. $hora. ' hour',strtotime($fecha_salida)));
        $new_date = date("Y-m-d H:i:s", strtotime(sprintf('+%d hours', $hora[0]), strtotime($fecha_salida)));
        $newtimestamp = strtotime($new_date. ' + '. $hora[1]. ' minute');
        // echo $new_date;
        echo $fecha_salida;
        echo '<br>';
        // echo $new_date;
        echo date('Y-m-d H:i:s', $newtimestamp);
        echo '<br>';
        foreach ($array_viaje as $value) {
            echo $value. ' ';
        }
        // $fecha_llegada = explode(" ", $pizza);
        $PaisCiudad_origen = 'El Salvador';
        $PaisCiudad_destino = $array_viaje[0];
        $FechaHora_salida = $fecha_salida;
        $FechaHora_llegada = date('Y-m-d H:i:s', $newtimestamp);
        $Tiempo_retraso = '00:00:00';
        $Areonave_idAreonave = $_POST['avion'];
        $vuelos->agregar_vuelo($PaisCiudad_origen, $PaisCiudad_destino, $FechaHora_salida, $FechaHora_llegada, $Tiempo_retraso, $Areonave_idAreonave);
        header('Location: ../Vista/ListaDeVuelosBundle/lista_vuelos.php');
        die();
    }
?>