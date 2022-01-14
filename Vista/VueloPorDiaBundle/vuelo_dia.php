<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/vuelo_buscar.css">
    <link rel="shortcut icon" href="../../assets/img/ico/viaje.png">
    <link href="../../assets/css/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    <!--load all styles -->

    <title>Busqueda por Día</title>
</head>

<body class="fondo">
    <div class="container menu">
        <center>
            <h1 id="titulo">Busqueda por Día</h1>
        </center>
        <div class="contenido">
            <div class="row">
                <div class="col-2 offset-5">
                    <div class=" input-group mb-3">
                        <span class="input-group-text noselect" id="inputGroup-sizing-default">ID:</span>
                        <label name="Id" class="form-control centrar" id="message-text">
                            <?php
                            if (isset($_GET['climaID'])) {
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
                                // Aqui hacemos lo del clima <<<-----------==============================================
                                echo $array_clima[0];
                                session_start();
                                $_SESSION['id'] = $array_clima[0];
                            }

                            ?>
                        </label>
                    </div>
                </div>
            </div>
            <form action="../../Controlador/cancelar_vuelos_controlador.php" method="post">
            <div class="row">
                <div class="col-3 offset-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fas fa-search"></i></span>
                        <input type="date" class="form-control noselect" onchange="myFunction()" placeholder="Buscar por dia" id="myInput">
                    </div>
                </div>
                <div class="col-6">
                    <div class=" input-group mb-3">
                        <span class="input-group-text noselect" id="inputGroup-sizing-default">Razon:</span>
                        <textarea name="razon" class="form-control" id="message-text" required disabled><?php require_once '../../Controlador/obtener_clima_controlador.php'; ?></textarea>
                    </div>
                </div>
                <div class="col-1">
                    <button type="submit" class="btn btn-outline-light submit">Cancelar</button>
                </div>
            </div>
            </form>
            <table class="table table-hover noselect" id="myTable">
                <thead>
                    <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">ID Vuelo</th>
                        <th class="vuelo" scope="col"># Vuelo</th>
                        <th class="vuelo" scope="col">Origen</th>
                        <th class="vuelo" scope="col">Destino</th>
                        <th class="vuelo" scope="col">Vuelo</th>
                        <th class="vuelo" scope="col">Dia de Salida</th>
                        <th class="vuelo2" scope="col">Razon</th>
                        <th class="vuelo" scope="col">Tiempo de Retraso</th>
                        <th class="vuelo" scope="col">Estado</th>
                        <th class="vuelo" scope="col">Aerolinea</th>
                    </tr>
                </thead>
                <form action="#" method="get">
                    <tbody>
                        <?php
                        require_once('../../Controlador/buscar_vuelos_controlador.php');
                        ?>
                    </tbody>
                </form>
            </table>
        </div>

    </div>
    <div class="container salir">
        <a href="../../index.html"><button type="button" class="btn btn1 btn-outline-light">Menú</button></a>
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
    <script src="../../assets/js/buscar.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>