@extends('template')

@section('title','Eliminar Trámite')

@section('content')


<form method="POST" action="{{asset('tramites')}}"> 
    {{ csrf_field()}}

    <form class="form-horizontal container" enctype="multipart/form-data">

      <h2><p class="text-center">  Eliminar Trámite </p></h2>
      <br>

        <div class=" row">
            <label for="dni" class="col-sm-2 control-label"> DNI </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingresar DNI" required="true" value="nro DNI" disabled="">
            </div>
            <p id="noingreso"></p>
        </div><br>

        <div class="row">
          <label for="destino" class="col-sm-2 control-label" >Área a delegar</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="destino" id="destino" required="true" value="Area delegada" disabled="">
          </div>
        </div><br>

        <div class="row">
          <label for="tipo" class="col-sm-2 control-label" >Tipo de Trámite</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tipo" id="tipo" required="true" value="Tipo trámite" disabled="">
          </div>
        </div><br>

        <div class="row">
          <label for="prioridad" class="col-sm-2 control-label" >Prioridad </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="prioridad" id="prioridad" required="true" value="Prioridad" disabled="">
          </div>
        </div><br>

      	<div class="row">
      		<label for="asunto" class="col-sm-2 control-label" >Asunto </label>
      		<div class="col-sm-10" >
            <input type="text" class="form-control" name="asunto" id="asunto" required="true" value="Asunto" disabled="">
      		</div>
      	</div><br>

        <br><br><br>
        <p>.</p>

        <nav>
          <ul class="pager">
            <li><a href="#">Cancelar</a></li>
          </ul>
        </nav>
      </form>
</form>

        
<form method="POST" onsubmit="return validar()" action="{{asset('tramites')}}"> 
  <div class="row">
    {{ csrf_field()}}
        <div class="form-group">
          <div class="text-center">
            <button type="submit" class="btn btn-lg" value="Submit">Eliminar</button>
          </div>
        </div>
  </div>
</form>


<p> </p>
<p> .</p>
<p> .</p>

@endsection