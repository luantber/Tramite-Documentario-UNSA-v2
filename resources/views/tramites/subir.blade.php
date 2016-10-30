@extends('template')

@section('title','Subir documento')

@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<h2><p class="text-center">  Subir documentos </p></h2>
		<br><br>

		<form method="post" action="{{asset('empleados/')}}">
		{{ csrf_field()}}

			<div class="row">
				<div class="col-sm-6">
					<label for="numExp" >Número de expediente: </label>
					<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">
								<span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
							</span>
				  		<input class="form-control" type="text" name ="numExp" id="numExp" placeholder="Ingrese número de expediente" required="true">
					</div>
				</div>
			  <div class="col-sm-6">
			  		<label for="tipoDoc" >Tipo de documentos: </label>
				    <select name="tipoDoc" type="text" class="form-control" id="tipoDoc">
			          <option value="" >Seleccionar tipo de documento</option>
		      				<option value="1" required>"Solicitud"</option>
		      				<option value="2" required>"Otro"</option>
			          <!--<script type="text/javascript">
			              var nuevo;
			              for (var i=0;i<tipo.length;i++){
			                nuevo=tipo[i];
			                document.write("<option value="+nuevo[0]+">"+nuevo[1]+"</option>")
			              }
			           </script> -->
			        </select>
			        <!--<input class="form-control" type="text" name ="tipoDoc" id="tipoDoc" placeholder="Ingresar tipo de documento" required="true">-->
			  </div>
			</div><br>

			<div class="row">
				<div class="col-sm-12">
					<label for="tipoDoc" >Tipo de documentos: </label>
			        <input id="archivo" name="archivo" type="file" class="file" data-show-preview="false">
			          <script type="text/javascript">
			          (function($){
			            $("#archivo").fileinput(
			            {
			              showUpload:false,
			              language: 'es',
			              allowedFileExtensions: ["doc","docx","odt"],
			              maxFilesNum: 1
			            })}(jQuery);
			          </script>
			    </div><br>
			</div><br>

			<div class="row">
				<div class="col-sm-12">
		          <label for="checkbox" >Archivo:   </label>
		              <label><input type="checkbox" value="">Virtual</label>
		        </div>
		    </div> <br><br>

			<div class="form-group">
				<div class="col-sm-6">
					<div class="text-center">
					<button class="btn btn-lg " type="submit" value="Submit"> 
					Subir documentos</button>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="text-center">
					<button class="btn btn-lg" type="submit" value="Submit"> Finalizar</button>
					</div>
				</div>
			</div><br><br>

		</form>
	</div>
</div>

@endsection