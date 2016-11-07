@extends('template')

@section('title','Delegar Trámite')

@section('content')

<form method="POST" action="{{asset('tramites'.'/'.$tramite->id.'/delegar')}}">
      {{ csrf_field()}}
  <h2><p class="text-center">  Delegar Trámite </p></h2>
  <br><br>

  <div class="row">

      <div class="col-md-1">
      </div>
        
        <div class="col-md-10">
            
            <div class="col-md-6">

              <div class="row form-group">
                <div class="col-sm-12">
                  <label for="idExped" >Expediente: </label>
                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">
                        <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                      </span>
                      <input type="text" class="form-control" name="numExp" id="numExp" value="{{$tramite->nro_expediente}}" required="true" disabled="">
                  </div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-sm-12">
                  <label for="remitente" >Área actual: </label>
                  <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">
                        <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                      </span>
                      <input class="form-control" type="text" name ="area_remitente" id="area_remitente" value="{{$tramite->area->nombre}}" required="true" disabled="">
                  </div>
                </div>
              </div><br>

            </div>

            <div class="col-md-6">
              
              <div class=" row">
                  <div class="col-sm-12">
                    <label for="empleado">Empleado: </label>
                      <select name="id_empleado" type="text" class="form-control" id="empleado">
                          <option value="" >Seleccionar empleado</option>
                          @foreach ($empleados as $empleado)
                            <option value="{{$empleado->id}}" >{{$empleado->user->nombre}}</option>
                          @endforeach
                        </select>
                  </div>
              </div><br>

              <div class="checkbox">
                <label>
                  <input type="checkbox" value="empleado" name="c_empleado" id="c_empleado_id"> Empleado
                </label>
              </div>


            </div>



        </div>

      <div class="col-md-1">
      </div>

  </div>

  <div class="row">
    
    <div class="col-md-1">
    </div>
        
        <div class="col-md-10">

            <div class="col-md-6">
                
              <div class="row form-group">
                <div class="col-sm-12">
                  <label for="comentario" >Comentario: </label>
                  <div class="">
                      <textarea type="text" class="form-control" rows="5" name="comentario" id="comentario"> </textarea>
                  </div>
                </div>
              </div><br>

            </div>

            <div class="col-md-6">
              
              <div class=" row">
                  <div class="col-sm-12">
                    <label for="area">Area: </label>
                      <select name="area" type="text" class="form-control" id="id_area">
                          <option value="" >Seleccionar área</option>
                          @foreach ($areas as $area)
                            <option value="{{$empleado->id}}" >{{$area->nombre}}</option>
                          @endforeach
                        </select>
                  </div>
              </div><br>

              <div class="checkbox">
                <label>
                  <input type="checkbox" value="area" name="c_area" id="c_area_id"> Área
                </label>
              </div><br>

              <div class=" row">
                  <div class="col-sm-12">
                    <label for="subarea">Sub-área: </label>
                      <select name="subarea" type="text" class="form-control" id="id_subarea">
                          <option value="" >Seleccionar sub-área</option>
                          @foreach ($subAreas as $subarea)
                            <option value="{{$empleado->id}}" >{{$subarea->nombre}}</option>
                          @endforeach
                        </select>
                  </div>
              </div><br>

              <div class="checkbox">
                <label>
                  <input type="checkbox" value="subArea" name="c_subArea" id="c_subArea_id"> Sub-área
                </label>
              </div>

              <button type="button" class="btn btn-primary pull-right" value="Submit" name="" id="">Delegar</button>

            </div>

        </div>

  </div>

</form>

@endsection
