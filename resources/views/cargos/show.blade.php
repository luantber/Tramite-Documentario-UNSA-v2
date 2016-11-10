@extends('template')

@section('title','Mostrar Cargo')

@section('content')
	
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="text-center">
            <h3 class="panel-title">Cargo: {{ $cargo->nombreCargo }}</h3>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
           
            <div class=" col-md-12 col-lg-12 "> 
              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>Nombre de Cargo: </td>
                    <td>{{$cargo->nombreCargo}}</td>
                  </tr>
                  <tr>
                    <td>Descripción: </td>
                    <td>{{$cargo->descripcion}}</td>
                  </tr>                     
                  <tr>
                    <td>Permisos: </td>
                    <td> </td>
                  </tr>
                  
                  <?php  
                    if($cargo->permisoscargo)
                    {
                      $permisos=["Estadísticas","Mis Tramites","Panel de Tramites","Agenda","Areas","Cargos","Usuarios","Empleados","Tramites"];
                      $values=array_values($cargo->permisoscargo->toArray());
                      array_shift($values);                      
                    }
                    else
                    {
                      $permisos=["No tiene"];
                      $values=[1];
                    }

                   ?>

                  
                  @for($i=0;$i<count($values);$i++)
                    @if($values[$i]==1)

                      <tr>
                        <td></td>
                        <td>{{$permisos[$i]}}</td>
                      </tr>
                    @endif

                  @endfor


                </tbody>
              </table>
            </div>
          </div>
        </div>

        	<div class="panel-footer">
				<a href="{{asset('cargos')}}{{'/'.$cargo->id.'/editar'}}" data-original-title="editCargo" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
	            <span class="pull-right">
	                <a href="{{asset('cargos')}}{{'/'.$cargo->id.'/eliminar'}}" data-original-title="removeCargo" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
	            </span>
            </div>
      </div>

    </div>

@endsection

