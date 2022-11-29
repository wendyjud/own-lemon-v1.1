

<!DOCTYPE html>





<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cotizar</title>
        @vite(['resources/js/app.js'])
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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

     
        <form class="" name="fr"id="form" action="{{url('/cotizar')}}" method="POST">
        @csrf
        <div class="d-flex justify-content-center bg-primary ">
            <div class="bg-primary col-sm-4" >
                    <h3 class="text-center">Llena los siguientes datos del formulario:</h3>
                    <div class="row mb-5">
                        <div class="col-sm-12">
                            <div class="input-group mb-3 text-center">
                            <span class="input-group-text " id="basic-addon1">Modalidad de Venta</span>
                            <select class="form-select"  name="modalidad" id="modalidad">
                            <option class="p-2 " disabled selected>Elige una modalidad</option>
                            <option value="5" >Red de 5 libras</option>
                            <option value="10">Caja con 10 libras</option>
                            <option value="40">Caja con 40 libras</option>
                            </select> 
                                <div class="invalid-feedback">
                                    Selecciona un estado válido.
                                </div>
                            </div>  
                        </div>
                        <div class="col-sm-12">
                            <div class="input-group mb-3 text-center">
                            <span class="input-group-text " id="basic-addon1">Tipo de limón</span>
                            <select name="tipo" id="tipo" class="form-select" aria-label="Default select example" >
                            <option class="p-2 " disabled selected>Selecciona el tipo de limón</option>
                                    <option value="Italiano">Italiano</option>
                                    <option value="Mexicano">Mexicano</option>
                                    <option value="Persa">Persa</option>
                            </select> 
                            </div>  
                        </div>
                        
                        <div class="col-sm-12">
                            <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Cantidad</span>
                            <select name="cantidad" id="cantidad"  class="form-select" aria-label="Default select example" >
                            <option disabled selected>Elije una cantidad </option>
            
                           <?php
                            for ($i=1; $i <101 ; $i++) { 
                            echo "?><option value=$i>$i</option><?php";
                            }
                            ?>
                            </select> 
                            </div>  


                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Estado</span>
                        <input class="form-control" list="datalistOptions" id="estado" placeholder="Estado..." name="estado" >
                        <datalist id="datalistOptions"  >
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
                    </div>
                    <!--Esta parte del código actualiza el span al precionar el botón cotizar con el calculo correcto-->
                    <button type="submit" class="btn btn-secondary" > Cotizar </button>
                    <span>{{$msg}}</span>


                    <!-- <input type="submit" value="Cotizar" onclick="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">-->
                    <!-- <input type="submit" value="Cotizar" >-->
                    <!-- <span>{{$msg}}</span>-->
                   
                   <input type="text" class="form-control" name="msg" value="{{ $msg }}" />
                     <!-- Button trigger modal -->
                   <!--<button type="submit" class="btn btn-secondary" id="btnCotizar" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Cotizar
                    </button>-->
  
                     <!-- Modal -->

                    <!--<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Tu cotización está lista!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        {{$msg}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-warning">Descargar cotización</button>
                        </div>
                        </div>
                    </div>
                    </div>-->


        </form>
                        
                            
       
        <div id="result"></div>

    </body>
    <script type="text/javascript">  
       /* var form=document.getElementById('form')
        form.addEventListener('submit', function(event){
            event.preventDefault()//revent the form from other submits

            var modalidad=document.getElementById('modalidad').value
            console.log(modalidad)
            var tipo=document.getElementById('tipo').value
            console.log(tipo)
            var cantidad=document.getElementById('cantidad').value
            console.log(cantidad)
            var estado=document.getElementById('estado').value
            console.log(estado)
            var msg=$this.data('')
        
            console.log(msj)


            document.getElementById('result').innerHTML = `
            <p>Modalidad: ${modalidad}</p>
            <p>El Tipo: ${tipo}</p>
          

    
           
           
           `

        }) 

    </script>
    <!--<script  type="text/javascript">
           /* var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
            var alertTrigger = document.getElementById('liveAlertBtn')

            function alert(message, type) {
            var wrapper = document.createElement('div')
            wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

            alertPlaceholder.append(wrapper)
            }

            if (alertTrigger) {
            alertTrigger.addEventListener('click', function () {
                alert('{{$msg}}', 'success')
            })
            }*/
            $("#btnCotizar").click(
                function(){
                    //$("#staticBackdrop").show();
                    '<h1>hola</h1>'
                }
            )

        $("#fr").submit(function(e){
        e.preventDefault();

        let modalidad = $("#modalidad").val();
        let tipo = $("#tipo").val();
        let cantidad = $("#cantidad").val();
        let estado = $("#estado").val();
        //let _token = $("input[name=_token]").val();

      
            //para funcionalidad submit del boton
  

            $(function() {
                $('#btnCotizar').on('click', function(e) {
                    $('#fr').submit();
                });
            });

            //solo se activa el boton si los campos son llenado
            function activarBoton() {
                if(verificar()) {
                    btnCotizar.disabled=false
                }
                else {
                    btnCotizar.disabled=true
                }
            }

            function verificar() {
                if( modalidad.value==="" )
                    return false;
                if( tipo.value==="" )
                    return false;
                if( cantidad.value==="" )
                    return false;
                if( estado.value==="" )
                    return false;
                return true;
            }

            var btnCotizar = document.getElementById("btnCotizar");
            btnCotizar.disabled = true;
            var modalidad = document.fr.modalidad;
            var tipo = document.fr.tipo;
            var cantidad = document.fr.cantidad;
            var estado = document.fr.estado;
            modalidad.onkeyup = tipo.onkeyup = cantidad.onkeyup =estado.onkeyup =activarBoton;

	 	</script> -->
</html>