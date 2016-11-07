@extends('template')

@section('title','Resultado de la Consulta')

@section('content')

<script src="{{asset('js/Chart.js')}}"></script>
<span aria-hidden="true"></span>
<var id = "datos">{{$est1}}</var>
<var id = "estados">{{$estado}}</var>
<var>{{$cant1}}</var>
<var>{{$cant2}}</var>

<var id = "datos2">{{$est2}}</var>
<var id = "estados2">{{$estado2}}</var>
<var>{{$cant3}}</var>
<var>{{$cant4}}</var>

<var id = "datos3">{{$est3}}</var>
<var id = "tipo1">{{$tipo1}}</var>
<var>{{$cant5}}</var>
<var>{{$cant6}}</var>

<canvas id="chart-area" width="300" height="300"></canvas>
<canvas id="chart-area2" width="300" height="300"></canvas>
<canvas id="chart-area3" width="300" height="300"></canvas>
<script type="text/javascript">
	var aux = '{ "data" :' + (document.getElementById("datos")).innerText + '}';
	var obj = JSON.parse(aux);
	var aux2 = '{ "estados" :' + (document.getElementById("estados")).innerText + '}';
	var obj2 = JSON.parse(aux2);
	var pieData = [];
	var i = 0;
	while(i<{{$cant2}}){
		var j = 0;
		var temp = obj2.estados[i].estado_tramite_id;
		var cont = 0;
		while(j<{{$cant1}}){
			if(obj.data[j].estado_tramite_id == temp){
				cont = cont + 1;
			}
			j = j + 1;
		}
		pieData.push({value:cont,color:"#0b82e7",highlight: "#0c62ab",label: obj2.estados[i].nombre});
		i = i + 1;
	}
	var ctx = document.getElementById("chart-area").getContext("2d");
	window.myPie = new Chart(ctx).Pie(pieData);

	aux = '{ "data" :' + (document.getElementById("datos2")).innerText + '}';
	obj = JSON.parse(aux);
	aux2 = '{ "estados" :' + (document.getElementById("estados2")).innerText + '}';
	obj2 = JSON.parse(aux2);
	pieData = [];
	i = 0;
	while(i<{{$cant4}}){
		var j = 0;
		var temp = obj2.estados[i].id_estado;
		var cont = 0;
		while(j<{{$cant3}}){
			if(obj.data[j].id_estado == temp){
				cont = cont + 1;
			}
			j = j + 1;
		}
		pieData.push({value:cont,color:"#f24e2e",highlight: "#b73a21",label: obj2.estados[i].nombre});
		i = i + 1;
	}
	var ctx = document.getElementById("chart-area2").getContext("2d");
	window.myPie = new Chart(ctx).Pie(pieData);

	aux = '{ "data" :' + (document.getElementById("datos3")).innerText + '}';
	obj = JSON.parse(aux);
	aux2 = '{ "tipos" :' + (document.getElementById("tipo1")).innerText + '}';
	obj2 = JSON.parse(aux2);
	pieData = [];
	i = 0;
	while(i<{{$cant4}}){
		var j = 0;
		var temp = obj2.tipos[i].tipo_tramite_id;
		var cont = 0;
		while(j<{{$cant3}}){
			if(obj.data[j].tipo_tramite_id == temp){
				cont = cont + 1;
			}
			j = j + 1;
		}
		pieData.push({value:cont,color:"#1de21d",highlight: "#1ace1a",label: obj2.tipos[i].nombre});
		i = i + 1;
	}
	var ctx = document.getElementById("chart-area3").getContext("2d");
	window.myPie = new Chart(ctx).Pie(pieData);
	
</script>

@endsection