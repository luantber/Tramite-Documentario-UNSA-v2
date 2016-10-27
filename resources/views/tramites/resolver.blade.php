@extends('template')

@section('title','Resolver Trámite')

@section('content')

<form  action="resolTram" method="POST">

  <h2><p class="text-center">  Resolver Trámite </p></h2>
  <br>

  <div class="row form-group">

    <div class="col-sm-6 form-group">
      <div class="row form-group">

          <label for="comentario" class=" col-sm-offset-2 col-sm-2"> Comentario </label>
          <div class="col-sm-6">
            <textarea name="comentario" rows="4" type="text" placeholder="Ingrese Comentario" class="form-control" id="comentario"> </textarea>
          </div>

      </div>

      <div class="row form-group col-sm-offset-5 col-sm-4">

        <button type="submit" class="btn btn-default" value="Submit">Crear Comentario</button>

      </div>

    </div>
<!-- Segunda columna -->
    <div class="col-sm-6 form-group">

      <div class="row form-group">

        <label for="archivo" class=" col-sm-2 control-label">Archivo Adjunto</label>
        <div class="col-sm-10">
          <input id="archivo" name="archivo" type="file" class="file" data-show-preview="false">
          <script type="text/javascript">
          (function($){
            $("#archivo").fileinput(
            {
              showUpload:false,
              language: 'es',
              allowedFileExtensions: ["doc","docx","odt"],
              maxFilesNum: 1
            })}(jQuery);
          </script>

        </div>

      </div>

      <div class="row form-group">

        <label for="modEstado" class="col-sm-2 control-label" >Modificar Estado</label>
        <div class="col-sm-4">
          <select name="modEstado" class="form-control" id="ModEstado"> </select>
        </div>

      </div>


  </div>

  <!-- Nueva fila -->

  <div class="row form-group">

    <div class="col-sm-offset-2 col-sm-5 form-group">

      <table class="table table-striped">
        <thead>
          <tr>
            <th>Comentarios Previos</th>
            <th>Empleado</th>
            <th>Area</th>
            <th>Fecha</th>
          </tr>
        </thead>
      </table>

    </div>

<!-- Segunda columna -->
    <div class="col-sm-3 form-group">

      <div class="row col-sm-offset-2 col-sm-4 form-group">

        <button type="submit" class="btn btn-default" value="Submit">Delegar Tramite</button>

      </div>

      <div class="row col-sm-offset-2 col-sm-7 ">

          <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
            <span class="sr-only">45% Complete</span>
            </div>
          </div>

      </div>

      <div class="row col-sm-offset-2 col-sm-4">

          <label for="progreso" class="row col-sm-offset-3 col-sm-4 control-label" >Progreso</label>

      </div>
    </div>

  </div>


</form>

@endsection
