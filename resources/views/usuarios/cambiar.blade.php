@extends('template')

@section('title','Cambiar Contraseña')

@section('content')


<div class="row">
  	<div class="col-md-6 col-md-offset-3">
		<h2>Cambiar Contraseña</h2>
		<p>Ingrese su nueva contraseña</p>
		<form action="{{url('cambiar')}}" method="post">
			{{csrf_field()}}
			<div class="row">
				<div class="col-sm-6">
					<label for="email" >Email </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
							</span>
				  		<input class="form-control" type="text" name ="email" id="email" value="{{$email}}" readonly="true">
					</div>
				</div>
			</div><br>
			<div class="row">
					<div class="col-sm-12">
						<label for="contraseña" >Contraseña: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
								</span>
					  		<input class="form-control" type="password" name ="contraseña" id="contraseña" required="true">
						</div>
					</div>
				</div><br>

				<div class="row">
					<div class="col-sm-12">
						<label for="repcontraseña" >Repita la Contraseña: </label>
						<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">
									<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
								</span>
					  		<input class="form-control" type="password" name ="repcontraseña" id="repcontraseña" required="true">
						</div>
					</div>
				</div><br>

				<div class="alert alert-danger" role="alert" id="error" hidden>
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  Las contraseñas no coinciden
				</div>

				<div class="form-group">
    				<div class="text-center">
						<button class="btn btn-lg" type="submit" value="Submit"> 
						Guardar cambios </button> 
					</div>
				</div>

		</form>
	</div>
</div>

<script type="text/javascript">
	function validar()
	{
		var contr = document.getElementById("contraseña").value;
		var repcontr = document.getElementById("repcontraseña").value;
		if (contr!=repcontr)
		{
			document.getElementById("error").hidden=0;
			return false;
		}
		else
		{
			document.getElementById("error").hidden=1;
			return true;
		}		
	}

	
</script>

@endsection
