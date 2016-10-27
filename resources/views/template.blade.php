<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/paleta.css')}}">

  <script src="{{asset('js/react.js')}}"></script>
  <script src="{{asset('js/react-dom.js')}}"></script>
  <script src="{{asset('js/browser.min.js')}}"></script>
 
  <script src="{{asset('js/jquery.js')}}"></script>

</head>
<body>

      <!-- Static navbar -->
      <nav class="navbar navbar-default default-primary-color" >
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

          <!-- Fin Navegacion Movil -->

          <div id="navbar" class="navbar-collapse collapse">
        


        <ul class="nav navbar-nav">
          <li class="active"><a href="/">Inicio <span class="sr-only">(current)</span></a></li>
          <li><a href="{{ url('movimientos')}}">Movimientos</a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Áreas<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('areas/crear')}}">Crear</a></li>
              <li><a href="#">Ver</a></li>
              <li><a href="#">Más</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Otra</a></li>
            </ul>
          </li>

          
        </ul>



        <ul class="nav navbar-nav navbar-left">

          <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="{{ url('#')}}">Ver Usuarios</a></li>
                 <li><a href="{{ url('#') }}">Ver Empleados</a></li>
                 <li><a href="{{ url('personas/ver') }}">Ver Todos</a></li>
               </ul>
           </li>
 
           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Trámites <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="{{ url('#')}}">Panel/Cola</a></li>
                 <li><a href="{{ url('tramites/crear') }}">Nuevo</a></li>
                 <li><a href="{{ url('#') }}">Responder</a></li>
                 <li><a href="{{ url('#') }}">Buscar</a></li>
                 <li><a href="{{ url('tramites/todos') }}">Todos</a></li>
               </ul>
           </li>

           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cargos <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="{{ url('cargos/crear')}}">Crear</a></li>
                 <li><a href="{{ url('#')}}">Editar</a></li>
                 <li><a href="{{ url('cargos/mostrar') }}">Mostrar todos</a></li>
               </ul>
           </li>

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
          <!--<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Entrar-->
             <span aria-hidden="true"> <a  style="text-decoration: none" class="glyphicon glyphicon-log-in" href="{{ url('/login') }}"> Ingresar </a> 
             </span>
          </button>
        </form>

        </div>
      </nav>



<!--Fin Barra-->

<div class="container">
	@section('content')
	@show	
</div>
<br><br><br>

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
                    <p class="footertext">Person who never sleep.<br>
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


<script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>
</html>