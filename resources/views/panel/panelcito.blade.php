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

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#yes">Recibidos</a></li>
  <li ><a data-toggle="tab" href="#nop">No Recibidos</a></li>
</ul>

<div class="tab-content">

  <div id="nop" class="tab-pane fade">
    <div id="container2"></div>
  </div>

  
  <div id="yes" class="tab-pane fade in active">
    <div id="container"></div>    
  </div>


</div>


<script>
var TablaTramites;
</script>

<script type="text/babel" src="{{asset('rs/TablaTramites.js')}}">
</script>

<script type="text/babel">
  ReactDOM.render(
  	<TablaTramites url="{{asset('panel2/todos')}}" base="{{asset('tramites')}}" refresh="5000" ver="true" yes="true"/>,
  	document.getElementById('container')
  );

  ReactDOM.render(
    <TablaTramites url="{{asset('panel2/todos')}}" base="{{asset('tramites')}}" refresh="5000" ver="true" no="true"/>,
    document.getElementById('container2')
  );
</script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>

