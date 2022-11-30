@extends('layouts.app')


@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Own Lemon</title>
        @vite(['resources/js/app.js'])
    </head>
    <body class="antialiased">
        <h4 class="display-5 text-center">Bienvenido </h4>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="width: 80%; hight: 300px; margin: auto;">
                    <div class="carousel-item active">
                        <img src="../resources/imagenes/lemon1.jpg" class="d-block w-100" alt="..." style="width: 300px; hight: 300px; margin: auto;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Limón italiano</h5>
                            <p>De pulpa jugosa, de acidez poco elevada y con numero de semillas escazo.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../resources/imagenes/lemon2.jpeg" class="d-block w-100" alt="..." >
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Limón Mexicano</h5>
                            <p>Por dentro es amarillo verdoso, jugoso y con semillas.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <img src="../resources/imagenes/lemon3.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Limón Persa</h5>
                        <p>Algún contenido placeholder representativo para la tercera diapositiva.</p>
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
            <br>
    </body>

    <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="#">Ownlemon.com</a>
  </div>
  <!-- Copyright -->
  <div class="text-center p-0" style="background-color: rgba(0, 0, 0, 0.05);">
  <span>Get connected with us: info@owlemon.com  -( +52 ) 55 2155 5555  -( +52 ) 55 2155 5558</span> 
  </div>
</footer>
<!-- Footer -->
</html>
@endsection