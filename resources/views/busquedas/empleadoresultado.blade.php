@extends('template')

@section('title','Resultado de la Consulta')

@section('content')

<head><title>Buscador por Empleado</title>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript">
		function clic() {
			var n = document.getElementById('bus').value; 
			$.ajax({url: "{{asset('busqueda/resultadoEmpleado')}}", type:"GET" , data: {nombre: n},dataType:'json', success: function(result){
					var aux = JSON.stringify(result);
					//alert(aux);
					var aux2 = '{ "data" :' + aux + '}';
					//alert(aux2);
					var aux3 = JSON.parse(aux2);
					//alert(aux);
					var body = document.getElementById("myDiv");
					body.removeChild(document.getElementById("tab"));
 
				  // Crea un elemento <table> y un elemento <tbody>
				  var tabla   = document.createElement("table");
				  var tblBody = document.createElement("tbody");
				  var hilera = document.createElement("tr");
				  var celda = document.createElement("td");
				  var textoCelda = document.createTextNode("Nombre");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Apellido");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Email");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Área");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Cargo");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Estado");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Activo");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  tblBody.appendChild(hilera);
				  // Crea las celdas
				  for (var i = 0; i < aux3.data.length ; i++) {
				    // Crea las hileras de la tabla
				    var hilera = document.createElement("tr");
				 
				    //for (var j = 0; j < 2; j++) {
				      // Crea un elemento <td> y un nodo de texto, haz que el nodo de
				      // texto sea el contenido de <td>, ubica el elemento <td> al final
				      // de la hilera de la tabla
				      var celda = document.createElement("td");
				      var textoCelda = document.createTextNode(aux3.data[i].nombrepersona);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].apellido);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].email);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].nombrearea);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].nombreCargo);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].nombreestado);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      if(aux3.data[i].eactivo = '0'){
				      	textoCelda = document.createTextNode("No");
				      }
				      else{
				      	textoCelda = document.createTextNode("Si");
				      }
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				    //}
				 
				    // agrega la hilera al final de la tabla (al final del elemento tblbody)
				    tblBody.appendChild(hilera);
				  }
				 
				  // posiciona el <tbody> debajo del elemento <table>
				  tabla.appendChild(tblBody);
				  // appends <table> into <body>
				  body.appendChild(tabla);
				  // modifica el atributo "border" de la tabla y lo fija a "2";
				  //tabla.setAttribute("border", "2");
				  tabla.setAttribute("id", "tab");
				  tabla.setAttribute("class","table table-striped");
					//alert(aux3.data[0].nombre);
					/*var aux3 = JSON.parse(aux2);
					alert(aux3.data);*/
					//var aux = JSON.parse(result);
				}, error: function(){alert("error");}});

		}
		/*$(document).ready(function(){
			$("button").click(function(){
				$.ajax({url: "busqueda/resultadoArea", success: function(result){
					$("myDiv").html(result);
				}, error: function(){$("myDiv").html("error");}});
			});	
		});*/

	
</script>
</head>

<body>

<center>
<h1><b>Buscador por Empleado</b></h1>

<input type="text" id="bus" name="bus" onkeyup="clic()"/>

<div id="myDiv">
<br>
<br>
<table id="tab"></table>
</div>


</center>

</body>


@endsection