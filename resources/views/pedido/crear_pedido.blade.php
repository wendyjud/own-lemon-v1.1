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
                <a class="nav-link btn btn-warning " aria-current="page" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                <a class="nav-link btn btn-warning  active" href="<?=route('sobre_nosotros') ?>">Sobre Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn btn-warning " href="<?=route('sobre_producto')?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Producto
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?=route('cotizar') ?>">Cotizar</a></li>
                    <li><a class="dropdown-item" href="<?=route('pedido') ?>">Pedido</a></li>
                        
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
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-warning" >Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-warning">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        </nav>
    <h1>Creando Pedido...</h1>
    <div class=" bg-warning" style="width:50%;">

    </div>
    <form action="{{url('/pedido')}}"  method="post"  class="flex-row p-5 bg-light justify-content-center" >
    @csrf
      <div class="col-md-8">
      <label for="cantidad">Ingresa la cantidad que deseas tomando en cuenta las medidas de exportación: </label>
    <input type="number" name="cantidad"  placeholder="Ingresa la cantidad de tu exportación" min="1" max="150" > 
      </div>
      <fieldset class="row mb-3">
      <legend class="col-form-label col-sm-2 pt-0">Selecciona la modalidad de tus medidas </legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="modalidad" id="gridRadios1" value="red con 5 libras" checked>
          <label class="form-check-label" for="gridRadios1">
            Red de 5 libras
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="modalidad" id="gridRadios2" value="Caja con 10 libras">
          <label class="form-check-label" for="gridRadios2">
           Caja con 10 libras
          </label>
        </div>
        <div class="form-check ">
          <input class="form-check-input" type="radio" name="modalidad"id="gridRadios3" value="Caja con 40 libras " >
          <label class="form-check-label" for="gridRadios3">
          Caja con 40 libras 
          </label>
        </div>
      </div>
    </fieldset>
    <div class="row g-3">
    <label for="nombre" class="form-label">Datos del respnsable:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control text-center" name="nombre" placeholder="Nombre del representante" id="">
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control text-center" name="apellido" placeholder="Apellido del representante" id="">
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control text-center" name="tel" placeholder="Teléfono de Contacto" id="">
      </div>
    </div>
    
  <div class="row g-3 ">
  <label for="direccion" class="form-label " >Dirección de Envío:</label>
  <div class="col-sm-3">
    <input type="text" class="form-control text-center" name="calle" placeholder="Calle" aria-label="Calle">
  </div>
  <div class="col-sm-1">
    <input type="text" class="form-control text-center" name="num" placeholder="Número" aria-label="Número">
  </div>
  <div class="col-sm-2">
    <input type="text" class="form-control text-center" name="col" placeholder="Colonia" aria-label="Colonia">
  </div>
  <div class="col-sm-1">
    <input type="text" class="form-control text-center" name="cod_Postal" placeholder="C. P" aria-label="Código Postal">
  </div>
  <div class="col-sm-2">
    <select id="inputState" class="form-select text-center" name="estado">
      <option selected>Estado...</option>
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
    <input type="text" class="form-control" id="" placeholder="VECJ880326XXX" name="rfc_Empresa" >
  </div>

  <div class="col-10">
  <label for="exampleFormControlTextarea1" class="form-label">Notas: </label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="nota"></textarea>
  </div>


  <div class="col-10">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" value=1>
      <label class="form-check-label" for="gridCheck">
        Términos y condiciones
      </label>
    </div>
  </div>
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Realizar Pedido</button>
  </div>
</form>


    <!--<br><br>
    Estas creando un pedido...<br>

    <form action="{{url('/pedido')}}"  method="post" >
       
    @csrf

    <label for="cantidad">Ingresa la cantidad que deseas tomando en cuenta las medidas de exportación: </label>
    <input type="number" name="cantidad"  placeholder="Ingresa la cantidad de tu exportación" min="1" > <br>
    Selecciona la modalidad de tus medidas <br>
    <input type="radio" name="modalidad" value="red con 5 libras"> Red de 5 libras <br>
    <input type="radio" name="modalidad" value="caja con 10 libras ">Caja con 10 libras <br>
    <input type="radio" name="modalidad" value="caja con 40 libras">Caja con 40 libras <br><br>
    Ingresa el nombre del representante del pedido: 
    <input type="text" name="nombre"  placeholder="Nombre"><br>
    Ingresa el apellido: 
    <input type="text" name="apellido"  placeholder="Apellido"><br>
    Ingresa el mejor teléfono de contacto: 
    <input type="text" name="tel"  placeholder="Teléfono"><br>
    Ingresa la dirección de envío: 
    <input type="text" name="calle"  placeholder="Calle">
    <input type="text" name="num"  placeholder="Número">
    <input type="text" name="col"  placeholder="Colonia">
    <input type="text" name="estado"  placeholder="Estado">
    <input type="text" name="cod_Postal"  placeholder="C.P"><br><br>
    Ingresa el RFC de la empresa: 
    <input type="text" name="rfc_Empresa"  placeholder="RFC Empresa"><br><br>
    <input type="text" name="fecha_Pedido"  placeholder="AAAA-MM-DD"><br><br>
    Ingresa alguna nota o comentario para tu pedido: <textarea name="nota" cols="50" rows="3" ></textarea>
    <br>

    <input type="submit" value="Hacer pedido">

    </form>--> 
  </body>
</html>








