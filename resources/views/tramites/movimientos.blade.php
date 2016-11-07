@extends('template')

@section('title','Ver Movimientos')

@section('content')

<h2><p class="text-center">  Ver Movimientos </p></h2>
	<br>

	<h3><p class="text-center"> Trámite: {} </p></h3>
	
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
				<td>1</td>
		        <td>Logística</td>
		        <td>area2</td>
		        <td>comentarios</td>
		        <td>30/10/16</td>
		    </tr>

	    </tbody>
	  </table>
	</div>

@endsection