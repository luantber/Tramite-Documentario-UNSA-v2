@extends('template')
@section('title','Tipos de Documento')
@section('content')
	
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="text-center">
            <h3 class="panel-title">Tipo de Documento: {{$tipoDocumento->nombre}}</h3>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
           
            <div class=" col-md-12 col-lg-12 "> 
              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>Nombre de tipo documento: </td>
                    <td>{{$tipoDocumento->nombre}}</td>
                  </tr>
                  <tr>
                    <td>Descripción: </td>
                    <td>{{$tipoDocumento->descripcion}}</td>
                  </tr>                     
                </tbody>
              </table>

            </div>
          </div>
        </div>

        	<div class="panel-footer">
				<a href="{{asset('tiposDocumento')}}{{'/'.$tipoDocumento->id.'/editar'}}" data-original-title="edit" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
	            <span class="pull-right">
	                <!--<a href="{{('')}}" data-original-title="remove" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>-->
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-remove"></i></button>

                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">
                            Eliminar</h4>
                          </div>
                          <div class="modal-body">
                            <p>¿Está seguro que quiere eliminar este tipo de documento?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" class="pull-left" data-dismiss="modal">No</button>
                            <a href="{{asset('tiposDocumento/'.$tipoDocumento->id.'/eliminar')}}" data-original-title="remove" data-toggle="tooltip" type="button" class="btn btn-primary">Sí</a>
                          </div>
                        </div>
                      </div>
                    </div>

                </span>	            

            </div>
      </div>

</div>

@endsection