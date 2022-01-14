<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/actualizar.css">
    <link rel="shortcut icon" href="../../assets/img/ico/viaje.png">
    <link href="../../assets/css/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    <!--load all styles -->

    <title>Actualizar Vuelo</title>
</head>

<body class="fondo">
    <div class="container menu">
        <center>
            <h1 id="titulo">Actualizar Vuelo</h1>
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
                        <th class="vuelo" scope="col">Tiempo de Retraso</th>
                        <th class="vuelo" scope="col">Razon</th>
                        <th class="vuelo" scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once('../../Controlador/actualizar_vuelos_controlador.php');
                    ?>
                </tbody>
                <!-- <form action="#" method="get">
                
            </form> -->
                <!-- <div class="row">
                <div class="col-5 offset-2">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Razon</span>
                        <input type="text" class="form-control" name="razon" required>
                    </div>
                </div>
                <div class="col-2">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Retraso</span>
                            <input type="number" value="0" class="form-control" name="razon" min="1" step="1" required>
                        </div>
                    </div>
            </div> -->
            </table>
        </div>

    </div>

    <!-- -------------------------------------------Modal Borrar -->

    <form action="../../Controlador/actualizar_estado_vuelo_controlador.php" method="post">
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#" method="get">
                        <div class="modal-body">
                            <label for="select" class="col-form-label">Accion: <strong>Cancelar</strong></label>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Razon:</label>
                                <textarea name="razon" class="form-control" id="message-text" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" id="obtenerID2" name="enviarFinal" value="" class="btn btn-outline-warning">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>

    <!-- -------------------------------------------Modal Actualizar -->

    <form action="../../Controlador/actualizar_estado_vuelo_controlador.php" method="post">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="get">
                    <div class="modal-body">
                        <label for="select" class="col-form-label">Accion:</label>
                        <select class="form-select" id="select" name="estado" aria-label="Default select example">
                            <option value="Cancelar">Cancelar</option>
                            <option value="Aterrizado">Aterrizado</option>
                            <option value="Retrasado" id="retrasar">Retrasado</option>
                        </select>
                        <div class="mb-3">
                            <label for="hour-form" class="col-form-label">Tiempo de Retraso:</label>
                            <input type="number" value="0" class="form-control" id="hour-form" name="hora" min="0" max="23" step="1">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Razon:</label>
                            <textarea name="razon" class="form-control" id="message-text"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" id="obtenerID" name="enviarFinal" value="" class="btn btn-outline-warning">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </form>
    <div class="container salir">
        <a href="../../index.html"><button type="button" class="btn btn1 btn-outline-light">Menú</button></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../../assets/js/cancelar.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>

</html>