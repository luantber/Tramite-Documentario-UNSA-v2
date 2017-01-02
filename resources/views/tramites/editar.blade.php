@extends('template')

@section('title','Editar Trámite')

@section('content')

<form method="post" onsubmit="return validar()" action="{{asset('tramites')}}{{'/'.$tramite->id}}"> 
    {{ csrf_field()}}

    <form class="form-horizontal container" enctype="multipart/form-data">

      <h2><p class="text-center">  Editar Trámite </p></h2>
      <br>

        @if($tramite->persona != NULL)
        <div class="row">
            <label for="dni" class="col-sm-2 control-label"> DNI </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="dni" id="dni" required="true" value="{{$tramite->persona->dni}}">
            </div>
        </div><br>
            @else
              <!-- -->
            @endif

        <div class="row">
          <label for="destino" class="col-sm-2 control-label" >Área a delegar</label>
          <div class="col-sm-10">
            <select name="destino" class="form-control" id="destino">
              <option value="{{$tramite->area->id}}" >{{$tramite->area->nombre}}</option>
              @foreach($areas as $area)
                @if( $tramite->area->id != $area->id)
                  <option value="{{$area->id}}" >{{$area->nombre}}</option>
                @endif
              @endforeach
            </select>
          </div>
        </div><br>

        <div class="row">
          <label for="tipo" class="col-sm-2 control-label" >Tipo de Trámite</label>
          <div class="col-sm-10">
            
            <select name="tipoTramite" class="form-control" id="tipo">
              
            @if( $tramite->tipoTramite != NULL)
              <option value="{{$tramite->tipoTramite->id}}" > {{$tramite->tipoTramite->nombre}}
              </option>

              @foreach($tipos as $tipo)
                @if( $tramite->tipoTramite->id != $tipo->id)
                  @if($tipo->id!=1)
                  <option value="{{$tipo->id}}" >{{$tipo->nombre}}</option>
                  @endif
                @endif
              @endforeach
            
            @else
              <option value=""> No tiene tipo trámite
              </option>
            @endif
            </select>
          </div>
        </div><br>

        <div class="row">
          <label for="tipo" class="col-sm-2 control-label" >Estado de Trámite</label>
          <div class="col-sm-10">
            <select name="estadoTramite" class="form-control" id="tipo">
              <option value="" >Estado de trámite</option>
                @foreach($estados as $estado)
                  <option value="{{$estado->id}}" >{{$estado->nombre}}</option>
              @endforeach
            </select>
          </div>
        </div><br>

        <div class="row">
          <label for="prioridad" class="col-sm-2 control-label" >Prioridad </label>
          <div class="col-sm-10">
            <select name="prioridad"  class="form-control" id="prioridad" >
              @if($tramite->prioridad == 1)
                <option value="1" required>Urgente</option>
                <option value="2" required>Alta</option>    
                <option value="3" required>Normal</option>
              @elseif($tramite->prioridad == 2)
                <option value="2" required>Alta</option>    
                <option value="1" required>Urgente</option>
                <option value="3" required>Normal</option>
              @elseif ($tramite->prioridad == 3)
                <option value="3" required>Normal</option>
                <option value="1" required>Urgente</option>
                <option value="2" required>Alta</option>
              @endif
            </select>
          </div>
        </div><br>

      	<div class="row">
      		<label for="asunto" class="col-sm-2 control-label" >Asunto </label>
      		<div class="col-sm-10" >
      			<input name="asunto" class="form-control" id="asunto" value="{{$tramite->asunto}}" required="">
      		</div>
      	</div><br>

        <br><br><br>
        <p>.</p>

        <nav>
          <ul class="pager">
            <li><a href="{{asset('tramites')}}">Cancelar</a></li>
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