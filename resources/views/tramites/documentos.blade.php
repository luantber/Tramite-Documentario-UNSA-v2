@extends('template')

@section('title','Documentos')

@section('content')


<div class="row">
	<br><br>
	<h3 class="text-center"> Documentos</h3><br>
		<table class="table table-hover">
		    <thead>
		      <tr>
		        <th><span class="glyphicon glyphicon-folder-open"></span></th>
		        <th>Nro. expediente</th>
		        <th>Nombre</th>
		        <th>Fecha de entrega</th>
		        <th>Área a delegar</th>
		        <th>Documento</th>
		        <th><span class="glyphicon glyphicon-envelope"></span> Abrir</th>
		      </tr>
		    </thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>12</td>
					<td>Solicitud:Aumento</td>
			        <td>01/11/16 </td>
			        <td>Gerencia</td>
			        <td> Solicitud </td>
			        <th><span class="glyphicon glyphicon-envelope"></span> </th>
			    </tr>
			    <tr>
			    	<td>1</td>
					<td>17</td>
					<td>Petición:Jubilación :v</td>
			        <td>01/11/16 </td>
			        <td>Informática</td>
			        <td> Petición</td>
			        <th><span class="glyphicon glyphicon-envelope"></span> </th>
			    </tr>
			    <tr>
			    	<td>1</td>
					<td>21</td>
					<td>Queja:Atraso</td>
			        <td>01/11/16 </td>
			        <td>Gerencia</td>
			        <td> Queja</td>
			        <th><span class="glyphicon glyphicon-envelope"></span> </th>
			    </tr>

			</tbody>
		</table>

</div>

@endsection