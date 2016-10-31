@extends('template')

@section('title','Mostrar Cargo')

@section('content')
	
<h1>Hagan la vista de show :3 mostrar cargo</h1>
{{$cargo->nombreCargo}}
<p>{{$cargo->descripcion}}</p>


<h3 class="row"> Cargo :  {{ $cargo->nombre }}</h3>

	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

			<h2><p class="text-center"> Cargo: </p></h2>
				<br><br>

			<div class="row">
				<div class="col-sm-12">
					<label for="nomcargo" >Nombre de cargo: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
							</span>
				  		<input class="form-control" type="text" name ="nombreCargo" id="nomcargo" value="{$cargo->nombre}">
					</div>
				</div>
			</div><br>
			<div class="row">
			  <div class="col-sm-12">
			  		<label for="descrip" >Descripción: </label>
				    <input class="form-control" type="text" name="descrip" id="descrip" name="descripcion" id="descripcion" value="{$cargo->descripcion}">
			  </div>
			</div><br>

			<div class="row">
				<a href="{{asset('cargo')}}{{'/'.$cargo->id.'/editar'}}" data-original-title="editCargo" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar </a>
	            <span class="pull-right">
	                <a data-original-title="removeCargo" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i> Eliminar </a>
	            </span>
	        </div>

		</div>
	</div>

</form>

@endsection

