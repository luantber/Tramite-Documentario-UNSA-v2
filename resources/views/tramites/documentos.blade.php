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
		        <th>Tipo de documento</th>
		        <th>Nombre de documento</th>
		        <th>Fecha de entrega</th>
		        <th>Área a delegar</th>
		        <th><span class="glyphicon glyphicon-envelope"></span> Abrir</th>
		        <th><span class="glyphicon glyphicon-edit"></span> Editar</th>
		        <th><span class="glyphicon glyphicon-remove"></span> Eliminar</th>
		      </tr>
		    </thead>
			<tbody>
				<tr>
					@foreach($documentos as $documento)
					<tr>
						<td>{{$documento->id}}</td>
						<td>{{$documento->tramite->nro_expediente}}</td>
						<td>{{$documento->tipoDocumento->nombre}}</td>
						<td>{{$documento->nombre}}</td>
				        <td>{{$documento->created_at}} </td>
				        <td>{{$documento->tramite->area->nombre}}</td>

				        <th><a value="" href="" type="button" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-envelope"></i></a></th>
				        <th><a value="" href="{{'documentos/'.$documento->id.'/editar'}}" type="button" class="btn btn-xs btn-warning btn-info" ><i class="glyphicon glyphicon-edit"></i></a></th>
				        <th><a value="" href="{{'documentos/'.$documento->id.'/eliminar'}}" type="button" class="btn btn-xs btn-danger btn-info" ><i class="glyphicon glyphicon-remove"></i></a></th>
				     </tr>
					@endforeach
			    </tr>

			</tbody>
		</table>

</div>

@endsection