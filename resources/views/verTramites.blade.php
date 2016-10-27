@extends('template')

@section('title','Ver Trámites')

@section('content')

<h2><p class="text-center">  Ver Trámites </p></h2>
	<br>

	
	<div class="container">

		<ul class="nav nav-tabs">
		  <li role="presentation" class="active"><a href="#">Todos</a></li>
		  <li role="presentation"><a href="#">En Proceso</a></li>
		  <li role="presentation"><a href="#">Finalizados</a></li>
		  <li role="presentation"><a href="#">Rechazados</a></li>
		</ul>
		<br>
		<table class="table table-hover">
		    <thead>
		      <tr>
		        <th><span class="glyphicon glyphicon-folder-open"></span></th>
		        <th>Asunto</th>
		        <th>Datos</th>
		        <th>Fecha de Inicio</th>
		        <th>Fecha de Finalización</th>
		        <th><span class="glyphicon glyphicon-envelope"></span> </th>
		      </tr>
		    </thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Solicitud</td>
			        <td>
			        	De: Paul <br>
			        	Para: Administración <br>
			        	Estado: Recibido <br>
			        </td>
			        <td>01/10/16</td>
			        <td>30/10/16</td>
			        <th><span class="glyphicon glyphicon-envelope"></span> </th>
			    </tr>
			    <tr>
			    	<td>2</td>
			    	<td>Solicitud</td>
			        <td>
			        	De: Carolina <br>
			        	Para: Administración <br>
			        	Estado: Recibido <br>
			        </td>
			        <td>01/10/16</td>
			        <td>30/10/16</td>
			        <th><span class="glyphicon glyphicon-envelope"></span> </th>
			    </tr>
			    <tr>
			    	<td>3</td>
			    	<td>Solicitud</td>
			        <td>
			        	De: Jose <br>
			        	Para: Administración <br>
			        	Estado: Recibido <br>
			        </td>
			        <td>01/10/16</td>
			        <td>30/10/16</td>
			        <th><span class="glyphicon glyphicon-envelope"></span> </th>
			    </tr>
				
			</tbody>
		</table>
	</div>


@endsection