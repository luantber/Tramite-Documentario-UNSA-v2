@extends('template')

@section('title','Delegar Trámite')

@section('content')

<form method="POST" action="delegarTram">

  <h2><p class="text-center">  Delegar Trámite </p></h2>
  <br>

  <div class="row">


        <div class="col-xs-6 form-group">


            <div class="row form-group">
                <label for="area" class=" col-xs-offset-2 col-xs-2"> Area </label>
                <div class="col-sm-6">
                  <select name="area" type="text" placeholder="Seleccione" class="form-control" id="area"> </select>
            </div>
          </div>

          <div class="row form-group">
              <label for="encargado" class="col-xs-offset-2 col-xs-2"> Encargado </label>
              <div class="col-sm-6">
                <select name="encargado" type="text" placeholder="Seleccione" class="form-control" id="encargado"> </select>
              </div>
          </div>

          <br>

          <div class="row form-group">
              <label for="idExped" class="col-xs-offset-2 col-xs-2"> ID Expediente </label>
              <div class="col-xs-6">
                <input type="text" class="form-control" name="idExped" id="idExped">
              </div>
          </div>

          <div class="row form-group">

            <label for="remitente" class="col-xs-offset-2 col-xs-2"> Remitente </label>
            <div class="col-xs-6">
              <input type="text" class="form-control" name="remitente" id="remitente">
            </div>

          </div>

          <div class="row form-group">

            <label for="estado" class="col-xs-offset-2 col-xs-2"> Estado </label>
            <div class="col-xs-6">
              <input type="text" class="form-control" name="estado" id="estado">
            </div>

          </div>

        </div>

        <div class="col-xs-6 form-group">

          <div class="row form-group">
              <label for="fecha" class="col-xs-offset-2 col-xs-2"> Fecha de Ingreso </label>
              <div class="col-sm-6">
                <input  type="date" class="form-control" name="fecha" id="fecha">
              </div>
          </div>

          <div class="row form-group">
              <label for="areaDestino" class="col-xs-offset-2 col-xs-2"> Destino </label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="areaDestino" id="areaDestino">
              </div>
          </div>

          <div class="row form-group">
              <label for="dni" class="col-xs-offset-2 col-xs-2"> DNI </label>
              <div class="col-sm-6">
                <input type="text" class="form-control" name="dni" id="dni">
              </div>
          </div>

          <div class="row form-group">
              <label for="dni" class="col-xs-offset-2 col-xs-2"> Descripción </label>
              <div class="col-sm-6">
                <textarea type="text" class="form-control" rows="5" name="descripcion" id="descripcion"> </textarea>
              </div>
          </div>


        </div>

  </div>

  <div class="row col-xs-offset-10">

    <button type="submit" class="btn btn-default" value="Submit">Delegar Tramite</button>

  </div>



</form>

@endsection
