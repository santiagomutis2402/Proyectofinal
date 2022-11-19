<?php
require_once("../class/pelicula.php");
$obj_actividad = new pelicula();


$consulta = $obj_actividad->registro("hola", "1234", "1234", 1);
var_dump($consulta);