@extends('template')

@section('title','Estadisticas por Area')

@section('content')

  		<div id="canvas-holder">
		</div>
		<form action="{{asset('estadisticas/areaConsultar')}}">
			<div class="form-group">
			    <label for="idArea"> Escoge el área </label>
			    	<select type="text" class="form-control" placeholder="Selecciona el Area" name="idArea" id="idArea">
						@foreach($info as $i)
		                    <option value="{{$i->id}}">"{{$i->nombre}}"</option>
		                @endforeach
					</select>
				<br>
				<button type="submit" class="btn btn-default" value="Submit">Consultar</button>
			</div>
		</form>



@endsection