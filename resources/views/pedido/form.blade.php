
<div class="col-md-8 container-md bg-white">
  <h3 class="text-center">Editando pedido...</h3>
      <label for="cantidad">Ingresa la cantidad que deseas tomando en cuenta las medidas de exportación: </label>
      
    <input type="number" name="cantidad"  placeholder="Ingresa la cantidad de tu exportación" min="1" max="150" value="{{$pedido->cantidad}}"> <br><br>
      
      <fieldset class="row mb-3 ">
      <legend class="col-form-label col-sm-2 pt-0 mb-3 ">Medidas: </legend>
      
      <div class="col-sm-10 ">
      <input class="form-check-input text-bg-secondary " type="radio" name="flexRadioDisabled" id="flexRadioDisabled" disabled checked>
      <label class="form-check-label text-bg-secondary " for="flexRadioDisabled">Selecciona la modalidad de tus medidas</label>
        <div class="form-check  was-validated">
          <input class="form-check-input text-bg-secondary" type="radio" name="modalidad"  id="validationFormCheck1" value=5 required >
          <label class="form-check-label" for="validationFormCheck1" >
            Red de 5 libras
          </label>
        </div>
        <div class="form-check  was-validated">
          <input class="form-check-input text-bg-secondary" type="radio" name="modalidad" id="validationFormCheck2" value=10 required>
          <label class="form-check-label" for="validationFormCheck2">
           Caja con 10 libras
          </label>
        </div>
        <div class="form-check  was-validated ">
          <input class="form-check-input text-bg-secondary" type="radio" name="modalidad"id="validationFormCheck3" value=40  required>
          <label class="form-check-label" for="validationFormCheck3">
          Caja con 40 libras 
          </label>
        </div>
        <div class="invalid-feedback">Necesario seleccionar una opción</div>
      </div>
    </fieldset>
    <div class="row g-3">
    <label for="nombre" class="form-label">Datos del respnsable:</label>
      <div class="col-sm-3">
        <input type="text" class="form-control text-center" name="nombre" placeholder="Nombre del representante" id="" value="{{$pedido->nombre}}">
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control text-center" name="apellido" placeholder="Apellido del representante" id="" value="{{$pedido->apellido}}" >
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control text-center" name="tel" placeholder="Teléfono de Contacto" id="" value="{{$pedido->tel}}">
      </div>
    </div>
    
  <div class="row g-3 ">
  <label for="direccion" class="form-label " >Dirección de Envío:</label>
  <div class="col-sm-3">
    <input type="text" class="form-control text-center" name="calle" placeholder="Calle" aria-label="Calle" value="{{$pedido->calle}}">
  </div>
  <div class="col-sm-1">
    <input type="text" class="form-control text-center" name="num" placeholder="Número" aria-label="Número" value="{{$pedido->num}}">
  </div>
  <div class="col-sm-2">
    <input type="text" class="form-control text-center" name="col" placeholder="Colonia" aria-label="Colonia" value="{{$pedido->col}}">
  </div>
  <div class="col-sm-1">
    <input type="text" class="form-control text-center" name="cod_Postal" placeholder="C. P" aria-label="Código Postal" value="{{$pedido->cod_Postal}}">
  </div> 
  <div class="col-sm-2">
    <select id="inputState" class="form-select text-center" name="estado">
      <option selected >{{$pedido->estado}}</option>
      <option value="Aguascalientes">Aguascalientes</option>
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
  <div class="col-sm-2 ">
    <label for="rfc" class="form-label">RFC de la empresa</label>
    <input type="text" class="form-control" id="" placeholder="VECJ880326XXX" name="rfc_Empresa"  value="{{$pedido->rfc_Empresa}}">
  </div>

  <div class="col-10 text-center">
  <label for="exampleFormControlTextarea1" class="form-label">Notas: </label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="nota" value="{{$pedido->nota}}"></textarea>
  </div>


  <div class="col-10 ">
    <div class="form-check">
      <input class="form-check-input bg-secondary" type="checkbox" id="gridCheck" value=1>
      <label class="form-check-label" for="gridCheck">
        Términos y condiciones
      </label>
    </div>
  </div>
  
  
  <div class="col-12 text-center">
    <button type="submit" class="btn btn-warning">Guardar datos</button>
  </div>
  </div>