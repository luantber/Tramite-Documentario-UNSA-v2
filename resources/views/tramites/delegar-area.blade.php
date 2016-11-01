@extends('template')

@section('title','Delegar Trámite')

@section('content')

<form method="POST" action="{{asset('tramites/'.$tramite->id.'/delegar-area')}}">
      {{ csrf_field()}}
  <h2><p class="text-center">  Delegar Trámite </p></h2>
  <br>

  <div class="row">


        <div class="col-xs-6 form-group">

            <div class="row form-group">
              <label for="idExped" class="col-xs-offset-2 col-xs-2"> Expediente </label>
              <div class="col-xs-6">
                <input type="text" class="form-control" name="numExp" id="numExp" value="{{$tramite->nro_expediente}}" required="true" disabled="">
              </div>
            </div>
            

          

          <div class="row form-group">

            <label for="remitente" class="col-xs-offset-2 col-xs-2"> Area Actual </label>
            <div class="col-xs-6">
              <input type="text" class="form-control" name="area_remitente" id="area_remitente" value="{{$tramite->area->nombre}}" required="true" disabled="">
            </div>

          </div>

        
          <div class="row form-group">
                <label for="area" class=" col-xs-offset-2 col-xs-2"> Area Destino </label>
                <div class="col-sm-6">
                  <select name="area_destino" type="text" placeholder="Seleccione" class="form-control" id="area_destino"> 
                  <option value="" >Seleccionar area</option>
                    @foreach($areas as $area)
                          <option value='{{$area->id}}'>{{$area->nombre}}</option>
                      @endforeach      




                  </select>
            </div>
          </div>

          

          <br>


        </div>




        <div class="col-xs-6 form-group">

          

          <div class="row form-group">
              <label for="dni" class="col-xs-offset-2 col-xs-2"> Comentario </label>
              <div class="col-sm-6">
                <textarea type="text" class="form-control" rows="5" name="comentario" id="comentario"> </textarea>
              </div>
          </div>


        </div>

  </div>

  <div class="row col-xs-offset-10"  >

    <button type="submit" class="btn btn-default" value="Submit">Delegar Tramite</button>

  </div>



</form>

@endsection
