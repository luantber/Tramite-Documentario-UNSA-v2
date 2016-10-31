@extends('template')

@section('title','Editar Trámite')

@section('content')


<form method="POST" onsubmit="return validar()" action="{{asset('tramites')}}"> 
    {{ csrf_field()}}

    <form class="form-horizontal container" enctype="multipart/form-data">

      <h2><p class="text-center">  Crear Nuevo Trámite </p></h2>
      <br>

        <div class=" form-group">
            <label for="dni" class="col-sm-2 control-label"> DNI </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingresar DNI" required="true" value="DNI" disabled="">
            </div>
            <p id="noingreso"></p>
        </div><br><br>

        <div class="form-group">
          <label for="destino" class="col-sm-2 control-label" >Área a delegar</label>
          <div class="col-sm-10">
            <select name="destino" class="form-control" id="destino">
              <option value="" >Seleccionar</option>

            </select>
            <p id="nodestino" ></p>
          </div>
        </div>

        <div class="form-group">
          <label for="tipo" class="col-sm-2 control-label" >Tipo de Trámite</label>
          <div class="col-sm-10">
            <select name="tipoTramite" class="form-control" id="tipo">
              <option value="" >Elegir área</option>

            </select>
            <p id="nodestino" ></p>
          </div>
        </div><br>

        <div class="form-group">
          <label for="prioridad" class="col-sm-2 control-label" >Prioridad </label>
          <div class="col-sm-10">
            <select name="prioridad"  class="form-control" value="" id="prioridad">
              <option value="" >Seleccionar</option>
              <option value="1" required>"Urgente"</option>
              <option value="2" required>"Alta"</option>
              <option value="3" required>"Normal"</option>
            </select>
            <p id="nopcion" ></p>
          </div>
        </div>

      	<div class="form-group">
      		<label for="asunto" class="col-sm-2 control-label" >Asunto </label>
      		<div class="col-sm-10" >
      			<textarea name="asunto" class="form-control" rows="2" id="asunto" placeholder="Ingrese el asunto" value="Asunto" ></textarea>
      		</div>
      	</div>

        <br><br><br>
        <p>.</p>

        <nav>
          <ul class="pager">
            <li><a href="#">Cancelar</a></li>
          </ul>
        </nav>

        <div class="row">
          	<div class="form-group">
              <div class="text-center">
                <button type="submit" class="btn btn-lg" value="Submit">Guardar cambios</button>
              </div>
            </div>
        </div>
      </form>
</form>

        
      <form method="POST" onsubmit="return validar()" action="{{asset('tramites')}}"> 
        <div class="row">
          {{ csrf_field()}}
              <div class="form-group">
                <div class="text-center">
                  <button type="submit" class="btn btn-lg" value="Submit">Finalizar</button>
                </div>
              </div>
        </div>
      </form>


        <p> </p>
        <p> .</p>
        <p> .</p>

<script type="text/javascript">
  function validar(){
    var DNI = document.getElementById("dni").value;
    var texto;

    if( !(/^\d{8}$/.test(DNI)) ) {
        texto ="Ingrese un número de 8 digitos";
        document.getElementById("noingreso").innerHTML = texto;
      return false;
    }
  }
</script>

@endsection