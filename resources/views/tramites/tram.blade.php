



<form method="POST" name="" action="{{asset('tramite/recibir')}}" id="loginForm">
	{{ csrf_field()}}

	<h2><p class="text-center">  Crear trámite </p></h2>
				<br><br>
<div class="container">

<div class="row">
  <div class="col-md-3">
  	<label for="remitente" >Área Remitente: </label>
				<div class="input-group">
					<select required="" name="area" type="text" class="form-control" id="area_id">
				        <option value="" >Seleccionar área</option>
			          		@foreach($area as $are)
				                <option value='{{$are->id}}'>{{$are->nombre}}</option>
				            @endforeach
				    </select>
				</div>

  </div>
  <div class="col-md-2">
  	<label for="idExped" >Nro. Expediente: </label>
				<div class="input-group">
				  <span class="input-group-addon" id="basic-addon1">
				    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
				  </span>
				  <input type="text" class="form-control" name="num_exp" id="numExp" value="" required="true">
				</div>
  </div>
</div>
<br>
<div class="row">
<div class="col-md-5">
	<label for="nombre_doc" >Nombre de documento: </label>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">
					    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
					  </span>
					  <input type="text" class="form-control" name="nombre_doc" id="nombre_doc" value="" required="true" >
					</div>
</div>
</div>

<div class="row">
<div class="col-md-5">
<label for="comentario" >Comentario: </label>
		        <div class="">
		          <textarea type="text" class="form-control" rows="5" name="comentario" id="comentario"> </textarea>
		        </div>

</div>
</div>
<br><br>
	
<div class="row">
	<div class="col-md-2">
	<p>.</p>
	
	</div>
	

	<div class="col-md-3">
		
		<div  id="boton">
			<button class="btn btn-lg btn-primary" type="submit" value="Submit"> Guardar</button> 
		</div>
	</div>
</div>

</form>


<script type="text/javascript">
	alertify.genericDialog || alertify.dialog('genericDialog',function(){
    return {
        main:function(content){
            this.setContent(content);
        },
        setup:function(){
            return {
                focus:{
                    element:function(){
                        return this.elements.body.querySelector(this.get('selector'));
                    },
                    select:true
                },
                options:{
                    basic:true,
                    maximizable:false,
                    resizable:false,
                    padding:false
                }
            };
        },
        settings:{
            selector:undefined
        }
    };
});

	alertify.genericDialog ($('#loginForm')[0]).set('selector', 'input[type="text"]');
</script>

