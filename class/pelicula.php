<?php
require_once('modelo.php');


class pelicula extends modeloCredencialesBD
{
    protected $titulo;
    protected $descripcion;
    protected $portada;
    protected $video;
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }

    public function ListarGeneros()
    {

        $instruccion = "call streamweb.listar_generos()";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if (!$resultado) {
            echo "Fallo al consultar las actividades";
        } else {
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }

    public function InsertarPelicula($titulo, $descripcion, $portada, $video, $id)
    {
        $instruccion = "call streamweb.insertar_peli('" . $titulo . "','" . $descripcion .
            "','" . $portada . "','" . $video . "','" . $id . "')";

        $consulta = $this->_db->query($instruccion);
    }
}