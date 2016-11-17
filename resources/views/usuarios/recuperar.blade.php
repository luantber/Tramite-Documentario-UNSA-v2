@extends('template')

@section('title','Recuperar Contraseña')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h2><p>Recuperar Contraseña</p></h2>
		Por favor, ingrese su email para enviarle un correo.
		<form action="{{url('verificar')}}" method="POST">
			{{csrf_field()}}
			<div class="row">
				<div class="col-sm-12">
					<label for="email" >Correo: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							</span>
				  		<input class="form-control" type="email" name ="email" id="email" >
					</div>
				</div>
			</div><br>

				<div class="form-group">
    				<div class="text-center">
						<button class="btn btn-lg" type="submit" value="Submit"> 
						Enviar Correo </button> 
					</div>
				</div>

		</form>
	</div>
</div>



@endsection