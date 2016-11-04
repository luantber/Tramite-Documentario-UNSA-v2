@extends('template')

@section('title','Editar Area')

@section('content')

<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Editar Área </p></h2>

		<br><br>
		<form method="post" action="{{ asset('areas')}}{{'/'.$area->id}}">
		{{ csrf_field()}}

      		<div class="row">

      			<div class="col-sm-12">
					<label for="nomArea"> Nombre del Área: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
							</span>
			    		<input type="text" class="form-control"name="nomArea" id="nomArea" value="{{$area->nombre}}">
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
					    	<select type="text" class="form-control" name="nomAreaPad" id="nomAreaPad" >
								<option value="{{$area->area_id}}">{{$area->nombre}}</option>
								@foreach($areas as $are)
								  @if( $area->area_id != $are->id)	
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
						<select type="text" class="form-control" name="jefAreaPad" id="jefAreaPad" >
							<option value="0">Sin Padre</option>
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

@endsection
