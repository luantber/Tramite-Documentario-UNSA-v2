<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/paleta.css">

</head>
<body>

      <!-- Static navbar -->
      <nav class="navbar navbar-default default-primary-color">
      	<div class="barra-superior dark-primary-color">
	</div>

        <div class="container-fluid">

          <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>

            </button>

            <a class="navbar-brand" href="#">Trámite Documentario</a>

          </div>


          <div id="navbar" class="navbar-collapse collapse">
            


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
        


            

        </div><!--/.container-fluid -->
      </nav>



<div class="container">
	@section('content')
	@show	
</div>

    <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>