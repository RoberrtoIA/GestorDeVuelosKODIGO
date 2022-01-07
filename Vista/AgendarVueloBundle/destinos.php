<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/agendarVuelo.css">
    <link rel="shortcut icon" href="../../assets/img/ico/viaje.png">
    <link href="../../assets/css/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet"> <!--load all styles -->

    <title>Seleccionar Destino</title>
</head>

<body class="fondo">
    <div class="container menu">
        <center><h1 id="titulo">Seleccionar Destino!</h1></center>
        <div class="contenido">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th class="ciudad" scope="col">Ciudad</th>
                    <th class="vuelo" scope="col">Vuelo</th>
                </tr>
            </thead>
            <form action="#" method="get">
            <tbody>
                <?php
                require_once('../../Controlador/destinos_controlador.php');
                ?>
                <!-- <tr>
                    <th class="numero" scope="row">1</th>
                    <td class="ciudad">Mark</td>
                    <td class="vuelo">Otto</td>
                    <td class="boton"><button type="button" class="btn btn-outline-light"><i class="fas fa-calendar-check"></i></button></td>
                </tr>
                <tr>
                <th class="numero" scope="row">1</th>
                    <td class="ciudad">Mark</td>
                    <td class="vuelo">Otto</td>
                    <td class="boton"><button type="button" class="btn btn-outline-light"><i class="fas fa-calendar-check"></i></button></td>
                </tr>
                <tr>
                <th class="numero" scope="row">1</th>
                    <td class="ciudad">Mark</td>
                    <td class="vuelo">Otto</td>
                    <td class="boton"><button type="button" class="btn btn-outline-light"><i class="fas fa-calendar-check"></i></button></td>
                </tr> -->
            </tbody>
            </form>
        </table>
        </div>
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