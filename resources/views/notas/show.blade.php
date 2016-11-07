@extends('template')

@section('title','Ver Nota')

@section('content')

  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

          <div class="panel panel-info">
            <div class="panel-body">
              <div class="row">

                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre: </td>
                        <td>{{ $notas->nombre }}</td>
                      </tr>
                      <tr>
                        <td>Nota: </td>
                        <td>{{ $notas->descripcion}}</td>
                      </tr>
                      <tr>
                        <td>Privacidad: </td>
                        @if($notas->personal == '1')
                          <td>Personal</td>
                        @else
                          <td>Público</td>
                        @endif

                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a href="{{asset('notas')}}{{'/'.$notas->id.'/editar'}}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                        <span class="pull-right">
                            <a href="{{asset('notas')}}{{'/'.$notas->id.'/eliminar'}}" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>


          </div>
        </div>
@endsection
