@extends('template')

@section('title','Subir documento')

@section('content')

<div class="row">

<form method="post" action="{{asset('tramites'.'/'.$tramite->id.'/subir')}}" enctype="multipart/form-data">
		{{ csrf_field()}}

	<h2><p class="text-center">  Subir documentos </p></h2><br><br>

	<div class="col-md-1">
	</div>

	<div class="col-md-10">

		<div class="col-md-8">	

			<div class="row">
				<div class="col-sm-6">
					<label for="numExp" >Número de expediente: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
							</span>
				  		<input class="form-control" type="text" name ="numExp" id="numExp" placeholder="Ingrese número de expediente" required="true" value="{{$tramite->nro_expediente}}" disabled="">
					</div>
				</div>
			  <div class="col-sm-6">
			  		<label for="tipoDoc" >Tipo de documentos: </label>
				    <select name="tipoDoc" type="text" class="form-control" id="tipoDoc">
			          <option value="" >Seleccionar tipo de documento</option>
			          		@foreach($tiposDocumentos as $tipoDocumento)
			          			@if($tipoDocumento->id != 1)
			                    <option value='{{$tipoDocumento->id}}'>{{$tipoDocumento->nombre}}</option>
			                    @endif
			                @endforeach            
			        </select>

			  </div>
			</div><br>

			<div class="row">
				<div class="col-sm-12">
		          <label for="nomDoc" >Nombre de documento: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span>
							</span>
				  		<input class="form-control" type="text" name ="nomDoc" id="nomDoc" placeholder="Ingrese nombre de documento" required="true">
					</div>
		        </div>
		    </div> <br>

			<div class="row">
				<div class="col-sm-12">
					<!--<label class="control-label">Select File</label>-->
					<label for="tipoDoc" >Tipo de documentos: </label>
					<input id="archivo" name="archivo" type="file" class="file" data-show-upload="false" data-show-caption="true"> 
			    </div><br>
			</div><br>

		    <div class="row">
					<div class="text-center">
					<button class="btn btn-lg " type="submit" value="Submit"> 
					Adjuntar documentos</button>
					</div>
		    </div><br> <br>
		</div>

		<div class="col-md-4">
		
			<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>Documentos</th>
			      </tr>
			    </thead>

			    <tbody>
			    	@foreach($documentos as $docu)
			    	<tr>
						<td>{{$docu->nombre}}</td>
				    </tr>
				   	@endforeach
			    </tbody>
			  </table>


		</div>

	</div>

	<div class="col-md-1">
	</div>

	</form>
</div>

	<form method="get" action="{{asset('tramites')}}">
		{{ csrf_field()}}
		<div class="row">
				<div class="col-md-11">
					<div class="text-right">
						<button class="btn btn-success btn-lg" type="submit" value="Submit"> Finalizar</button>
					</div>
				</div>

				<div class="col-md-1"></div>
		</div>
		<br><br>
	</form>

@endsection