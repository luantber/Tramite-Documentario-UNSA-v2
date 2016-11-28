@extends('template')

@section('title','Cambiar estado')

@section('content')

<form method="post" action="{{asset('tramites')}}{{'/'.$tramite->id.'/cambiarEstado'}}" enctype="multipart/form-data">
		{{ csrf_field()}}

	<h2><p class="text-center">  Cambiar estado </p></h2><br><br>

	<div class="col-md-1">
	</div>

	<div class="col-md-10">
		<div class="col-md-8">	
			<div class="row">
				<label for="numExp" >Número de expediente: </label>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">
							<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
						</span>
			  				<input class="form-control" type="text" name ="numExp" id="numExp" required="true" value="{{$tramite->nro_expediente}}">
					</div>
			</div><br>
			<div class="row">
				<label for="estadoInicial" >Estado inicial: </label>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1">
							<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
						</span>
			  				<input class="form-control" type="text" name ="estadoInicial" id="estadoInicial"required="true" value="{{$tramite->estado->nombre}}">
					</div>
			</div><br>
			<div class="row">
				<label for="nuevoEstado" >Nuevo estado: </label>
				    <select name="nuevoEstado" required="true" type="text" class="form-control" id="nuevoEstado">
			          <option value="" >Seleccionar nuevo estado</option>
			          	@foreach($estados as $estado)
			          		<option value="{{$estado->id}}"> {{$estado->nombre}}</option>
			          	@endforeach
      
			        </select>
			</div><br>
		</div>

		<div class="col-md-4">
            <label for="comentario" >Comentario: </label>
	            <div class="">
	              <textarea type="text" class="form-control" rows="9" name="comentario" id="comentario"> </textarea>
	            </div><br>

	        <label>
	        <div>
	        	<button class="btn btn-lg btn-primary" type="submit" value="Submit"> 
          Aceptar </button> 
	        </div>
            </label>
    	</div>

    </div>

</form>

@endsection