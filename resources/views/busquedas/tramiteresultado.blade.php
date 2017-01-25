<div id="alerta">
	
<head><title>Buscador por Trámite</title>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript">
		function clic() {
			var n = document.getElementById('bus').value; 
			$.ajax({url: "{{asset('busqueda/resultadoTramite')}}", type:"GET" , data: {nombre: n},dataType:'json', success: function(result){
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
				  var textoCelda = document.createTextNode("ID Tramite");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Nro de Expediente");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Nombre Persona");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Apellido Persona");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Identificador");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Área");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Tipo Trámite");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Descripción");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Estado Trámite");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Descripción");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Asunto");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Prioridad");
				  celda.appendChild(textoCelda);
				  hilera.appendChild(celda);
				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Fecha Creación");
				  celda.appendChild(textoCelda);				  
				  hilera.appendChild(celda);

				  celda = document.createElement("td");
				  textoCelda = document.createTextNode("Tramite link");
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
				      var textoCelda = document.createTextNode(aux3.data[i].tid);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].expe);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].pnom);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].pape);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].pdni);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].anom);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].tnom);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].tdes);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].enom);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].edes);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].asun);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].prio);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);
				      celda = document.createElement("td");
				      textoCelda = document.createTextNode(aux3.data[i].tcr);
				      celda.appendChild(textoCelda);
				      hilera.appendChild(celda);


				      celda = document.createElement("td");
				      link =p  document.createElement('a');
				      link.href = '{{asset("tramites")}}/' + aux3.data[i].tid;
				      link.innerHTML = 'Ver tramite';
				      celda.appendChild(link);
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
<h1><b>Buscador por Trámite</b></h1>

<input type="text" id="bus" name="bus" onkeyup="clic()"/>

<div id="myDiv">
<br>
<br>
<table id="tab"></table>
</div>


</center>

</body>
</div>

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

	alertify.genericDialog ($('#alerta')[0]).set('selector', 'input[type="text"]');
</script>
