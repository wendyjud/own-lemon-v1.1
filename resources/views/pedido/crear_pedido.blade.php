<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Pedido</title>
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
        <ul class="nav nav-tabs nav-pedidos">
          <li class="nav-item">
            <a class="nav-link active text-bg-info" aria-current="page" href="<?=route('pedido') ?>">Crear Pedido</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark text-bg-warning" href="<?=route('mis_pedidos') ?>">Mis Pedidos</a>
          </li>
        </ul>
    <h1>Creando Pedido...</h1>

    <div class=" bg-warning" style="width:50%;">

    </div>
    <form action="{{ route('pago') }}"  method="POST"  id="form" class="flex-row p-5 bg-primary justify-content-center " >
    @csrf
    <div class="col-sm-8">
                            <div class="input-group mb-3 text-center">
                            <span class="input-group-text " id="basic-addon1">Tipo de limón</span>
                            <select name="tipo" id="tipo" class="form-select" aria-label="Default select example" >
                            <option class="p-2 " selected disabled>Selecciona el tipo de limón</option>
                                    <option value="Italiano">Italiano</option>
                                    <option value="Mexicano">Mexicano</option>
                                    <option value="Persa">Persa</option>
                            </select> 
                            </div>  
    </div>
    <div class="col-md-8">
        <label for="cantidad">Ingresa la cantidad que deseas tomando en cuenta las medidas de exportación: </label>
        <input type="number" name="cantidad"  id="cantidad" min="1" max="150" required> 
        <div class="invalid-feedback">
        Por favor ingresa una cantidad para tu pedido
        </div>
    </div>
    <fieldset class="row mb-3" id="modalidad">
      <legend class="col-form-label col-sm-2 pt-0">Selecciona la modalidad de tus medidas </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input text-bg-secondary" type="radio" name="modalidad" id="gridRadios1"  value="red con 5 libras" checked>
          <label class="form-check-label" for="gridRadios1">
            Red de 5 libras
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input text-bg-secondary" type="radio" name="modalidad" id="gridRadios2" value="Caja con 10 libras">
          <label class="form-check-label" for="gridRadios2">
           Caja con 10 libras
          </label>
        </div>
        <div class="form-check ">
          <input class="form-check-input text-bg-secondary" type="radio" name="modalidad"id="gridRadios3" value="Caja con 40 libras " >
          <label class="form-check-label" for="gridRadios3">
          Caja con 40 libras 
          </label>
        </div>
        <div class="invalid-feedback">Selecciona una opción</div>
      </div>
    </fieldset>
    <div class="row g-3">
    <label for="nombre" class="form-label">Datos del respnsable:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control text-center" name="nombre" placeholder="Nombre del representante" id="" required>
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control text-center" name="apellido" placeholder="Apellido del representante" id="" required>
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control text-center" name="tel" placeholder="Teléfono de Contacto" id="" required>
      </div>
    </div>
    
  <div class="row g-3 ">
  <label for="direccion" class="form-label " >Dirección de Envío:</label>
  <div class="col-sm-3">
    <input type="text" class="form-control text-center" name="calle" placeholder="Calle" aria-label="Calle" required>
  </div>
  <div class="col-sm-1">
    <input type="text" class="form-control text-center" name="num" placeholder="Número" aria-label="Número" required>
  </div>
  <div class="col-sm-2">
    <input type="text" class="form-control text-center" name="col" placeholder="Colonia" aria-label="Colonia" required>
  </div>
  <div class="col-sm-1">
    <input type="text" class="form-control text-center" name="cod_Postal" placeholder="C. P" aria-label="Código Postal" required>
  </div>
  <div class="col-sm-2 ">
    <select id="estado" class="form-select text-center " id="validationSelect" name="estado">
      <option class="is-invalid" selected disabled>Estado...</option>
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
    </select>

  </div>
</div>
  <div class="col-sm-2">
    <label for="rfc" class="form-label">RFC de la empresa</label>
    <input type="text" class="form-control" id="" placeholder="VECJAAMMDDXXX" name="rfc_Empresa" pattern="^[A-Z&Ñ]{3,4}[0-9]{2}(0[1-9]|1[012])(0[1-9]|[12][0-9]|3[01])[A-Z0-9]{2}[0-9A]" title="No cumple con las reglas, revisa tu sintaxis  " required >
 
  </div>
  <div class="col-10">
  <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        *Nota
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Este campo solo acepta mayúsculas* recuerda que...</strong> los 3-4 primeros dígitos de tu RFC corresponden a las iniciales de tu empresa/nombre, seguido de los 2 dígitos del año en que fue creada, 2 digitos para el mes (enero=01), 2 digitos para el dia (por ejemplo, 01) y los últimos 3 dígitos, la homoclave.
        <a href="https://www.sat.gob.mx/aplicacion/29073/verifica-si-estas-registrado-en-el-rfc" class="link-secondary">Verifica si estas registrado en el RFC.</a>
      </div>
    </div>
  </div>
  
</div>
  </div>

  <div class="col-10">
  
  <label for="exampleFormControlTextarea1" class="form-label">Notas: </label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="nota"></textarea>
  </div>


  <div class="col-10">
    <div class="form-check needs-validation">
      <input class="form-check-input " type="checkbox" id="validationFormCheck1"  value=1 required>
      <label class="form-check-label" for="validationFormCheck1">Términos y condiciones</label>
      <div class="invalid-feedback">Es necesario aceptar los términos y condiciones</div>
    </div>
  </div>
  
  
                <div class="col-12">
                  
                  <!--<button type="submit" class="btn btn-info">Realizar Pedido</button>-->
                  <!--<a class="btn btn-info" type="submit" href="#" >Realizar Pedido</a>-->
                  <button type="button" class="btn btn-secondary" id="btnCotizar"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Realizar Pedido
                  </button>

                </div>
      
                <!-- Modal -->

                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Completa tu pedido!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="modal-body">
                        Resumen de tu pedido
                        
                        Para continuar con tu pedido es necesario realizar el pago
                        <div id="result">

                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
                            
                            <!--<<form action="{{route('pedido')}}" method="post">--->
                              @csrf
                               <input type="hidden" name="amount" id="" value="200">
                              <button type="submit" class="btn btn-warning" >Continuar</button>
                            <!--</form>-->

                        </div>
                        </div>
                    </div>
                </div>
    </form>
    


                     

                    
  </body>
  <script type="text/javascript">  
            /*var form=document.getElementById('form')
            form.addEventListener('button', function(event){
            event.preventDefault()//revent the form from other submits

            var modalidad=document.getElementById('modalidad').value
            //console.log(modalidad)
            var tipo=document.getElementById('tipo').value
            //console.log(tipo)
            var cantidad=document.getElementById('cantidad').value
            //console.log(cantidad)
            var estado=document.getElementById('estado').value
            console.log(estado)
            //var msg=$this.data('')    
            //console.log(msj)
            document.getElementById('result').innerHTML = `
            <p>Estado: ${estado}</p>
            <p>El Tipo: ${tipo}</p>
           
           `
        }) */

      

    </script>
</html>








