@extends('template')

@section('title','Eliminar Estado')

@section('content')

<form method="POST" action="eliminar">
  {{ csrf_field()}}

  <div class="row">
      <div class="col-md-6 col-md-offset-3">

    <h2><p class="text-center">  Eliminar Estado</p></h2>
    <form>
    <input type="text" class="form-control" placeholder="Nombre" name="id" id="nomEstado" required="true" value="{{$eliminado->id}}">
      <div class="form-group">
        <label for="nomArea"> Nombre del Estado: </label>
        <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nomEstado" required="true" value="{{$eliminado->nombre}}">
      </div>


      <div class="form-group">
        <label for="Descripcion"> Descripción: </label>
        <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nomEstado" required="true" value="{{$eliminado->descripcion}}">
      </div>

      <div class="form-group">
          <div class="text-center">
              <button type="submit" value="Submit" class="btn btn-lg">Eliminar</button>
          </div>
          </div>

    </form>
    </div>
  </div>

</form>

@endsection