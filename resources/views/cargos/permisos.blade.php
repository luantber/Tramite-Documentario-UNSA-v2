@extends('template')

@section('title','Permisos de cargo')

@section('content')

<div>
{{----}}
@if(isset($id_cargo) and isset($nombre))
<h2>Permisos</h2>
@if ($permisos===NULL)
	<p>Escoja las acciones a las que tendrá acceso el cargo de: {{$nombre}} </p>
@else
	<p>Escoja las acciones que cambiará el acceso que tendrá el cargo de: {{$nombre}} </p>
@endif
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
					<?php

                    $nombres=["Estadisticas","Mis Tramites","Panel","Agenda","Áreas","Cargos","Usuarios","Empleados","Tramites"];

                    if($permisos)
                    {                   
						$ar=$permisos->toArray();
						$campos=array_keys($ar);
						$valores=array_values($ar);
						array_shift($valores);
						array_shift($campos);	
                    }
                    else
                    {
                    	array_shift($columnas);
                    }
					?>

					@if ($permisos===NULL)
						<input type="hidden" name="los_tiene" value="0">
						<!--
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
						</tr>-->
						@for($i=0;$i<count($columnas);$i++)
							<tr>
								<td>{{$nombres[$i]}}</td>
								<td><input type="checkbox" name="sep[]" value="{{$columnas[$i]}}"></td>
							</tr>
							
						@endfor

					@else
						<input type="hidden" name="los_tiene" value="1">
						

						@for($i=0;$i<count($valores);$i++)
							@if($valores[$i]==1)
								<tr>
									<td>{{$nombres[$i]}}</td>
									<td><input type="checkbox" name="sep[]" value="{{$campos[$i]}}" checked></td>
								</tr>								
							@else
								<tr>
									<td>{{$nombres[$i]}} </td>
									<td><input type="checkbox" name="sep[]" value="{{$campos[$i]}}"></td>
								</tr>
							@endif
						@endfor

					@endif

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