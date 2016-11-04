  <!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/paleta.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('css/fileinput.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/notas.css')}}">

  <script src="{{asset('js/react.js')}}"></script>
  <script src="{{asset('js/react-dom.js')}}"></script>
  <script src="{{asset('js/browser.min.js')}}"></script>

  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/fileinput.js')}}"></script>




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

        <ul class="nav navbar-nav navbar-right">
        <ul class="nav navbar-nav">
<!--USUARIOS-->
          <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
               <ul class="dropdown-menu">
               <li><a href="{{ url('usuarios/crear')}}">Nuevo</a></li>
                 <li><a href="{{ url('usuarios')}}">Todos</a></li>

               </ul>
           </li>
<!--EMPLEADOS-->
                      <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empleados <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{ url('empleados/crear')}}">Nuevo</a></li>
                  <li><a href="{{ url('empleados/')}}">Todos</a></li>
                 <li><a href="{{ url('empleados/estados/crear')}}">Nuevo Estado</a></li>
                 <li><a href="{{ url('empleados/estados') }}">Todos Estados</a></li>
               </ul>
           </li>

<!--ÁREAS-->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Áreas<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('areas/crear')}}">Nuevo</a></li>
              <li><a href="{{ url('areas')}}">Todos</a></li>
            </ul>
          </li>


        </ul>


<!--cargos-->
           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cargos <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="{{ url('cargos/crear')}}">Nuevo</a></li>
                 <li><a href="{{ url('cargos') }}">Todos</a></li>
               </ul>
           </li>

<!--MOVIMIENTOS-->
          <li><a href="{{ url('movimientos')}}">Movimientos</a></li>

 <!--TRAMITES-->

           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Trámites1 <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="{{ url('tramites/crear') }}">Nuevo</a></li>
                 <li><a href="{{ url('tramites') }}">Todos</a></li>
                 <li><a href="{{ url('tramites/estados/crear') }}">crear Estados</a></li>
                 <li><a href="{{ url('tramites/estados') }}">Estados</a></li>

               </ul>
           </li>

<!--PANEL-->
          <li ><a href="{{asset('mistramites')}}">Mis Tramites </a></li>

          <li class="active"><a href="{{asset('panel')}}">Panel  </a></li>


        <form class="navbar-form navbar-right">
          <button type="button" class="btn btn-default btn-md">
          <!--<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Entrar-->
            @if (Auth::check())

                  <span aria-hidden="true"> <a  style="text-decoration: none" class="glyphicon glyphicon-user" href="{{ url('/usuarios/'.Auth::user()->id) }}"> {{Auth::user()->empleado->area->nombre."/".Auth::user()->empleado->cargo->nombreCargo}} </a>
                </button>

                <button type="button" class="btn btn-default btn-md">
                  <span aria-hidden="true"> <a  style="text-decoration: none" class="glyphicon glyphicon-log-out" href="{{ url('/logout') }}"> Cerrar Sesión </a>
            @else
                <span aria-hidden="true"> <a  style="text-decoration: none" class="glyphicon glyphicon-log-in" href="{{ url('/login') }}"> Ingresar </a>
            @endif
             </span>
          </button>
        </form>

<!--AGENDA-->

				<li class="dropdown">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agenda <span class="caret"></span></a>
						 <ul class="dropdown-menu">
						 <li><a href="{{ url('notas/crear/empleado') }}">Nuevo Personal</a></li>
             <li><a href="{{ url('notas/crear/area') }}">Nuevo Publico</a></li>
							 <li><a href="{{ url('notas/todos') }}">Todos</a></li>

						 </ul>
				 </li>




				</ul>

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
    <h4><center>Trámite Documentario CS UNSA </center></h4>
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
