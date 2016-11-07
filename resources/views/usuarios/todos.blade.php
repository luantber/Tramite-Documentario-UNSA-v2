@extends('template')

@section('title','Ver Personas')

@section('react')
  <script src="{{asset('js/react.js')}}"></script>
  <script src="{{asset('js/react-dom.js')}}"></script>
  <script src="{{asset('js/browser.min.js')}}"></script>
@endsection

@section('content')

<h2><p class="text-center">  Ver Todos </p></h2>
	<br>


	<div class="container" id="container">
	</div>
	


<script>
var TablaPersonas;
</script>

<script type="text/babel" src="{{asset('rs/TablaPersonas.js')}}">
</script>
<script type="text/babel">

ReactDOM.render(
	<TablaPersonas url="{{asset('usuarios/todos')}}" refresh="100000" base="{{asset('usuarios/')}}" />,
	document.getElementById('container')
);
</script>
@endsection