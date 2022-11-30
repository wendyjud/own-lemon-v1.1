@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago realizado</title>
    @vite(['resources/js/app.js'])
</head>
<body class="antialiased">

<div class="row ">
    <div class="position-absolute g-4  col-sm-6 bg-info" style="position: relative; left: 25%;">
        <div class="card text-center">
            <div class="card-header text-center bg-info"></div>
            <div class="card-body " >
            <div class="alert alert-success" role="alert">
              <h4 class="alert-heading">¡Bien hecho!</h4>
              <p>El pago ha sido completado con éxito, gracias por formar parte de Own Lemon, </p>
              <hr>
              <p class="mb-0">Aquí puedes consultar tu pedido: <a class="btn btn-info border-dark  text-center" type="button" href="<?=route('mis_pedidos') ?>" >Continuar</a></p>
            </div>
            </div>
        </div>
    </div>
</div>





</body>
</html>
@endsection