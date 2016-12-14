<!DOCTYPE html>
<html>
<body>


  <link href="{{asset('fonts/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('css/paleta.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/fileinput.css')}}">
  <script src="{{asset('js/jquery.js')}}"></script>

  <script src="{{asset('js/react.js')}}"></script>
  <script src="{{asset('js/react-dom.js')}}"></script>
  <script src="{{asset('js/browser.min.js')}}"></script>




<div id="container"></div>

<script>
var TablaTramites;
</script>

<script type="text/babel" src="{{asset('rs/TablaTramites.js')}}">
</script>

<script type="text/babel">

ReactDOM.render(
	<TablaTramites url="{{asset('panel2/todos')}}" base="{{asset('tramites')}}" refresh="5000" ver="true"/>,
	document.getElementById('container')
);
</script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>