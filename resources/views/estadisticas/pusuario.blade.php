@extends('template')

@section('title','Estadisticas por Usuario')

@section('content')
		<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
  		<div id="canvas-holder">
		</div>
		<form action="{{asset('estadisticas/usuarioConsultar')}}">
			<div class="form-group">
			    <label for="idArea"> Escoge el usuario </label>
			    	<select type="text" class="form-control" placeholder="Selecciona el Area" name="id_persona" id="id_persona">
						@foreach($info as $i)
		                    <option value="{{$i->id}}">{{$i->nombre}} {{$i->apellido}}</option>
		                @endforeach
					</select>
				<br>
				<button type="submit" class="btn btn-default" value="Submit">Consultar</button>
			</div>
		</form>
		<div id="estadistica1"></div>



@endsection