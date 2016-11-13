@extends('template')

@section('title','Panel')

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
	<TablaTramites url="{{asset('panel/todos')}}" base="{{asset('tramites')}}" refresh="5000" ver="true"/>,
	document.getElementById('container')
);
</script>

@endsection