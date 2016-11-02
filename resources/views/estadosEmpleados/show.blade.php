@extends('template')

@section('title','Mostrar Estado')

@section('content')
	
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="text-center">
            <h3 class="panel-title">Estado: {{$estado->nombre}}</h3>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
           
            <div class=" col-md-12 col-lg-12 "> 
              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>Nombre de Estado: </td>
                    <td>{{$estado->nombre}}</td>
                  </tr>
                  <tr>
                    <td>Descripción: </td>
                    <td>{{$estado->descripcion}}</td>
                  </tr>                     
                </tbody>
              </table>

            </div>
          </div>
        </div>

        	<div class="panel-footer">
				<a href="{{asset('estadosEmpleados')}}{{'/'.$estado->id.'/editar'}}" data-original-title="editCargo" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
	            <span class="pull-right">
	                <a href="{asset('estadosEmpleado')}{'/'.$estado->id.'/eliminar'}" data-original-title="removeCargo" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
	            </span>
            </div>
      </div>

    </div>

@endsection