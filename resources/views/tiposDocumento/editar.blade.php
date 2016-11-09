@extends('template')

@section('title','Editar Tipo Documento')

@section('content')



<form method="POST" action="{{asset('tiposDocumento')}}{{'/'.$tipoDocumento->id}}">
	{{ csrf_field()}}

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Editar Tipo Documento </p></h2><br>

      <div class="form-group">
		    <label for="nomTipo"> Nombre del Tipo de Documento: </label>
		    <div class="input-group">
						<span class="input-group-addon" id="basic-addon1">
							<span class="glyphicon glyphicon-file" aria-hidden="true"></span>
						</span>
		    	<input type="text" class="form-control"  name="nomTipo" id="nomTipo" required="" value="{{$tipoDocumento->nombre }}">
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="descripcion"> Descripción: </label>
        		<input class="form-control"  name="descripcion" id="descripcion" value="{{$tipoDocumento->descripcion}}">
      	  </div>

		  <div class="text-center">
				<button type="submit" class="btn btn-primary btn-lg" value="Submit">Guardar Cambios</button>
		  </div>

		</div>
	</div>

</form>

@endsection
