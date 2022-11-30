<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen del pedido</title>
    @vite(['resources/js/app.js'])
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" disabled >Own Lemon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center " id="navbarScroll" >
            <ul class="navbar-nav my-lg-2 gap-5 " style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                <a class="nav-link btn btn-warning" href="<?=route('sobre_nosotros') ?>">Sobre Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn btn-warning  active" href="<?=route('sobre_producto')?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Producto
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?=route('cotizar') ?>">Cotizar</a></li>
                    <li><a class="dropdown-item " href="<?=route('pedido') ?>">Pedido</a></li>
                        
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="<?=route('sobre_producto') ?>">sobre el producto</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link  btn btn-warning"  href="<?=route('contacto') ?>">Contacto</a>
                </li>
            </ul>
           
            </div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 btn btn-warning">Inicio</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-warning" >Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-warning">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
         <!-- Right Side Of Navbar -->
         <ul class="navbar-nav ms-auto gap-2 ">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-warning  " href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-warning " href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-warning" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
        </nav>
        @foreach($pedidos as $pedido)
<div class="row ">
    <div class="position-absolute g-4  col-sm-6 bg-info" style="position: relative; left: 25%;">
        <div class="card text-center">
            <div class="card-header text-center bg-info">
            </div>
            <div class="card-body " >
                <h5 class="card-title text-center" >Resumen de tu pedido</h5>
                <ul class="list-group ">
                <li class="list-group-item  ">
                    <p class="card-text fw-bold ">Tipo de limón seleccionado:</p>
                    <p class="card-text fst-italic">{{$pedido->tipo}}</p>
                </li>
                <li class="list-group-item ">
                    <p class="card-text fw-bold ">Modalidad:</p>
                    <p class="card-text fst-italic">{{$pedido->modalidad}} libras. *red de 5 y mayor a 5 cajas</p>
                </li>
                <li class="list-group-item ">
                    <p class="card-text fw-bold ">Cantidad:</p>
                    <p class="card-text fst-italic">{{$pedido->cantidad}}</p>
                </li>
                </ul><br>
                <div class="row ">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Dirección</h5>
                        <p class="card-text fw-bold "></p>
                        <p class="card-text fst-italic">{{$pedido->calle}} {{$pedido->num}} {{$pedido->col}} {{$pedido->cod_Postal}}, {{$pedido->estado}}, México.</p>
                       
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Datos del responsable</h5>
                        <p class="card-text fst-italic">{{$pedido->nombre}} {{$pedido->apellido}}</p>
                       
                    </div>
                    </div>
                </div>
                </div><br>
                <h5 class="card-title">total de: {{$total}}</h5>
                <h5 class="card-title">{{$monto}} extra de envío</h5>

                <form id="realizarPago" action="{{route('pago')}}" method="post">
                    @csrf
                    <input type="hidden" name="amount" id="amount" value="{{$total}}">
                    <a class="btn btn-warning btn-outline-secondary text-center" type="submit" href="<?=route('pago') ?>" >Continuar</a>
                               

                </form>
            </div>
            <div class="card-footer text-muted bg-info">
            <td>Pedido solicitado el {{$pedido->fecha_Pedido}}</td>
        </div>
    </div>
</div>
</div>
    @endforeach

    

    //@php
    //Actualiza el status para recibir el siguiente registro
    //DB::table('pedido')->where('status_pago', '=','0')->update(['status_pago' => '1']);  
    //@endphp

    </form>
    <script>
    $(document).ready(function () {
        $("#realizarPago").submit();
    });
    </script>
</body>
</html>