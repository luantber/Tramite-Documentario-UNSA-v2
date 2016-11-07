@extends('template')

@section('title','Mis Tramites')

@section('react')
  <script src="{{asset('js/react.js')}}"></script>
  <script src="{{asset('js/react-dom.js')}}"></script>
  <script src="{{asset('js/browser.min.js')}}"></script>
@endsection

@section('content')


<div id="container"></div>

<script>
var TablaTramites;
</script>

<script type="text/babel" src="{{asset('rs/TablaTramites.js')}}">
</script>

<script type="text/babel">

ReactDOM.render(
	<TablaTramites url="{{asset('mistramites/todos')}}" refresh="50000" ver="true" base="{{asset('tramites')}}"/>,
	document.getElementById('container')
);
</script>

@endsection