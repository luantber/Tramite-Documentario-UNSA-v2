@extends('template')

@section('title','Editar Area')

@section('content')

<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  <b>Editar Área:</b> {{$area->nombre}} </p></h2>

		<br><br>
		<form method="post" id="formulario" action="{{ asset('areas')}}{{'/'.$area->id}}">
		{{ csrf_field()}}

      		<div class="row">

      			<div class="col-sm-12">
					<label for="nomArea"> Nombre del Área: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
							</span>
			    		<input type="text" class="form-control" name="nomArea" id="nomArea" value="{{$area->nombre}}">
		  			</div>
		  		</div>
		  	</div><br>

		  	<div class="row">
		  		<div class="col-sm-12">
				    <label for="nomAreaPad"> Nombre del Área Padre: </label>
				    	<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
							</span>
					    	<select type="text" class="form-control" name="nomAreaPad" id="nomAreaPad" required="">

					    	@if($area->area_id == 0)
					    		<option selected="select" value="0">No Area</option>
					    	@else
					    		<option value="0">No Area</option>
					    	@endif


					


							@foreach($areas as $are)
							  
					    		@if($are->id == $area->area_id)
								<option value="{{$are->id}}" selected="select">{{$are->nombre}}</option>
								@else
						
								<option value="{{$are->id}}">{{$are->nombre}}</option>
							  	@endif
							@endforeach
							</select>
					</div>
				</div>	
		  	</div><br>
      	  
		  <div class="form-group">
		    <label for="jefArea"> Jefe del Área: </label>
		    	<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
							</span>
							
					    	<select type="text" class="form-control" name="jefe" id="nomJefe" >
					    		<option value="0">No Jefe</option>
								@foreach($empleados as $e)

					    			@if($e->id  == $area->jefe_id)
										<option selected="select" value="{{$e->id}}">{{$e->user->nombre}} {{ $e->user->apellido}}</option>
								 	@else
								 		<option  value="{{$e->id}}">{{$e->user->nombre}} {{ $e->user->apellido}}</option>
								 	@endif
								@endforeach
									
							</select>
					</div>
		  </div>

		  <div class="form-group">
			    <label for="Descripcion"> Descripción: </label>
	        	<input class="form-control" value="{{ $area->descripcion }}"  name="descripcion" id="descripcion" required="">
	      </div>

		    <div class="text-center">
	      		<button type="submit" value="Submit" class="btn btn-primary">Guardar</button>
	    	</div>

	    	<ul class="pager">
		        <li><a href="{{asset('areas')}}{{'/'.$area->id}}">Cancelar</a></li>
		    </ul>

		</div>

		</form>

		</div>
	</div>

<script type="text/javascript">
	

</script>
@endsection
