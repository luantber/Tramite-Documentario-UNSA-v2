@extends('template')

@section('title','Eliminar Empleado')

@section('content')



<form method="post" action="{{asset('empleados/eliminar')}}">
 {{ csrf_field()}}
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
  <input type="hidden" name="id" value="{{$eliminado->id}}">
   
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
                        <td> Estado: </td>
                        <td>{{$eliminado -> estado-> nombre}}</td>
                      </tr>
                     
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
        </div>

      <div class="text-center">
      <button type="submit" class="btn btn-info btn-lg" value="" data-toggle="modal" data-target="">Eliminar</button>
      </div>




    	<ul class="pager">
	        <li><a href="{{asset('empleados')}}{{'/'.$eliminado->id}}">Cancelar</a></li>
	    </ul>
	</div>

</form>


@endsection