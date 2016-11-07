
@extends('template')

@section('title','Editar Cargo')

@section('content')

<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Editar Cargo </p></h2>

		<br><br>
			<form method="post" action="{{asset('cargos')}}{{'/'.$cargo->id}}">

				{{ csrf_field()}}

					<div class="row">
						
						<div class="col-sm-12">
							<label for="nomCargo" >Nombre: </label>
							<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">
										<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
									</span>
						  		<input class="form-control" type="text" name ="nombreCargo" id="nomCargo" value="{{ $cargo->nombreCargo }}">
							</div>
						</div>
					</div><br>

					<div class="row">
						<div class="col-sm-12">
							<label for="descripcion" >Descripción de cargo: </label>
						  		<input class="form-control" value="{{ $cargo->descripcion }}"  name="descripcion" id="descripcion">
						</div>

					</div><br>
					<a href="{{url('cargos/'.$cargo->id.'/permisos')}}">Editar Permisos</a>
					<br>

					<div class="text-center">
			      		<button type="submit" value="Submit" class="btn btn-lg">Guardar</button>
			    	</div>

			    	<ul class="pager">
				        <li><a href="{{asset('cargos')}}{{'/'.$cargo->id}}">Cancelar</a></li>
				    </ul>
			</form>
		</div>

</div>

@endsection
