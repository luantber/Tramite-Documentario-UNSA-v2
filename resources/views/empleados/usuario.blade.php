@extends('template')

@section('title','Crear Empleado')

@section('content')

<form method="POST" action="EmpleadoUsu">
	{{ csrf_field()}}

	<!--<div class="container">-->
	<div class="row">
  		<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center"> Crear Empleado </p></h2>
		<br><br>
		<form>
			<div class="row">
				<div class="col-sm-6">
					<label for="DNI">DNI: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
							</span>
					    <input class="form-control" type="text" name ="dni" id="DNI" placeholder="Ingrese DNI">
					</div>
				</div>

			<div class=" row">
			  <div class="col-sm-12">
			  	<label for="area">Área: </label>
				    <!--<select name="area" class="form-control" id="area">
			          <option value="" >Seleccionar área</option>
			        </select>-->
			        <input class="form-control" type="text" name ="areaEmpleado" id="area" placeholder="Ingresar área">
			  </div>
			</div><br>

			<div class=" row">
			  <div class="col-sm-12">
			    <label for="cargo">Cargo: </label>
				  	<!--<select name="cargoEmpleado" class="form-control" id="cargo">
			          <option value="" >Seleccionar área</option>
			        </select>-->
			        <input class="form-control" type="text" name ="cargoEmpleado" id="cargo" placeholder="Ingresar cargo">
			  </div>
			</div><br>

			<div class="row">
				<div class="col-sm-6">
					<label for="activo" >Activo: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</span>
					    <input class="form-control" type="text" name ="activoEmpleado" id="activo" placeholder="¿Empleado activo?">  
					</div>
				</div>

			</div><br><br>

			<button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">Crear nuevo empleado</button> 
		
		</form>
		</div>
	</div>
</form>
@endsection