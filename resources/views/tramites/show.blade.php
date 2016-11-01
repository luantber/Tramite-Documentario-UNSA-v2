@extends('template')

@section('title','Editar Trámite')

@section('content')


<!--
<form method="POST" onsubmit="return validar()" action="{{asset('tramites')}}{{'/'.$tramite->id.'/editar'}}"> 
    {{ csrf_field()}}

    <form class="form-horizontal container" enctype="multipart/form-data">

      <h2><p class="text-center">  Mostrar Trámite </p></h2>
      <br>

        <div class="col-sm-2"></div>       
        <div class="col-sm-8">
        <div class="row">
            <label for="dni" class="col-sm-2 control-label"> DNI </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="dni" id="dni" required="true" value="{{$tramite->persona->dni}}" disabled="">
            </div>
            <p id="noingreso"></p>
        </div><br>

        <div class="row">
            <label for="nombre" class="col-sm-2 control-label"> Nombre </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nombre" id="nombre" required="true" value="{{$tramite->persona->nombre}} {{$tramite->persona->apellido}}" disabled="">
            </div>
        </div><br>

        <div class="row">
          <label for="destino" class="col-sm-2 control-label" >Área a delegar</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="dni" id="dni" required="true" value="{{$tramite->area->nombre}}" disabled="">
          </div>
        </div><br>

        <div class="row">
          <label for="tipo" class="col-sm-2 control-label" >Tipo de Trámite</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name="dni" id="dni" required="true" value="{{$tramite->tipoTramite->nombre}}" disabled="">
          </div>
        </div><br>

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

        </div>
      </form>
</form> -->

<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <div class="text-center">
                <h3 class="panel-title">Mostrar Trámite</h3>
              </div>
            </div>
            <div class="panel-body">
              <div class="row">
               
                <div class=" col-md-12 col-lg-12 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>DNI: </td>
                        <td>{{$tramite->persona->dni}}</td>
                      </tr>
                      <tr>
                        <td>Nombre: </td>
                        <td>{{$tramite->persona->nombre}}</td>
                      </tr>
                      <tr>
                        <td>Apellidos: </td>
                        <td>{{$tramite->persona->apellido}}</td>
                      </tr>
                      <tr>
                        <td>Persona a cargo: </td>
                        @if($tramite->empleado == NULL)
                          <td>Sin encargado</td>
                        @else
                          <td>{{$tramite->empleado}}</td>
                        @endif
                      </tr>
                      <tr>
                        <td>Número de expediente: </td>
                        <td>{{$tramite->nro_expediente}}</td>
                      </tr>
                      <tr>
                        <td>Área a delegar:</td>
                        <td>{{$tramite->area->nombre}}</td>
                      </tr>
                      <tr>
                        <td>Tipo de trámite:</td>
                        <td>{{$tramite->tipoTramite->nombre}}</td>
                      </tr>
                      <tr>
                        <td> Prioridad: </td>
                        @if($tramite->prioridad == 1)
                          <td>Urgente</td>
                        @elseif($tramite->prioridad == 2)
                          <td>Alta</td>
                        @elseif ($tramite->prioridad == 3)
                          <td>Normal</td>
                        @endif
                      </tr>
                      <tr>
                        <td> Asunto: </td>
                        <td>{{$tramite->asunto}}</td>
                      </tr>
                      <tr>
                        <td> Movimientos: </td>
                        <td>
                          <a href="{{asset('tramites')}}{{'/'.$tramite->id.'/'}}" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-th-list"></i> Ir a movimientos </a>
                        </td>
                      </tr>
                     
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a href="{{asset('tramites')}}{{'/'.$tramite->id.'/editar'}}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                        <span class="pull-right">
                            <a href="{{asset('tramites')}}{{'/'.$tramite->id.'/eliminar'}}" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>


          </div>
        </div>


@endsection