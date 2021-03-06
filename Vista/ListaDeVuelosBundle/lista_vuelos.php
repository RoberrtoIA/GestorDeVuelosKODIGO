<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/vuelo.css">
    <link rel="shortcut icon" href="../../assets/img/ico/viaje.png">
    <link href="../../assets/css/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    <!--load all styles -->

    <title>Registro de Vuelos</title>
</head>

<body class="fondo">
    <div class="container menu">
        <center>
            <h1 id="titulo">Registro de Vuelos</h1>
        </center>
        <div class="contenido">
            <table class="table table-hover noselect">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th class="ciudad" scope="col">Numero Vuelo</th>
                        <th class="vuelo" scope="col">Origen</th>
                        <th class="vuelo" scope="col">Destino</th>
                        <th class="vuelo" scope="col">Fecha de Salida</th>
                        <th class="vuelo" scope="col">Fecha de Llegada</th>
                        <th class="vuelo" scope="col">Vuelo</th>
                        <th class="vuelo" scope="col">Tiempo de Retraso</th>
                        <th class="vuelo" scope="col">Razon</th>
                        <th class="vuelo" scope="col">Areonave</th>
                        <th class="vuelo" scope="col">Areolinea</th>
                    </tr>
                </thead>
                <form action="areonave.php" method="post">
                    <tbody>
                        <?php
                        require_once('../../Controlador/vuelos_controlador.php');
                        ?>
                    </tbody>
                </form>
            </table>
        </div>

    </div>
    <div class="container salir">
        <a href="../../index.html"><button type="button" class="btn btn1 btn-outline-light">Men??</button></a>
    </div>
    <?php
    // var_dump($_GET['destino']);
    // echo print_r($_GET['destino'], true);
    // foreach ($_GET['destino'] as $key => $value) {
    //     echo $key. ' '. $value;
    // }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>