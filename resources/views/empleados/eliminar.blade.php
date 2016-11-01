@extends('template')

@section('title','Eliminar Empleado')

@section('content')



<form method="post" action="{{asset('empleados/eliminado')}}">

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Perfil de:  {{ $eliminado->user->nombre }}</h3>
            </div>

            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{asset('imagenes/perfil.jpg')}}" class="img-circle img-responsive"> </div>
               
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre: </td>
                        <td>{{ $eliminado->user->nombre }}</td>
                      </tr>
                      <tr>
                        <td>Apellidos: </td>
                        <td>{{ $eliminado->user->apellido}}</td>
                      </tr>
                      <tr>
                        <td>DNI:</td>
                        <td>{{ $eliminado->user->dni }}</td>
                      </tr>
                      <tr>
                        <td>Cargo:</td>
                        <td>{{ $eliminado-> cargo->nombreCargo }}</td>
                      </tr>
                      <tr>
                        <td>Area:</td>
                        <td>{{ $eliminado-> area -> nombre }}</td>
                      </tr>
                      <tr>
                        <td> e-mail: </td>
                        <td>{{$eliminado -> user-> email}}</td>
                      </tr>
                      <tr>
                        <td> Activo: </td>
                        <td>{{$eliminado -> user-> activo}}</td>
                      </tr>
                     
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
        </div>

      	<div class="text-center">
			<button type="button" class="btn btn-info btn-lg" type="submit" value="Submit" data-toggle="modal" data-target="#Eliminar">Eliminar</button>
		</div>

<!--
		<div id="Eliminar" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Eliminar</h4>
		      </div>
		      <div class="modal-body">
		        <p>¿Está seguro que desea eliminar este cargo?</p>
		      </div>
		      <div class="modal-footer">
		      	<button type="button" value="submit" class="btn btn-default" data-dismiss="modal">Sí</button>
		        <button type="button" value="" class="btn btn-default" data-dismiss="modal">No</button>
		      </div>
		    </div>
		  </div>
		</div>
-->


    	<ul class="pager">
	        <li><a href="#">Cancelar</a></li>
	    </ul>
	</div>

</form>


@endsection