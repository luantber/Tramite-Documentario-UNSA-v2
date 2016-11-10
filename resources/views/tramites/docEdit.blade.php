@extends('template')

@section('title','Editar Documentos')

@section('content')

<script src="{{asset('js/fileinput.js')}}"></script>

<div class="row">
  	<div class="col-md-6 col-md-offset-3">
		<h2><p class="text-center">  Editar Documentos </p></h2>
		<br><br>
			<form method="post" action="{{asset('tramites/'.$documento->tramite->id.'/documentos/'.$documento->id.'/editar')}}"}}">

				{{ csrf_field()}}

					<div class="row">
						
						<div class="col-sm-12">
							<label for="nomDoc" >Nombre: </label>
							<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">
										<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
									</span>
						  		<input class="form-control" type="text" name ="nombreDoc" id="nomDoc" value="{{ $documento->nombre }}">
							</div>
						</div>
					</div><br>

					<div class="row">
						<div class="col-sm-12">
							<label for="tipoDoc" >Tipo de Documento: </label>
							<select name="tipoDoc" class="form-control" id="tipoDoc">
				              <option value="{{$documento->tipoDocumento->id}}" >{{$documento->tipoDocumento->nombre}}</option>
				              	@foreach($tiposDocumentos as $tipoDocumento)
				              		@if( $documento->tipoDocumento->id != $tipoDocumento->id)
				              			@if($tipoDocumento->id != 1)
				              			<option value="{{$tipoDocumento->id}}">{{$tipoDocumento->nombre}}
				              			</option>
				              			@endif
				              		@endif
				              	@endforeach
				            </select>
						</div>
					</div><br>

					<div class="row">
						<div class="col-sm-12">
							<label for="docu" >Archivo: </label>
							<input id="docu" name="docu" type="file" class="file" data-show-upload="false" data-show-caption="true"> 
					    </div><br>
					</div><br>

					<div class="text-center">
			      		<button type="submit" value="Submit" class="btn btn-lg">Guardar</button>
			    	</div>

			    	<ul class="pager">
				        <li><a href="{{'/'}}">Cancelar</a></li>
				    </ul>
			</form>
		</div>
</div>


@endsection