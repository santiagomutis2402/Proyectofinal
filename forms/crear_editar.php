<?php
include '../templates/header.php';
require_once("../class/pelicula.php");
// $id = 2;
$obj_actividad = new pelicula();
$obj_pelicula = new pelicula();
$generos = $obj_actividad->ListarGeneros();
$peliculas = $obj_pelicula->listar_peliculas_ID(1);

$titulo = $peliculas['titulo'] ?? null;
$descripcion = $peliculas['descripcion'] ?? null;
$genero = $peliculas['generoid'] ?? null;
$portada = $peliculas['portada'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $descripcion = $_POST['descripcion'];
    $portada = $_FILES['imagen'];
    $video = $_FILES['video'];

    if ($id == null) {
        $carpetaimagenes = $obj_pelicula->crearcarpeta($titulo);
        $rutaImagen = $obj_pelicula->moverarchivo($portada, $carpetaimagenes);
        $rutaPortada = $obj_pelicula->moverarchivo($video, $carpetaimagenes);
        $response =  $obj_pelicula->InsertarPelicula($titulo, $descripcion, $rutaImagen, $rutaPortada, $genero);
    } else {
    }
}
$ngeneros = count($generos);
?>
<div class="container ">
    <div class="row">
        <div class="col-12 col-md-6 d-flex align-items-center">
            <div class="cuerpo w-100 me-5 ms-5">
                <h1>Crear</h1>
                <form class="needs-validation" method="POST" enctype="multipart/form-data">
                    <hr>
                    <div class="mb-3">
                        <label for="" class="form-label">Titulo</label>
                        <input type="text" name="titulo" value="<?php echo $titulo ?>" class="form-control"
                            placeholder="Avengers" required>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Genero</label>
                        <select class="form-select" name="genero" aria-label="Default select example" required>
                            <?php if ($ngeneros > 0) : ?>
                            <?php foreach ($generos as $resultado) : ?>
                            <option <?php echo $genero === $resultado['id'] ? 'selected' : '' ?>
                                value="<?php print $resultado['id'] ?>"><?php echo $resultado['genero'] ?></option>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                        <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"
                            required><?php echo $descripcion ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Portada</label>
                        <input type="file" accept="img" class="form-control" name="imagen" id="imagen" required>
                    </div>
                    <div class="mb-3">
                        <label for="video" class="form-label">Video</label>
                        <input type="file" class="form-control" name="video" id="video" placeholder="name@example.com">
                    </div>

                    <input type="submit" class="btn btn-primary" value="Subir">
                </form>
            </div>
        </div>
        <div class="col-12 col-md-6 ">
            <div class="fondoform"></div>
        </div>
    </div>
</div>
<?php
include '../templates/footer.php';