<?php
include 'templates/header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-4 mb-3">
            <div class="card bg-primary shadow">
                <div class="card-body">

                    <h1 class="text-white">Invita <br> A Tus Amigos 🔥</h1>
                    <p class="card-text text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis
                        provident
                        exercitationem aspernatur id blanditiis, debitis expedita commodi voluptates iusto aperiam.</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="http://proyectof.test/"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-warning" type="button" id="button-addon2">📑</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- carrousel -->
        <div class="col-12 col-md-8 ">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <div class="card tmc "
                            style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/avengers.jpg') ;">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card tmc "
                            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('img/descarga.jpg') ;">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card tmc "
                            style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/haykiu.jpg') ;">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-12 mb-3">
                <h1>Peliculas 📽️</h1>
            </div>
            <div class="col-12 col-md-3 mb-3 ">
                <a href="carrousel.html">
                    <div class="card tm " style="background-image:url('img/1366_2000.jpg') ;">

                        <div class="overlay">
                            <div class="text">Avengers End Game</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3 mb-3 ">
                <a href="carrousel.html">
                    <div class="card tm " style="background-image:url('img/descarga.jpg') ;">

                        <div class="overlay">
                            <div class="text">Avengers End Game</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3 mb-3 ">
                <a href="carrousel.html">
                    <div class="card tm " style="background-image:url('img/avengers.jpg') ;">

                        <div class="overlay">
                            <div class="text">Avengers End Game</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3 mb-3 ">
                <a href="forms/crear_editar.php">
                    <div class="card tm " style="background-image:url('img/haykiu.jpg') ;">
                        <div class="overlay">
                            <div class="text">Avengers End Game </div>
                        </div>
                    </div>
                </a>
            </div>



        </div>
    </div>
    <?php include 'templates/footer.php' ?>