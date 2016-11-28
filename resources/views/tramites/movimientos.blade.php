@extends('template')

@section('title','Ver Movimientos')

@section('content')

<h1><p class="text-center">  Ver Movimientos </p></h1>
	<br>

	<div class="row">
	  <div class="col-md-1"></div><div class="col-md-2"></div><div class="col-md-2"></div>
	  <div class="col-md-2">
		<table class="table table-condensed ">
		  <thead>
			  <tr>
			  	<th class="text-center"> Color </th>
			  </tr>
		  </thead>
		  <tbody>
		  	<tr class="success text-center"> <td>Cambio de area</td> </tr>
		  	<tr class="info text-center"> <td>Cambio de empleado</td> </tr>
		  	<tr class="danger text-center"> <td>Cambio de estado</td> </tr>
		  </tbody>
		</table>
	  </div>
	</div>
	<br>

	<div class="container">

	  <table class="table table-hover">
	    <thead>
	      <tr>
	        <th>ID</th>
	        <th>From: </th>
	        <th>To: </th>
	        <th>Remitente: </th>
	        <th>Enviado a : </th>
	        <th>Estado de trámite: </th>
	        <th>Comentarios: </th>
	        <th>Fecha: </th>
	      </tr>
	    </thead>
	    @foreach($movimientos as $movimiento)
	    <tbody>
	    	@if($movimiento->areaRemitente->id != $movimiento->areaDestino->id)
	    		<tr class="success">
	    	@elseif($movimiento->empleadoRemitente->user->id != $movimiento->empleadoDestino->user->id)
	    		<tr class="info">
	    	@elseif($movimiento->estadoOrigen->id != $movimiento->estadoFinal->id)
	    		<tr class="danger">
	    	@else
	    		<tr>
	    	@endif
				<td>{{$movimiento->id}}</td>
		        <td>{{$movimiento->areaRemitente->nombre}}</td>
		        <td>{{$movimiento->areaDestino->nombre}}</td>
		        <td>{{$movimiento->empleadoRemitente->user->nombre}} {{$movimiento->empleadoRemitente->user->apellido}}</td>
		        <td>{{$movimiento->empleadoDestino->user->nombre}} {{$movimiento->empleadoDestino->user->apellido}}</td>
		        <td>{{$movimiento->estadoFinal->nombre}}</td>
		        <td>{{$movimiento->comentario}}</td>
		        <td>{{$movimiento->created_at}}</td>
		    </tr>
	    </tbody>
	    @endforeach
	  </table>
	</div>

@endsection