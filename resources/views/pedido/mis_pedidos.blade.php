
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mis pedidos</title>
        @vite(['resources/js/app.js'])
    </head>
    <body >
    <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" disabled >Own Lemon</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse justify-content-center " id="navbarScroll" >
                <ul class="navbar-nav my-lg-2 gap-5 " style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning " href="<?=route('admin/sobre_nosotros') ?>">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-warning active " href="<?=route('sobre_producto')?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">Producto</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?=route('cotizar') ?>">Cotizar</a></li>
                            <li><a class="dropdown-item" href="<?=route('pedido') ?>">Pedidos</a></li>        
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?=route('sobre_producto') ?>">sobre el producto</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  btn btn-warning"  href="<?=route('contacto') ?>">Contacto</a>
                    </li>
                </ul>
            </div>  
            </div> </div>
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
        </nav>

        <div class="container">
            <h4>Gestion de Pedidos</h4>
            <div class="row">
                <div class="col-xl-12">
                    <form action="{{route('resultados')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-4 my-1">
                                <input type="text" name="text" class="form-control"  id="text">
                            </div>
                            <div class="col-sm-2 my-3">
                                <input type="submit" class="btn btn-secondary" value="Buscar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs nav-pedidos">
          <li class="nav-item">
            <a class="nav-link active text-bg-warning" aria-current="page" href="<?=route('pedido') ?>">Crear Pedido</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark text-bg-info" href="<?=route('mis_pedidos') ?>">Mis Pedidos</a>
          </li>
        </ul>

    
    <h4 class="display-5 text-center">Mis Pedidos </h4>
    //@if (session('status'))
        //se puede poner alerta o lo que sea 
        <!--<h4 class="display-5 text-center bg-success">{{session('status')}} </h4>-->
    //@endif
    <table class="table  table-primary table table-hover">
    <thead class="thead-info">
        <tr class="">
                <th >#Num Pedido</th>
                <th >Cantidad</th>
                <th >Modalidad</th>
                <th >Nombre</th>
                <th >Apellido</th>
                <th >Tel</th>
                <th >Calle</th>
                <th >No.</th>
                <th >Colonia</th>
                <th >Estado</th>
                <th >C. P</th>
                <th >RFC</th>
                <th >Fecha</th>
              
           
        </tr>
    </thead>
    <tbody>
        @foreach($pedido as $pedidos)
        <tr class="">
                <td>{{$pedidos->id}}</td>
                <td>{{$pedidos->cantidad}}</td>
                <td>{{$pedidos->modalidad}}</td>
                <td>{{$pedidos->nombre}}</td>
                <td>{{$pedidos->apellido}}</td>
                <td>{{$pedidos->tel}}</td>
                <td>{{$pedidos->calle}}</td>
                <td>{{$pedidos->num}}</td>
                <td>{{$pedidos->col}}</td>
                <td>{{$pedidos->estado}}</td>
                <td>{{$pedidos->cod_Postal}}</td>
                <td>{{$pedidos->rfc_Empresa}}</td>
                <td>{{$pedidos->fecha_Pedido}}</td>
                
        </tr>
        @endforeach
    </tbody>
    
</table>
    
 
        
    </body>
</html>