<?php
if (isset($_GET['climaID'])) {
    $clima_array = array();
    $idVuelo = $_GET['climaID'];
    // echo $_GET['climaID'];
    $array_clima = array();
    foreach ($_GET['climaID'] as $key => $value) {
        // echo $key. ' ';
        array_push($array_clima, $key);
        foreach ($value as $keys => $values) {
            // echo $keys. ' ';
            array_push($array_clima, $keys);
        }
    }

    // echo $array_clima[1];
    $apiData = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=" . $array_clima[1] . "&appid=7718bc80eef9df68ba11fdffa01d32ac");
    $weatherArray = json_decode($apiData, true);
    //c= J - 273.15
    $tempCelsius = $weatherArray['main']['temp'] - 273;
    $weather = "" . $weatherArray['name'] . ", " . $weatherArray['sys']['country'] . "" . intval($tempCelsius) . " &deg;C";
    $weather = "Condicion del Clima : " . $weatherArray['weather']['0']['description'] . "";
    array_push($clima_array, $weather);
    // print_r($weather);
    $weather = "Precion Atmosferica : " . $weatherArray['main']['pressure'] . "";
    array_push($clima_array, $weather);
    // print_r($weather);
    $weather = "Velcidad de viento : " . $weatherArray['wind']['speed'] . " metros/seg";
    array_push($clima_array, $weather);
    // print_r($weather);
    $weather = "Nubosidad: " . $weatherArray['clouds']['all'] . " % ";
    array_push($clima_array, $weather);
    // print_r($weather);
    @session_start();
    $_SESSION['clima'] = '';
    foreach ($clima_array as $key => $value) {
        $_SESSION['clima'] .= $value . ", ";
        echo $value . ", ";
    }
}
