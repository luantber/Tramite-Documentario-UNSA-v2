@extends('template')

@section('title','Ver Movimientos')

@section('content')


<h2><p class="text-center">  Ver Movimientos </p></h2>
	<br>

	<div class="container">

	  <table class="table table-hover">
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>From: </th>
	        <th>To: </th>
	        <th>Comentarios: </th>
	        <th>Fecha: </th>
	      </tr>
	    </thead>

	    <tbody>

	    	<tr>
	    		@foreach($movimientos as $movimiento)
					<td>{{$movimiento->id}}</td>
			        <td>{{$movimiento->areaRemitente->nombre}}</td>
			        <td>{{$movimiento->areaDestino->nombre}}</td>
			        <td>{{$movimiento->comentario}}</td>
			        <td>{{$movimiento->created_at}}</td>
		        @endforeach
		    </tr>

	    </tbody>
	  </table>
	</div>

@endsection