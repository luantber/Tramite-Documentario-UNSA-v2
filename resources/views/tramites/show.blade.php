@extends('template')

@section('title','Editar Trámite')

@section('content')

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
                          <td>{{$tramite->empleado->user->nombre}}</td>
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
                        <td>Aceptado:</td>
                        @if($tramite->aceptado==0)
                        <td>Aún no ha sido aceptado</td>
                        @else
                        <td>Aceptado</td>
                        @endif
                      </tr>
                      <tr>
                        <td>Estado de trámite:</td>
                        @if($tramite->estado==null)
                          <td>No tiene estado</td>
                        @else
                          <td>{{$tramite->estado->nombre}}</td>
                        @endif
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
                          <a href="{{asset('tramites')}}{{'/'.$tramite->id.'/'}}{{'movimientos'}}" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-th-list"></i> Ir a movimientos </a>
                        </td>
                      </tr>

                    @if(Auth::user()->isEmpleado())
                      
                      @if($tramite->empleado!=NULL)
                      @if(Auth::user()->id == $tramite->empleado->user->id)
                      <tr>
                        <td> Delegar: </td>
                        <td>
                          <a href="{{asset('tramites')}}{{'/'.$tramite->id.'/'}}{{'delegar'}}" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-arrow-right"></i>   Delegar </a>
                        </td>
                      </tr>
                      @endif
                      @endif

                      @if(Auth::user()->empleado->area->id == $tramite->area->id)
                      <tr>
                        <td> Documentos: </td>
                        <td>
                          <a href="{{asset('tramites')}}{{'/'.$tramite->id.'/'}}{{'documentos'}}" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-file"></i> Ir a documentos </a>
                        </td>
                      </tr> 
                      @endif
                      <tr>
                        <td> Subir documentos: </td>
                        <td>
                          <a href="{{asset('tramites')}}{{'/'.$tramite->id.'/'}}{{'subir'}}" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-arrow-right"></i>   Subir </a>
                        </td>
                      </tr>
                    @endif

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