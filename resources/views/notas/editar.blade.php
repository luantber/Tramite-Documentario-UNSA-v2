@extends('template')

@section('title','Editar Nota')

@section('content')



<div class="row">
      <div class="col-md-6 col-md-offset-3">

    <h2><p class="text-center">  Editar Notas </p></h2>

    <br><br>
      <form method="post" onsubmit="return validar()" action="{{asset('notas')}}{{'/'.$notas->id}}">

        {{ csrf_field()}}
        <input type="hidden" name="id" value="{{$notas->id}}">
        <div class="row">
          <div class="col-sm-12">
            <label for="nombre" >Nombre: </label>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
                </span>
              <input class="form-control" type="string" name ="nombre" id="nombre" value="{{$notas->nombre}}"  required="true">
            </div>
          </div>
        </div><br>

        <div class="row">
          <div class="col-sm-12">
              <label for="nota" >Nota: </label>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </span>
                <input class="form-control" type="string" name ="descripcion" id="descripcion" value="{{$notas->descripcion}}"  required="true">
              </div>
          </div>
        </div><br>

        <div class="row">
          <div class="col-sm-6">
            <label for="area">Privacidad: </label>
                 <select name="personal" type="text" class="form-control" id="personal" name="personal" required="true">
                   @if($notas->personal == 1)
                    <option value="{{$notas->personal}}" >Personal</option>
                          <option value='0'>Público</option>
                  @else
                          <option value="{{$notas->personal}}" >Público</option>
                          <option value='1'>Personal</option>
                          @endif
                </select>
          </div>

        </div><br>
        <div class="form-group">
            <div class="text-center">
            <button class="btn btn-lg" type="submit" value="Submit">
            Guardar cambios </button>
          </div>
        </div>

      </form>
    </div>
  </div>

@endsection
