  <!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

  <link href="{{asset('fonts/font-awesome.min.css')}}" rel="stylesheet">

	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/paleta.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('css/fileinput.css')}}">

@yield('react')

  <script src="{{asset('js/jquery.js')}}"></script>

  <script src="{{asset('js/fileinput.js')}}"></script>

@yield('script2')



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

            <a class="navbar-brand" href="{{url('/')}}">Trámite Documentario</a>

          </div>

          <!-- Fin Navegacion Movil -->

          <div id="navbar" class="navbar-collapse collapse">
        @if(Auth::check())
        <ul class="nav navbar-nav ">
        <ul class="nav navbar-nav navbar-left">


<!--USUARIOS-->
        @section('usuarios')
          <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
               <ul class="dropdown-menu">
               <li><a href="{{ url('usuarios/crear')}}">Nuevo</a></li>
                 <li><a href="{{ url('usuarios')}}">Todos</a></li>

               </ul>
           </li>
         @endsection
<!--EMPLEADOS-->
          @section('empleados')
              <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empleados <span class="caret"></span></a>
               <ul class="dropdown-menu">
                  <li><a href="{{ url('empleados/crear')}}">Nuevo</a></li>
                  <li><a href="{{ url('empleados/')}}">Todos</a></li>
                 <li><a href="{{ url('empleados/estados/crear')}}">Nuevo Estado</a></li>
                 <li><a href="{{ url('empleados/estados') }}">Todos Estados</a></li>
               </ul>
           </li>
          @endsection

<!--ÁREAS-->
        @section('areas')
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Áreas<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('areas/crear')}}">Nuevo</a></li>
              <li><a href="{{ url('areas')}}">Todos</a></li>
            </ul>
          </li>
        @endsection




<!--cargos-->
        @section('cargos')
           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cargos <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="{{ url('cargos/crear')}}">Nuevo</a></li>
                 <li><a href="{{ url('cargos') }}">Todos</a></li>
               </ul>
           </li>
        @endsection

<!--MOVIMIENTOS-->
          <li><a href="{{ url('movimientos')}}">Movimientos</a></li>

 <!--TRAMITES-->
        @section('tramites')
           <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Trámites <span class="caret"></span></a>
               <ul class="dropdown-menu">
                 <li><a href="{{ url('tramites/crear') }}">Nuevo</a></li>
                 <li><a href="{{ url('tramites') }}">Todos</a></li>
                 <li><a href="{{ url('tramites/estados/crear') }}">crear Estados</a></li>
                 <li><a href="{{ url('tramites/estados') }}">Estados</a></li>
                 <li><a href="{{ url('tipostramite/crear') }}">Crear Tipo Trámite</a></li>
                 <li><a href="{{ url('tipostramite') }}">Tipos de Trámite</a></li>


               </ul>
           </li>
        @endsection

<!--ESTADISTICAS-->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estadisticas<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('estadisticas/parea')}}">Por Área</a></li>
              <li><a href="{{ url('estadisticas/pempleado')}}">Por Empleado</a></li>
              <li><a href="{{ url('/') }}">Por Usuario</a></li>
            </ul>
          </li>

<!--BUSCADOR-->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Búsquedas<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('busqueda/porArea')}}">Por Área</a></li>
              <li><a href="{{ url('busqueda/porEmpleado')}}">Por Empleado</a></li>
              <li><a href="{{ url('busqueda/porUsuario') }}">Por Usuario</a></li>
              <li><a href="{{ url('busqueda/porTramite') }}">Por Trámite</a></li>
            </ul>
          </li>

<!--PANEL-->
          <li ><a href="{{asset('mistramites')}}">Mis Tramites </a></li>

          <li class="active"><a href="{{asset('panel')}}">Panel  </a></li>

<!--AGENDA-->

        <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agenda <span class="caret"></span></a>
             <ul class="dropdown-menu">
             <li><a href="{{ url('notas/crear') }}">Nuevo</a></li>
               <li><a href="{{ url('notas/todos') }}">Todos</a></li>

             </ul>
         </li>




      <!--Aqui empieza la seleccion-->

      <?php
        $ar=Auth::user()->empleado->cargo->permisosCargo->toArray();
        array_shift($ar);
      ?>


      @foreach($ar as $key=>$a)
        @if($a=="1")
          @yield($key)
        @endif
      @endforeach

      @endif
      <!--Aqui termina la seleccion-->

      </ul>
        </ul>
        <ul class="nav navbar-nav navbar-right">

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
