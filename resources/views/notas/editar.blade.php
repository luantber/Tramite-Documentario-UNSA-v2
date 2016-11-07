@extends('template')

@section('title','Editar Nota')

@section('content')

<div class="row">
      <div class="col-md-6 col-md-offset-3">

    <h2><p class="text-center">  Editar Notas </p></h2>

    <br><br>
      <form method="post" onsubmit="return validar()" action="{{asset('notas')}}{{'/'.$nota->id}}">

        {{ csrf_field()}}

        <div class="row">
          <div class="col-sm-12">
            <label for="nombre" >Nombre: </label>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
                </span>
              <input class="form-control" type="string" name ="nombre" id="nombre" value="{{$nota->nombre}}"  required="true">
            </div>
          </div>
        </div><br>

        <div class="row">
          <div class="col-sm-12">
              <label for="apellido" >Nota: </label>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </span>
                <input class="form-control" type="string" name ="descripcion" id="descripcion" value="{{$nota->descripcion}}"  required="true">
              </div>
          </div>
        </div><br>

        <div class="row">
          <div class="col-sm-6">
            <label for="area">Privacidad: </label>
                 <select name="personal" type="text" class="form-control" id="personal" name="personal" required="true">
                <option value="" >Cambiar Privacidad</option>
                          <option value='1'>Personal</option>
                          <option value='0'>Público</option>
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
