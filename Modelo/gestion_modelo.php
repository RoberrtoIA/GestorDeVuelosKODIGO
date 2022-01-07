<?php
class Gestion_Modelo {
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
}
?>