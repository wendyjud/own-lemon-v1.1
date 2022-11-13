
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Own Lemon</title>
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
                        <a class="nav-link active btn btn-warning " aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning " href="<?=route('admin/sobre_nosotros') ?>">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-warning " href="<?=route('sobre_producto')?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">Producto</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?=route('cotizar') ?>">Cotizar</a></li>
                            <li><a class="dropdown-item" href="">Pedidos</a></li>        
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
                                <a href="{{ url('/home') }}" class="btn btn-warning"  >Home</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-warning me-md-3">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-warning ">Register</a>
                                @endif
                            @endauth
                    @endif
            
        </nav>

    <h4 class="display-5 text-center">Pedidos </h4>
    <table class="table  table-light table table-hover">
    <thead class="thead-light">
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
                <th >Nota</th>
                <th >Aprobado</th>
                <th >Acciones</th>
                
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
                <td>{{$pedidos->nota}}</td>
                <td>{{$pedidos->aprobacion}}</td>
                <td>Editar : Borrar</td>
        </tr>
        @endforeach
    </tbody>
    
</table>
    
 
        
    </body>
</html>


    