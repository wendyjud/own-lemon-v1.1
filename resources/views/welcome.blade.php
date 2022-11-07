<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Own Lemon</title>
        @vite(['resources/js/app.js'])
    </head>
    <body class="antialiased">
            
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" disabled >Own Lemon</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse justify-content-center " id="navbarScroll" >
                <ul class="navbar-nav my-lg-2 gap-5 " style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active btn btn-warning " aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning " href="<?=route('sobre_nosotros') ?>">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-warning " href="<?=route('sobre_producto')?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">Producto</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?=route('cotizar') ?>">Cotizar</a></li>
                            <li><a class="dropdown-item" href="<?=route('pedido') ?>">Pedido</a></li>        
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?=route('sobre_producto') ?>">sobre el producto</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  btn btn-warning"  href="<?=route('contacto') ?>">Contacto</a>
                    </li>
                </ul>
            </div>  
            </div>
            <div class="d-flex gap-2 col-6 justify-content-md-end ">
                    @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" class="btn btn-warning"  >Home</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-warning me-md-3">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-warning ">Register</a>
                                @endif
                            @endauth
                    @endif
            </div>
        </nav>


        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top:100px;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            </div>
            <div class="carousel-inner" style="width: 300px; hight: 300px; margin: auto; ">
                <div class="carousel-item active">
                    <img src="../resources/imagenes/Limon_portada.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-success">Etiqueta de la primera diapositiva</h5>
                                <p class="text-success" style="margin: auto;">Algún contenido placeholder representativo para la primera diapositiva.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
