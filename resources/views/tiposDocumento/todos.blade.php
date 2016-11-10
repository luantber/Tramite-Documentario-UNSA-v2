@extends('template')

@section('title','Ver Tipos Documentos')

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
var TablaTiposDocumento;
</script>

<script type="text/babel" src="{{asset('rs/TablaTiposDocumentos.js')}}">
</script>
<script type="text/babel">

ReactDOM.render(
	<TablaTiposDocumento url="{{asset('tiposDocumento/todos')}}" refresh="100000" base="{{asset('tiposDocumento/')}}" />,
	document.getElementById('container')
);
</script>
@endsection