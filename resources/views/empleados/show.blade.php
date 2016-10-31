
 @extends('template')

@section('title','Perfil Empleado')

@section('content')

{{ $empleado->user->id }}
	
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
  <input class="form-control" type="string"  value="{{$empleado->user->nombre}}" disabled="" required="true">
 

  </div>

@endsection