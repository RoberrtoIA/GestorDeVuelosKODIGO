<?php

if (array_key_exists('submit', $_GET)) {

    if (!$_GET['city']) {
        $error = "El campo esta solo";
    } else if ($_GET['city']) {
        //echo var_dump($_GET['city']);
        $apiData = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=" . $_GET['city'] . "&appid=7718bc80eef9df68ba11fdffa01d32ac");
        $weatherArray = json_decode($apiData, true);
        //c= J - 273.15
        $tempCelsius = $weatherArray['main']['temp'] - 273;
        $weather = "<b>" . $weatherArray['name'] . ", " . $weatherArray['sys']['country'] . " <b>" . intval($tempCelsius) . " &deg;C</b> <br>";
        $weather = "<b>Condicion del Clima : </b>" . $weatherArray['weather']['0']['description'] . "<br>";
        print_r($weather);
        $weather = "<b>Precion Atmosferica : </b>" . $weatherArray['main']['pressure'] . "<br>";
        print_r($weather);
        $weather = "<b>Velcidad de viento : </b>" . $weatherArray['wind']['speed'] . "metros/seg<br>";
        print_r($weather);
        $weather = "<b>Nubosidad: </b>" . $weatherArray['clouds']['all'] . " % <br><br>";
        print_r($weather);
    }
}


?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        <label for="city">Ingrese el nombre de la ciudad.</label>
        <p><input type="text" name="city" id="city" placeholder="Nombre de la ciudad"> </p>

        <button type="submit" name="submit">Submit now</button>


    </form>



    <?php
    if ($weather) {
        var_dump($weather . "<br>");

        // echo $weatherCelcius ."<br>";
        // echo $weatherPrecion ."<br>";
        //echo $weatherViento."<br>";
        //echo $weatherNubosidad."<br>";
    }
    if ($error) {
        echo $error;
    }

    // echo "<pre>";
    //echo print_r($weatherArray);

    //echo "</pre>";
    ?>



</body>

</html>