@extends('template')

@section('title','Estadisticas por Empleado')

@section('content')

  		<div id="canvas-holder">
		</div>
		<form action="{{asset('estadisticas/empleadoConsultar')}}">
			<div class="form-group">
			    <label for="idArea"> Escoge el empleado </label>
			    	<select type="text" class="form-control" placeholder="Selecciona el Area" name="id_persona" id="id_persona">
						@foreach($info as $i)
		                    <option value="{{$i->id_persona}}">{{$i->nombre}} {{$i->apellido}}</option>
		                @endforeach
					</select>
				<br>
				<button type="submit" class="btn btn-default" value="Submit">Consultar</button>
			</div>
		</form>



@endsection