<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>
		@yield('title','Trámite Documentario')
	</title>
    
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-theme.css')}}">

	<!--<script type="text/javascript" src="{{asset('assets/js/jquery-1.9.1.js')}}"></script>-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/fileinput.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/alertify.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/default.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/semantic.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/alertify.rtl.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/default.rtl.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/semantic.rtl.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.rtl.mincss')}}">

	<!--<script src="{{asset('assets/{PATH}/alertify.min.js')}}"></script>-->
	<script type="text/javascript" src="{{asset('assets/js/fileinput.min.js')}}"></script> 
	<script type="text/javascript" src="{{asset('assets/js/esinputfile.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/alertify.min.js')}}" ></script>

	<!-- include the style -->
	<link rel="stylesheet" href="{{asset('assets/{PATH}/alertify.min.css')}}" />
	<!-- include a theme -->
	<link rel="stylesheet" href="{{asset('assets/{PATH}/themes/default.min.css')}}" />

</head>


<body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>


	<!-- DEFAULT HEADER -->

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->

	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Trámite Documentario</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="/">Inicio <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Movimientos</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Áreas<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Crear</a></li>
	            <li><a href="#">Ver</a></li>
	            <li><a href="#">Más</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Otra</a></li>
	          </ul>
	        </li>
	      </ul>
	      <ul class="nav navbar-nav navbar-left">
	        <li><a href="#">Usuarios</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acciones SU <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="{{ url('empleados/crear_nuevo')}}">Crear Empleado</a></li>
	            <li><a href="{{ url('empleados/encontrar')}}">Encontrar Empleado</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="{{ url('usuarios/crear') }}">Crear Usuario</a></li>
	          </ul>
	        </li>
	      </ul>

	      <form class="navbar-form navbar-right">
	        <button type="button" class="btn btn-default btn-md">
	        <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Entrar
	        </button>
	      </form>
	      
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<!-- END HEADER -->

	@section('content')
	@show
	

	<div>

	<br><br>
	<br><br>

	</div>

	<!-- FOOTER -->

	<div class="container well">
	<h4><center>Trámite Documentario cs unsa </center></h4>

	</div>
	<div id="footer">
	    <div class="container">
	        <div class="row">
	            <h3 class="footertext">About Us:</h3>
	            <br>
	              <div class="col-md-4">
	                <center>
	                  <img src="http://oi60.tinypic.com/w8lycl.jpg" class="img-circle" alt="the-brains">
	                  <br>
	                  <h4 class="footertext">Programmer</h4>
	                  <p class="footertext">People who never sleep.<br>
	                </center>
	              </div>
	              <div class="col-md-4">
	                <center>
	                  <img src="http://oi60.tinypic.com/2z7enpc.jpg" class="img-circle" alt="...">
	                  <br>
	                  <h4 class="footertext">Artist</h4>
	                  <p class="footertext">All the images here are hand drawn by this man.<br>
	                </center>
	              </div>
	              <div class="col-md-4">
	                <center>
	                  <img src="http://oi61.tinypic.com/307n6ux.jpg" class="img-circle" alt="...">
	                  <br>
	                  <h4 class="footertext">Designer</h4>
	                  <p class="footertext">This pretty site and the copy it holds are all thanks to this guy.<br>
	                </center>
	              </div>
	            </div>
	            <div class="row">
	            <p><center><a href="#">Contact us here</a> <p class="footertext">Copyright 2016</p></center></p>
	        </div>
	    </div>
	</div>

	<!--END OF FOOTER-->

</body>
</html>