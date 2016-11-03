

@extends('template')

@section('title','Crear Nuevo Empleado')

@section('content')

  
<div class="row">
  <div class="col-md-6 col-md-offset-3">

    <h2><p class="text-center">  Crear Nuevo Empleado </p></h2>
    <br><br>

    <form method="post" onsubmit="return validar()" action="{{asset('tramites/'.$tramite->id.'/delegar-empleado')}}">
    {{ csrf_field()}}

     
      <div class=" row">
        <div class="col-sm-12">
          <label for="empleado">Empleado: </label>
            <select name="id_empleado" type="text" class="form-control" id="empleado">
                <option value="" >Seleccionar empleado</option>
                    @foreach($empleados as $empleado)
                          <option value='{{$empleado->id}}'>{{$empleado->user->nombre}}</option>
                      @endforeach
              </select>
        </div>
      </div><br>

     
      <div class="form-group">
        <div class="text-center">
          <button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit"> 
          Delegar </button> 
        </div>
      </div>

    </form>
  </div>
</div>



@endsection
