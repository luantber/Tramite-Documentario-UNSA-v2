@extends('template')
@section('title','Tipos de Trámite')

@section('react')
  <script src="{{asset('js/react.js')}}"></script>
  <script src="{{asset('js/react-dom.js')}}"></script>
  <script src="{{asset('js/browser.min.js')}}"></script>
@endsection

@section('content')

<div id="container"></div>

<script>
var TablaTiposTramite;
</script>

<script type="text/babel" src="{{asset('rs/TablaTiposTramite.js')}}">
</script>

<script type="text/babel">

ReactDOM.render(
	<TablaTiposTramite url="{{asset('tipostramite/todos')}}" refresh="100000" />,
	document.getElementById('container')
);
</script>
@endsection()
