@extends('template')

@section('title','Editar Trámite')

@section('content')



<form method="POST" onsubmit="return validar()" action="{{asset('tramites')}}{{'/'.$tramite->id.'/editar'}}"> 
    {{ csrf_field()}}

    <form class="form-horizontal container" enctype="multipart/form-data">

      <h2><p class="text-center">  Mostrar Trámite </p></h2>
      <br>

        <div class="row">
            <label for="dni" class="col-sm-2 control-label"> DNI </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="dni" id="dni" required="true" value="{{$tramite->persona->dni}}" disabled="">
            </div>
            <p id="noingreso"></p>
        </div><br>

        <div class="row">
          <label for="destino" class="col-sm-2 control-label" >Área a delegar</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="dni" id="dni" required="true" value="{{$tramite->area->nombre}}" disabled="">
            <p id="nodestino" ></p>
          </div>
        </div>

        <div class="row">
          <label for="tipo" class="col-sm-2 control-label" >Tipo de Trámite</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="dni" id="dni" required="true" value="{{$tramite->tipoTramite->nombre}}" disabled="">
            <p id="nodestino" ></p>
          </div>
        </div>

        <div class="row">
          <label for="prioridad" class="col-sm-2 control-label" >Prioridad </label>
          <div class="col-sm-10">
              @if($tramite->prioridad == 1)
                <input type="text" id="prioridad" class="form-control"  name="prioridad" disabled="" value="Urgente">
              @elseif($tramite->prioridad == 2)
                <input type="text" id="prioridad" class="form-control"  name="prioridad" disabled="" value="Alta">
              @elseif ($tramite->prioridad == 3)
                <input type="text" id="prioridad" class="form-control"  name="prioridad" disabled="" value="Normal">
              @endif
            </select>
          </div>
        </div><br>

      	<div class="row">
      		<label for="asunto" class="col-sm-2 control-label" >Asunto </label>
      		<div class="col-sm-10" >
      			<input name="asunto" class="form-control" id="asunto" value="{{$tramite->asunto}}" disabled=""></textarea>
      		</div>
      	</div><br>


        <div class="panel-footer">
          <a href="{{asset('tramites')}}{{'/'.$tramite->id.'/editar'}}" data-original-title="EditTram" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i>Editar</a>
          <span class="pull-right">
              <a href="{{asset('tramites')}}{{'/'.$tramite->id.'/eliminar'}}" data-original-title="RemoveTram" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i>Eliminar</a>
          </span>
      </div>
      </form>
</form>


        <p> </p>
        <p> .</p>
        <p> .</p>

@endsection