@extends('template')

@section('title','Reenviar correo')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<h2><p>Reenviar Correos</p></h2>
		Por favor, ingrese su correo.
		<form action="{{url('reenviar')}}" method="POST">
			{{csrf_field()}}
			<div class="row">
				<div class="col-sm-12">
					<label for="contraseña" >Correo: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
							</span>
				  		<input class="form-control" type="email" name ="email" id="email" >
					</div>
				</div>
			</div><br>
			<div class="form-group">
				<div class="text-center">
					<button class="btn btn-lg" type="submit" value="Submit">Reenviar </button> 
				</div>
			</div>
		</form>
	</div>
</div>

@endsection