@extends('template')

@section('title','Delegar Trámite')

@section('content')


  <h2><p class="text-center">  Delegar Trámite </p></h2>
  <br><br>

  <div class="row">

    <div class="col-md-6">
      <label for="idExped" >Expediente: </label>
      <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">
            <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
          </span>
          <input type="text" class="form-control" name="numExp" id="numExp" value="{{$tramite->nro_expediente}}" required="true" disabled="">
      </div>
    </div>
  


    <div class="col-md-6">
      <label for="remitente" >Área actual: </label>
      <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">
            <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
          </span>
          <input class="form-control" type="text" name ="area_remitente" id="area_remitente" value="{{$tramite->area->nombre}}" required="true" disabled="">
      </div>
    </div>
  </div><br>

    

     
            
<form method="post" id="form" action="{{asset('tramites'.'/'.$tramite->id.'/delegar')}}">
  {{ csrf_field()}}

<div class="row">
    <div class="col-md-8">
       
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#empleado">Empleado</a></li>
            <li><a data-toggle="tab" href="#area">Area</a></li>
            <li><a data-toggle="tab" href="#subarea">SubArea</a></li>
            <li><a data-toggle="tab" href="#jefe">Jefe</a></li>
            <li><a data-toggle="tab" href="#finalizar">Finalizar</a></li>
          </ul>


        <div class="tab-content">

        <!--Empleado -->
          <div id="empleado" class="tab-pane fade in active">
            <br>
              <select name="id_empleado" type="text" class="form-control" id="empleado">
                  <option value="" >Seleccionar empleado</option>
                  @foreach ($empleados as $empleado)
                    <option value="{{$empleado->id}}" >{{$empleado->user->nombre}}</option>
                  @endforeach
              </select>

              <br>

              <div class="selectme">
                <label>
                  <input type="checkbox" value="empleado" name="c_empleado" id="c_empleado_id" class="check"> Confirmar
                </label>
              </div>
          </div>


          <!-- Area -->
          <div id="area" class="tab-pane fade">
              <br>
              <select name="area" type="text" class="form-control" id="id_area">
                <option value="" >Seleccionar área</option>
                @foreach ($areas as $area)
                  @if($area->id !=1)
                    <option value="{{$area->id}}" >{{$area->nombre}}</option>
                  @endif
                @endforeach
              </select>

              <br>
             <div class="selectme">
                    <label>
                      <input type="checkbox" value="area" name="c_area" id="c_area_id" class="check"> Confirmar
                    </label>
              </div>
          </div>

          <!--Sub Area -->
          <div id="subarea" class="tab-pane fade">
              <br>
              <select name="subarea" type="text" class="form-control" id="id_subarea">
                <option value="" >Seleccionar sub-área</option>
                @foreach ($subAreas as $subarea)
                  <option value="{{$subarea->id}}" >{{$subarea->nombre}}</option>
                @endforeach
              </select>

              <br>
              <div class="selectme">
                <label>
                  <input type="checkbox" value="subArea" name="c_subArea" id="c_subArea_id" class="check"> Confirmar
                </label>
              </div>
          </div>

          <!--Jefe -->
          <div id="jefe" class="tab-pane fade">
          <br>
          Remitir a Jefe de Area
          <br><br>
             <div class="selectme">
                    <label>
                      <input type="checkbox" value="area" name="c_jefe" id="c_jefe_id" class="check"> Confirmar
                    </label>
              </div>
          </div>

          <div id="finalizar" class="tab-pane fade">
          <br>
          Finalizar trámite
          <br><br>
             <div class="selectme">
                    <label>
                      <input type="checkbox" value="finalizar" name="finalizar" id="finalizar_id" class="check"> Confirmar
                    </label>
              </div>
          </div>
    
    </div>
      
       
    </div>
    <!-- Fin Delegar-->

    <div class="col-md-4">
            <label for="comentario" >Comentario: </label>
            <div class="">
              <textarea type="text" class="form-control" rows="5" name="comentario" id="comentario"> </textarea>
            </div>
    </div>
    <!-- Fin Comentarios-->

        
</div>

<div class="row">
    <br>
    <button class="btn btn-lg btn-primary" type="submit" value="Submit"> 
          Delegar </button> 
</div>
  </form>

<script type="text/javascript">
  $('.selectme input:checkbox').click(function() {
    $('.selectme input:checkbox').not(this).prop('checked', false);
  });

  jQuery(function ($) {
    $('#form').submit(function (e) {
        //check atleast 1 checkbox is checked
        if (!$('.check').is(':checked')) {
            e.preventDefault();
        }
    })
})

</script>

@endsection
