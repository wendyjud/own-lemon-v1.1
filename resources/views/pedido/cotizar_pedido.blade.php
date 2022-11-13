<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cotizar</title>
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
                                <a href="{{ url('/home') }}" class="btn btn-warning me-md-3"  >Inicio</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-warning me-md-3">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-warning ">Register</a>
                                @endif
                            @endauth
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

        <h1>Cotiza tus pedidos!</h1>
        <div class="d-flex justify-content-center bg-primary ">
            <div class="bg-primary col-sm-4" >
                    <h3 class="text-center">Llena los siguientes datos del formulario:</h3>
                    <div class="row mb-5">
                        <div class="col-sm-12">
                            <div class="input-group mb-3 text-center">
                            <span class="input-group-text " id="basic-addon1">Modalidad de Venta</span>
                            <select class="form-select" aria-label="Default select example">
                            <option class="p-2 " selected>Elige una modalidad</option>
                            <option value="Red de 5 libras">Red de 5 libras</option>
                            <option value="Caja con 10 libras">Caja con 10 libras</option>
                            <option value="3">Caja con 40 libras</option>
                            </select> 
                            </div>  
                        </div>
                        
                        <div class="col-sm-12">
                            <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Cantidad</span>
                            <select class="form-select" aria-label="Default select example">
                            <option selected>Elije una cantidad </option>
                            <?php
                            for ($i=1; $i <101 ; $i++) { 
                            echo "?><option value=$i>$i</option><?php";
                            }
                            ?>
                        </select> 
                            </div>  

                        
                        <div class="col-sm-12">
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Estado</span>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Código Postal">
                        </div>
                        </div>

                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Estado</span>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Estado...">
                        <datalist id="datalistOptions">
                        <option value="Aguascalientes ">Aguascalientes</option>
                        <option value="Baja California ">Baja California</option>
                        <option value="Baja California Sur ">Baja California Sur</option>
                        <option value="Campeche ">Campeche</option>
                        <option value="Chiapas ">Chiapas</option>
                        <option value="Chihuahua ">Chihuahua</option>
                        <option value="Coahuila ">Coahuila</option>
                        <option value="Colima ">Colima</option>
                        <option value="Distrito Federal ">Distrito Federal</option>
                        <option value="Durango ">Durango</option>
                        <option value="Guanajuato ">Guanajuato</option>
                        <option value="Guerrero ">Guerrero</option>
                        <option value="Hidalgo ">Hidalgo</option>
                        <option value="Jalisco ">Jalisco</option>
                        <option value="México ">México</option>
                        <option value="Michoacán ">Michoacán</option>
                        <option value="Morelos ">Morelos</option>
                        <option value="Nayarit ">Nayarit</option>
                        <option value="Nuevo León ">Nuevo León</option>
                        <option value="Oaxaca ">Oaxaca</option>
                        <option value="Puebla ">Puebla</option>
                        <option value="Querétaro ">Querétaro</option>
                        <option value="Quintana Roo ">Quintana Roo</option>
                        <option value="San Luis Potosí ">San Luis Potosí</option>
                        <option value="Sinaloa ">Sinaloa</option>
                        <option value="Sonora ">Sonora</option>
                        <option value="Tabasco ">Tabasco</option>
                        <option value="Tamaulipas ">Tamaulipas</option>
                        <option value="Tlaxcala ">Tlaxcala</option>
                        <option value="Veracruz ">Veracruz</option>
                        <option value="Yucatán ">Yucatán</option>
                        <option value="Zacatecas ">Zacatecas</option>
                        </datalist>
                        </div>
                        <button type="button" class="btn btn-info">Cotizar</button>
                </div>
                
            </div>

        </div>

        <div class="bg-warning mb-3 row" >
            
        </div>

    </body>
</html>