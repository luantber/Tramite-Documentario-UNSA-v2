@extends('template')

@section('title','Mostrar Area')

@section('content')
	
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="text-center">
            <h3 class="panel-title">Area: {{ $area->nombre}}</h3>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
           
            <div class=" col-md-12 col-lg-12 "> 
              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>Nombre de Area: </td>
                    <td>{{$area->nombre}}</td>
                  </tr>
                  <tr>
                    <td>Nombre de Área Padre: </td>
                    <td>{{$area->padre->nombre}}</td>
                  </tr>      
                  <tr>
                    <td>Jefe de Área: </td>
                    <td>{{$area->jefe->user->apellido}} {{$area->jefe->user->nombre}}</td>
                  </tr>
                  <tr>
                    <td>Descripción: </td>
                    <td>{{$area->descripcion}}</td>
                  </tr>                    
                </tbody>
              </table>

            </div>
          </div>
        </div>

        	<div class="panel-footer">
				<a href="{{asset('areas')}}{{'/'.$area->id.'/editar'}}" data-original-title="editArea" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
	            <span class="pull-right">
	                <a href="{{asset('areas')}}{{'/'.$area->id.'/eliminar'}}" data-original-title="removeArea" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
	            </span>
            </div>
      </div>

    </div>

@endsection