@extends('template')

@section('title','Ver Personas')

@section('content')

<h2><p class="text-center">  Ver Todos </p></h2>
	<br>
	<div class="container">
	  <table class="table table-striped">
	  <thead>
	      <tr>
	        <th>ID</th>
	        <th>DNI</th>
	        <th>Nombre</th>
	        <th>Apellido</th>
	        <th><span class="glyphicon glyphicon-user"></span> Ver</th>
	        <th><span class="glyphicon glyphicon-pencil"></span> Editar</th>
	      </tr>
	    </thead>
	  
	    <tbody>      
	      <tr>
	        <td>1</td>
	        <td>11223344</td>
	        <td>John</td>
	        <td>Doe</td>
	        <th><span class="glyphicon glyphicon-user"></span> </th>
	        <td><span class="glyphicon glyphicon-pencil"></span> </td>
	      </tr>
	      <tr>
	      	<td>2</td>
	        <td>88664422</td>
	        <td>Mary</td>
	        <td>Moe</td>
	        <th><span class="glyphicon glyphicon-user"></span> </th>
	        <td><span class="glyphicon glyphicon-pencil"></span></td>
	      </tr>
	      <tr>
	        <td>3</td>
	        <td>55544422</td>
	        <td>July</td>
	        <td>Dooley</td>
	        <th><span class="glyphicon glyphicon-user"></span> </th>
	        <td><span class="glyphicon glyphicon-pencil"></span></td>
	      </tr>
	    </tbody>

	  </table>
	</div>

@endsection