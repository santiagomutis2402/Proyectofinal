<?php
require_once('modelo.php');


class pelicula extends modeloCredencialesBD
{
    protected $id;
    protected $titulo;
    protected $descripcion;
    protected $portada;
    protected $video;
    protected $id_genero;

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
            echo "Fallo al consultar los generos";
        } else {
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }


    public function crearcarpeta()
    {
        $carpetaImagenes = "../img/peliculas/";
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }
        return $carpetaImagenes;
    }

    public function moverarchivo($imagen, $carpetaImagenes)
    {

        $imagePath = $carpetaImagenes . md5(uniqid(rand(), true)) . '/' . $imagen['name'];
        mkdir(dirname($imagePath));

        // var_dump($imagen);

        move_uploaded_file($imagen['tmp_name'], $imagePath);

        $rutaImagen = str_replace($carpetaImagenes, '', $imagePath);

        return $rutaImagen;
    }

    public function InsertarPelicula($titulo, $descripcion, $portada, $video, $id_genero)
    {

        $instruccion = "call insertar_peli('" . $titulo . "','" . $descripcion .
            "','" . $portada . "','" . $video . "',  $id_genero )";
        $consulta = $this->_db->query($instruccion);

        if (!$consulta) {
            echo "Fallo al insertar la pelicula";
        } else {
            return $consulta;
            $consulta->close();
            $this->_db->close();
        }

        // header('location: ../index.php');
    }

    public function actualizarPelicula($id, $titulo, $descripcion, $portada, $video, $id_genero)
    {
        $instruccion = " call streamweb.update_pelicula('" . $titulo . "','" . $descripcion .
            "','" . $portada . "','" . $video . "','" . $id_genero . "','" . $id . "' )";

        $consulta = $this->_db->query($instruccion);
    }

    public function listar_peliculas()
    {

        $instruccion = "call streamweb.listar_peliculas()";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if (!$resultado) {
            echo "Fallo al consultar las peliculas";
        } else {
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }


    public function listar_peliculas_ID($ID)
    {
        $instruccion = "CALL streamweb.listar_pelicula_id($ID)";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_assoc();

        if (!$resultado) {
            echo "Fallo al consultar las actividades";
        } else {
            return $resultado;

            $this->_db->close();
        }
    }
}