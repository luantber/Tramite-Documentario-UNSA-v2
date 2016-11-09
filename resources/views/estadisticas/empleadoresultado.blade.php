@extends('template')

@section('title','Resultado de la Consulta')

@section('content')

<script src="{{asset('js/Chart.js')}}"></script>
<span aria-hidden="true"></span>
<var id = "datos">{{$datos}}</var>
<var id = "tipos">{{$tipos}}</var>
<var id = "estados">{{$estados}}</var>
<h1>Cantidad de trámites por tipo de trámite y empleado</h1>
<canvas id="chart-area" width="300" height="300"></canvas>
<h1>Cantidad de trámites por estado de trámite y empleado</h1>
<canvas id="chart-area2" width="300" height="300"></canvas>

<script type="text/javascript">
	var aux = '{ "datos" :' + (document.getElementById("datos")).innerText + '}';
	var dato = JSON.parse(aux);
	var aux2 = '{ "tipos" :' + (document.getElementById("tipos")).innerText + '}';
	var tipo = JSON.parse(aux2);
	var aux3 = '{ "estados" :' + (document.getElementById("estados")).innerText + '}';
	var estado = JSON.parse(aux3);
	//alert(estado.estados[0].nombre);
	var labeltipos = [];
	for (var i = 0; i < tipo.tipos.length; i++) {
		labeltipos.push(tipo.tipos[i].nombre);
	};
	//alert(labeltipos);
	var labelestados = [];
	for (var i = 0; i < estado.estados.length; i++) {
		labelestados.push(estado.estados[i].nombre);
	};
	//alert(labelestados);
	var conttipos= [];
	for (var i = 0; i < labeltipos.length; i++) {
		var c = 0;
		for (var j = 0; j < dato.datos.length; j++) {
			if (dato.datos[j].tnombre == labeltipos[i]) {
				c = c + 1;
			};
		};
		conttipos.push(c);
	};
	//alert(conttipos);
	var contestados= [];
	for (var i = 0; i < labelestados.length; i++) {
		var c = 0;
		for (var j = 0; j < dato.datos.length; j++) {
			if (dato.datos[j].enombre == labelestados[i]) {
				c = c + 1;
			};
		};
		contestados.push(c);
	};

	var graph1 = {
		labels : labeltipos,
		datasets : [
			{
				fillColor : "#6b9dfa",
				strokeColor : "#ffffff",
				highlightFill: "#1864f2",
				highlightStroke: "#ffffff",
				data : conttipos
			}

		]

	}
	var graph2 = {
		labels : labelestados,
		datasets : [
			{
				fillColor : "#e9e225",
				strokeColor : "#ffffff",
				highlightFill: "#ee7f49",
				highlightStroke: "#ffffff",
				data : contestados
			}

		]

	}

	var ctx = document.getElementById("chart-area").getContext("2d");
	var ctx2 = document.getElementById("chart-area2").getContext("2d");
	window.myPie = new Chart(ctx).Bar(graph1, {responsive:true});
	window.myPie = new Chart(ctx2).Bar(graph2, {responsive:true});
	//alert(contestados[0]);


</script>

@endsection