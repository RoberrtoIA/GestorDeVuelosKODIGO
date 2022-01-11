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
        $consulta = $this->db->query('SELECT idVuelos, NumeroVuelo, PaisCiudad_origen, PaisCiudad_destino, FechaHora_salida, FechaHora_llegada, Tiempo_retraso, Retraso, areonave.Modelo as Modelo FROM vuelos
        INNER JOIN areonave ON vuelos.Areonave_idAreonave = areonave.idAreonave');
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

    public function modificar_vuelo($nombre, $apellido, $ciudad, $fecha, $email, $id)
    {
        try {
            $sql = "UPDATE Registros 
            SET 
                Nombre = '$nombre',
                Apellido = '$apellido',
                Ciudad = '$ciudad',
                FechaInscripcion = '$fecha',
                Email = '$email'
            WHERE
                id = $id;";
            $this->db->exec($sql);
        } catch (PDOException $e) {
            echo  'Nombre: ' . $nombre, ' Apellido: ' . $apellido, ' Ciudad: ' . $ciudad, ' Fecha: ' . $fecha, ' Email: ' . $email . "<br>" . $e->getMessage();;
            die();
        }
    }

    public function borrar_vuelo($id)
    {
        $consulta = $this->db->query('DELETE FROM Registros WHERE id = ' . $id . ';');
    }
}
