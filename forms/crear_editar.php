<?php
include '../templates/header.php';
require_once("../class/pelicula.php");
$obj_actividad = new pelicula();
$generos = $obj_actividad->ListarGeneros();


$ngeneros = count($generos);
?>
<div class="container ">
    <div class="row">
        <div class="col-12 col-md-6 d-flex align-items-center">
            <div class="cuerpo w-100 me-5 ms-5">
                <h1>Crear</h1>
                <form action="" class="needs-validation" method="POST">
                    <hr>
                    <div class="mb-3">
                        <label for="" class="form-label">Titulo</label>
                        <input type="email" name="titulo" class="form-control" placeholder="Avengers" required>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Genero</label>
                        <select class="form-select" aria-label="Default select example" required>
                            <?php if ($ngeneros > 0) : ?>
                            <?php foreach ($generos as $resultado) : ?>
                            <option value="<?php print $resultado['id'] ?>"><?php echo $resultado['genero'] ?></option>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Portada</label>
                        <input type="file" class="form-control" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Video</label>
                        <input type="file" class="form-control" placeholder="name@example.com" required>
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