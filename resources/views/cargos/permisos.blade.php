@extends('template')

@section('title','Permisos de cargo')

@section('content')

<div>
{{----}}
@if(isset($id_cargo) and isset($nombre))
<h2>Permisos</h2>
<p>Escoja las acciones a las que tendrá acceso el cargo de: {{$nombre}} </p>
	<form method="post" action="{{url('cargos/permisos')}}">
		{{csrf_field()}}
		<h2>{{$id_cargo}} </h2>
		<input type="hidden" name="cargoid" value="{{$id_cargo}}">

		<div class="table-responsive">

			<table class="table table-hover">
				<thead>
					<tr>
						<th>Permisos</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Áreas</td>
						<td><input type="checkbox" name="sep[]" value="areas"></td>
					</tr>
					<tr>
						<td>Cargos</td>
						<td><input type="checkbox" name="sep[]" value="cargos"></td>
					</tr>
					<tr>
						<td>Usuarios</td>
						<td><input type="checkbox" name="sep[]" value="usuarios"></td>
					</tr>
					<tr>
						<td>Empleados</td>
						<td><input type="checkbox" name="sep[]" value="empleados"></td>
					</tr>
					<tr>
						<td>Panel</td>
						<td><input type="checkbox" name="sep[]" value="panel"></td>
					</tr>
					<tr>
						<td>Tramites</td>
						<td><input type="checkbox" name="sep[]" value="tramites"></td>
					</tr>
				</tbody>				
			</table>
		</div>
		<div align="center">
			<button type="submit" class="btn btn-lg" value="Submit">Finalizar</button>			
		</div>

	</form>
@else
	<h2>Nada que ver aqui</h2>
@endif
</div>
@endsection