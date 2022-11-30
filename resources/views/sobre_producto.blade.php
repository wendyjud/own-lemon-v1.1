@extends('layouts.app')


@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Producto</title>
        @vite(['resources/js/app.js'])
    </head>
    <body class="antialiased">
            
<h1 class="text-center">Tipos de Limones</h1>
    <div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
  <div class="carousel-inner " style="width: 100%; hight: 500px; margin: auto;">
    <div class="carousel-item active">
      <img src="../resources/imagenes/italiano.jpg" class=" mx-auto d-block" alt="..." style="width: 550px; margin-top:2%;">
      <h5 class="text-center">Limón Italiano</h5>
    </div>
    <div class="carousel-item">
      <img src="../resources/imagenes/mexicano.jpeg" class="mx-auto d-block" alt="..." style="width: 400px; margin-top:2%;">
      <h5 class="text-center">Limón Mexicano</h5>
    </div>
    <div class="carousel-item">
      <img src="../resources/imagenes/persa.png" class="mx-auto d-block" alt="..." style="width: 400px; margin-top:2%;">
      <h5 class="text-center">Limón Persa</h5>
    </div>
  </div>
  <button class="carousel-control-prev bg-dark" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev" >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next bg-dark" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

<div class="row ">
    <div class="position-absolute g-2  col-sm-10 bg-info" style="position: relative; left: 8%;">
    <table class="table text-center bg-white">
        <thead>
            <tr>
            <th scope="col">Tipo</th>
            <th scope="col">Características</th>
            <th scope="col">Precio Actual</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">Italiano</th>
            <td>
                <ul class="list-group">
                    <li class="list-group-item">A diferencia del mexicano es de mayor tamaño y falta de semillas.</li>
                    <li class="list-group-item">De color verde oscuro durante su desarrollo, se torna gradualmente en verde claro o amarillo.</li>
                    <li class="list-group-item">Su sabor es menos ácido.</li>
                </ul>
            </td>
            <td>26.70</td>
            </tr>
            <tr>
            <th scope="row">Mexicano</th>
            <td>
                <ul class="list-group">
                    <li class="list-group-item">De forma redonda, cascara delgada y suave.</li>
                    <li class="list-group-item">Es verde cuando esta en proceso de maduracion y al madurar se torna ligeramente amarillo.</li>
                    <li class="list-group-item">Por dentro es amarillo verdoso, jugoso y con semillas.</li>
                </ul>
            </td>
            <td>29.90</td>
            </tr>
            <tr>
            <th scope="row">Persa</th>
            <td>
                <ul class="list-group">
                    <li class="list-group-item">De forma ovalada con cuello en la base.</li>
                    <li class="list-group-item">El color de los frutos es de color amarillo intenso en la madurez.</li>
                    <li class="list-group-item">De pulpa jugosa, de acidez poco elevada y con numero de semillas escazo.</li>
                </ul>
            </td>
            <td>26.70</td>
            </tr>
        </tbody>
        </table>
    </div>
</div>

    </body>

</html>
@endsection