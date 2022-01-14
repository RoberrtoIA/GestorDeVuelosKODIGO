<?php
class Gestion_Modelo
{
    private $db;
    private $registro;

    public function __construct()
    {
        require_once('conexion.php');
        $this->db = Conexion::Conexion();
        $this->registro = array();
    }

    public function get_destinos()
    {
        $consulta = $this->db->query('SELECT ciudad, vuelo FROM destinos');
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->registro[] = $filas;
        }
        return $this->registro;
    }

    public function get_areonaves()
    {
        $consulta = $this->db->query('SELECT * FROM areonave');
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->registro[] = $filas;
        }
        return $this->registro;
    }

    public function get_catalogo()
    {
        $consulta = $this->db->query('SELECT aerolineas.aerolinea, areonave.Modelo, areonave.Capacidad_pasajeros AS capacidad,
        areonave.Rango_combustible_lleno AS Millas, IFNULL(COUNT(vuelos.Areonave_idAreonave), 0) AS vuelo FROM aerolineas
        INNER JOIN areonave ON aerolineas.aerolinea = areonave.Aerolinea
        LEFT JOIN vuelos ON areonave.idAreonave = vuelos.Areonave_idAreonave
        GROUP BY aerolineas.aerolinea, areonave.Modelo, capacidad, Millas');
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->registro[] = $filas;
        }
        return $this->registro;
    }

    public function get_destino_elegido()
    {
        $array = array();
        foreach ($_SESSION["admin"] as $key => $value) {
            array_push($array, $key);
            foreach ($value as $keys => $values) {
                array_push($array, $keys);
            }
        }
        // for ($i = 0; $i < count($array); $i++) {
        //     echo $array[$i] . ' ';
        // }
        return $array;
    }

    public function get_vuelos()
    {
        $consulta = $this->db->query('SELECT idVuelos, NumeroVuelo, PaisCiudad_origen, PaisCiudad_destino, FechaHora_salida, FechaHora_llegada,
        destinos.vuelo AS Vuelo, Tiempo_retraso, Retraso, areonave.Modelo as Modelo, vuelos.estado, areonave.Aerolinea FROM vuelos
        INNER JOIN areonave ON vuelos.Areonave_idAreonave = areonave.idAreonave
        INNER JOIN destinos ON vuelos.PaisCiudad_destino = destinos.ciudad
        ORDER BY idVuelos');
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->registro[] = $filas;
        }
        return $this->registro;
    }

    public function get_vuelos_dia()
    {
        $consulta = $this->db->query('SELECT idVuelos, NumeroVuelo, PaisCiudad_origen, PaisCiudad_destino, vuelos.FechaHora_salida AS Salida,  destinos.vuelo, Tiempo_retraso, Retraso,
        areonave.Modelo as Modelo, vuelos.estado, areonave.Aerolinea FROM vuelos
        INNER JOIN areonave ON vuelos.Areonave_idAreonave = areonave.idAreonave
        INNER JOIN destinos ON vuelos.PaisCiudad_destino = destinos.ciudad
        ORDER BY idVuelos');
        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->registro[] = $filas;
        }
        return $this->registro;
    }

    public function agregar_vuelo($PaisCiudad_origen, $PaisCiudad_destino, $FechaHora_salida, $FechaHora_llegada, $Tiempo_retraso, $Areonave_idAreonave)
    {
        try {
            //$this->db->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
            $sql = "INSERT INTO vuelos (idVuelos, PaisCiudad_origen, PaisCiudad_destino, FechaHora_salida, FechaHora_llegada, Tiempo_retraso, Areonave_idAreonave)
            VALUES (DEFAULT, '$PaisCiudad_origen', '$PaisCiudad_destino', '$FechaHora_salida', '$FechaHora_llegada', '$Tiempo_retraso', $Areonave_idAreonave);";
            $this->db->exec($sql);
        } catch (PDOException $e) {
            echo  'PaisCiudad_origen: ' . $PaisCiudad_origen, ' PaisCiudad_destino: ' . $PaisCiudad_destino, ' FechaHora_salida: ' . $FechaHora_salida, 
            ' FechaHora_llegada: ' . $FechaHora_llegada, ' Tiempo_retraso: ' . $Tiempo_retraso . ' Areonave_idAreonave:' . $Areonave_idAreonave. "<br>".  $e->getMessage();
            die();
        }
    }

    public function modificar_vuelo($Tiempo_retraso, $retraso, $estado, $idVuelo)
    {
        try {
            $sql = "UPDATE vuelos 
            SET 
                Tiempo_retraso = '$Tiempo_retraso',
                Retraso = '$retraso',
                estado = '$estado'
            WHERE 
                idVuelos = $idVuelo";
            $this->db->exec($sql);
        } catch (PDOException $e) {
            echo  'Tiempo retraso: ' . $Tiempo_retraso, ' Retraso (Razon): ' . $retraso, ' Estado: ' . $estado . 'idVuelo: ' . $idVuelo.  "<br>" . $e->getMessage();;
            die();
        }
    }

    public function borrar_vuelo($id)
    {
        $this->db->query('DELETE FROM Registros WHERE id = ' . $id . ';');
        // $consulta = $this->db->query('DELETE FROM Registros WHERE id = ' . $id . ';');
    }
}
