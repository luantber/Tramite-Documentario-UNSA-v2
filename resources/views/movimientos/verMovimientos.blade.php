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
	        <th>Expediente</th>
	        <th>Remitente</th>
	        <th>Destino</th>
	        <th>Estado</th>
	        <th>Persona</th>
	        <th>Fecha</th>
	      </tr>
	    </thead>

	    <tbody>

	    	<tr>
				<td>1</td>
				<td>6</td>
		        <td>Mesa de Partes</td>
		        <td>Logística</td>
		        <td>Rechazado</td>
		        <td>Jhon</td>
		        <td>30/10/16</td>
		    </tr>
		    <tr>
				<td>2</td>
				<td>4</td>
		        <td>Mesa de Partes</td>
		        <td>Logística</td>
		        <td>Rechazado</td>
		        <td>Jhon</td>
		        <td>30/10/16</td>
		    </tr>
		    <tr>
				<td>3</td>
				<td>9</td>
		        <td>Mesa de Partes</td>
		        <td>Logística</td>
		        <td>Rechazado</td>
		        <td>Jhon</td>
		        <td>30/10/16</td>
		    </tr>

	    </tbody>
	  </table>
	</div>

@endsection