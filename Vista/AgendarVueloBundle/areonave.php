<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/areonave.css">
    <link rel="shortcut icon" href="../../assets/img/ico/viaje.png">
    <link href="../../assets/css/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    <!--load all styles -->

    <title>Seleccionar Aerolinea</title>
</head>

<body class="fondo">
    <?php
    session_start();
    if (isset($_POST['destino'])) {
        $_SESSION["admin"] = $_POST['destino'];
    } else {
        header("Location: destinos.php");
        die();
    }
    ?>
    <div class="container menu">
        <center>
            <h1 id="titulo">Agendar Vuelo!</h1>
        </center>
        <div class="contenido">
            <table class="table table-hover noselect">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th class="ciudad" scope="col">Modelo</th>
                        <th class="vuelo" scope="col">Capacidad</th>
                        <th class="vuelo" scope="col">Rango</th>
                        <th class="vuelo" scope="col">Aerolinea</th>
                        <th class="vuelo" scope="col">Vuelo</th>
                        <th class="vuelo" scope="col">Categoria</th>
                    </tr>
                </thead>
                <form action="#" method="get">
                    <tbody>
                        <?php
                        require_once('../../Controlador/areonaves_controlador.php');
                        ?>
                    </tbody>
                </form>
            </table>
            <form action="../../Controlador/agregar_areonaves_controlador.php" method="post">
            <div class="row">
                <div class="col-3 offset-1">
                    <select class="form-select" aria-label="Default select example" name="avion">
                        <?php
                        for ($i=0; $i < count($select); $i++) { 
                            if ($value == 0) {
                                echo '<option selected value="' . $selectID[$i] . '">' . $select[$i] . ' (' . $categoria[$i] . ')</option>';
                            } else {
                                echo '<option value="' . $selectID[$i] . '">' . $select[$i] . ' (' . $categoria[$i] . ')</option>';
                            }
                        }
                        // foreach (array_combine($select, $categoria) as $code => $name) {
                        //     if ($value == 0) {
                        //         echo '<option selected value="' . $code . '">' . $code . ' (' . $name . ')</option>';
                        //     } else {
                        //         echo '<option value="' . $code . '">' . $code . ' (' . $name . ')</option>';
                        //     }
                        // }
                        ?>
                    </select>
                </div>
                <div class="col-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Fecha</span>
                        <input type="date" class="form-control" name="fecha" aria-label="Sizing example input" id="datePickerId" aria-describedby="inputGroup-sizing-default" required>
                    </div>
                </div>
                <div class="col-2">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Hora</span>
                        <input type="number" class="form-control" name="hora" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" min="0" max="23" value="0">
                    </div>
                </div>
                <div class="col-1">
                <button type="submit" class="btn btn-outline-light">Agendar</button>
                </div>
            </div>
            </form>
        </div>

    </div>
    <div class="container salir">
        <a href="../../index.html"><button type="button" class="btn btn1 btn-outline-light">Menú</button></a>
    </div>
    <script src="../../assets/js/areonave.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>