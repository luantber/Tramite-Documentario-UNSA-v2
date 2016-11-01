@extends('template')

@section('title','Eliminar Cargo')

@section('content')

<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Eliminar Cargo </p></h2>

		<br><br>
			<form method="post" action="{{asset('cargos/eliminar')}}">

				{{ csrf_field()}}
					<div class="row">

						<div class="col-sm-12">
							<label for="nomCargo" >Nombre: </label>
							<div class="input-group">
									<span class="input-group-addon" id="basic-addon1">
										<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
									</span>
						  		<input class="form-control" type="text" name ="nombreCargo" id="nomCargo" value="{{ $eliminado->nombreCargo }}" disabled="">
							</div>
						</div>
					</div><br>

					<div class="row">
						<div class="col-sm-12">
							<label for="descripcion" >Descripción de cargo: </label>
						  		<input class="form-control" value="{{ $eliminado->descripcion }}"  name="descripcion" id="descripcion" disabled="">
						</div>
					</div><br><br>

					<div class="text-center">
						<button type="button" class="btn btn-info btn-lg" value="" data-toggle="modal" data-target="#Eliminar">Eliminar</button>
			    	</div>
<!--
					<div id="Eliminar" class="modal fade" role="dialog">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Eliminar</h4>
					      </div>
					      <div class="modal-body">
					        <p>¿Está seguro que desea eliminar este cargo?</p>
					      </div>
					      <div class="modal-footer">
					      	<button type="button" value="submit" class="btn btn-default" data-dismiss="modal">Sí</button>
					        <button type="button" value="" class="btn btn-default" data-dismiss="modal">No</button>
					      </div>
					    </div>
					  </div>
					</div>
-->


			    	<ul class="pager">
				        <li><a href="#">Cancelar</a></li>
				    </ul>
			</form>
		</div>

</div>

@endsection
