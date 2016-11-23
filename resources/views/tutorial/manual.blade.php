@extends('template')

@section('title','Tutorial')

@section('content')


<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

  <div class="container">
    <div class="row">
      <nav class="col-sm-3" id="myScrollspy">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#section1">Inicio</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#section2">Crear<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section21">Crear Usuario</a></li>
              <li><a href="#section22">Crear Empleado</a></li>
              <li><a href="#section23">Crear Cargo</a></li>
              <li><a href="#section24">Crear Area</a></li>
              <li><a href="#section25">Crear Tipo Trámite</a></li>
              <li><a href="#section26">Crear Estado</a></li>
              <li><a href="#section27">Crear Estado Empleado</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#section3">Trámite <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section31">Crear</a></li>
              <li><a href="#section32">Subir Documentos</a></li>
              <li><a href="#section33">Visualizar Trámites</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#section4">Búsqueda<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41">Buscar Área</a></li>
              <li><a href="#section42">Buscar Empleado</a></li>
              <li><a href="#section43">Buscar Trámite</a></li>
              <li><a href="#section44">Buscar Usuario</a></li>
            </ul>
          </li>



        </ul>
      </nav>


      <div class="col-sm-9">
        <div id="section1"> 
          <h1>Inicio</h1>
          <h5>Bienvenido a Tramite documentario</h5>
          <img src="{{URL::asset('imagenes/inicio.png')}}" class="img-rounded">
          <p>Para ingresar a su cuenta tendra que proporcionar su correo electronico , con su respectiva contraseña</p>
          <p>Si no puede estrar una de la razones puede ser, que no aya activado su cuenta . Para activar la cuenta es desde su e-mail, ahi tambien le pediran crear su contraseña</p>
          <img src="login.png" class="img-rounded">
        </div>
      <!-- crear -->

        <div id="section21"> 
          <h1>Crear Usuario</h1>
          <img src="crearusuario.png" class="img-rounded">
          <p>Ingresar todos los datos que se pide, si los datos como: Correo electronico, DNI o RUC, son repetidos, no se permitira registrar al nuevo usuario.</p>
        </div>
        <div id="section22"> 
          <h1>Crear Empleado</h1>
          <img src="crearempleado.png" class="img-rounded">
          <p>Ingresar los datos requeridos, al cocluir esta opcion, se crea automaticamente un usuario del empleado.</p>
        </div>
        <div id="section23"> 
          <h1>Crear Cargo</h1>
          <img src="crearcargo.png" class="img-rounded">
          <p>Al crear un cargo se le dan permisos, los cuales se pueden editar, ya sea para aumentar permisos o quitarle.</p>
        </div>
        <div id="section24"> 
          <h1>Crear Area</h1>
          <img src="creararea.png" class="img-rounded">
          <p>Llenamos los respectivos requerimientos. </p>
        </div> 
        <div id="section25"> 
          <h1>Crear Tipo Trámite</h1>
          <img src="Creartipot.png" class="img-rounded">
          <p>Se puede crear cualqueir Tipo de Tramite que usted requiera o necesite</p>
        </div>
        <div id="section26"> 
          <h1>Crear Estado</h1>
          <img src="crearestado.png" class="img-rounded">
          <p>Esta opcion es para Crea un estado del Trámite</p>
        </div>
        <div id="section27"> 
          <h1>Crear Estado Empleado</h1>
          <img src="crearestadoem.png" class="img-rounded">
          <p>El empleado puede tener varios estados</p>
        </div>
      <!-- tramite -->

      <div id="section31"> 
          <h1>Crear Trámite</h1>
          <img src="creartramite.png" class="img-rounded">
          <p>Ingresar todos los datos que se pide, llegara al jefe del área delegada.</p>
        </div>
        <div id="section32"> 
          <h1>Subir Documentos</h1>
          <img src="subirdocu.png" class="img-rounded">
          <p>Esta Sección es opcional, ya que los tramites puedes físicos</p>
        </div>
        <div id="section33"> 
          <h1>Visualizar el Trámite</h1>
          <img src="vertramite.png" class="img-rounded">
          <p>En esta ventana se pueden ver todos los Tramites ealizados , asi como tambien los Finalizados y en Proceso.</p>
        </div>

         <!-- busqueda--> 


        <div id="section24"> 
          <h1>Buscar Area</h1>
          <img src="busarea.png" class="img-rounded">
          <p>Solo colocar el nombre del Area a buscar, Nos redirige al Area deseada. </p>
        </div> 
        <div id="section25"> 
          <h1>Buscar Empleado</h1>
          <img src="busempleado.png" class="img-rounded">
          <p>Nos redirige al Perfil del Empleado</p>
        </div>
        <div id="section26"> 
          <h1>Buscar Trámite</h1>
          <img src="Bustramite.png" class="img-rounded">
          <p>AL Trámite requerido</p>
        </div>
        <div id="section27"> 
          <h1>Buscar Usuario</h1>
          <img src="bususuario.png" class="img-rounded">
          <p>Redirige al Perfil del usuario</p>
        </div>    


      </div>


    </div>
  </div>

</body>

@endsection
