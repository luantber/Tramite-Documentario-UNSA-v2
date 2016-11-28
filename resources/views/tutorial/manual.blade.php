@extends('template')

@section('title','Tutorial')

@section('content')


<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

  <div class="container">
    <div class="row">
      <nav class="col-sm-3" id="myScrollspy">
        <ul class="nav nav-pills nav-stacked">
          <li><a href="#section1">Inicio</a></li>
          <li><a href="#section2">Mis Trámites</a></li>
          <li><a href="#section3">Panel</a></li>
          <li><a href="#section4">Agenda</a></li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#section5">Areas<span class="caret"></span></a>
            <ul class="dropdown-menu">

              <li><a href="#section51">Nuevo</a></li>
              <li><a href="#section52">Editar</a></li>
              <li><a href="#section53">Todos</a></li>
              <li><a href="#section54">Buscar</a></li>

            </ul>
          </li>



          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#section6">Cargos<span class="caret"></span></a>
            <ul class="dropdown-menu">

              <li><a href="#section61">Nuevo</a></li>
              <li><a href="#section62">Editar</a></li>
              <li><a href="#section63">Todos</a></li>

            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#section7">Usuarios<span class="caret"></span></a>
            <ul class="dropdown-menu">

              <li><a href="#section71">Nuevo</a></li>
              <li><a href="#section72">Editar</a></li>
              <li><a href="#section73">Todos</a></li>
              <li><a href="#section74">Buscar</a></li>

            </ul>
          </li>


              <li><a href="#section8">Estadística</a></li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#section9">Empleados<span class="caret"></span></a>
            <ul class="dropdown-menu">

              <li><a href="#section91">Nuevo</a></li>
              <li><a href="#section92">De usuario a Empleado</a></li>
              <li><a href="#section93">Editar empleado</a></li>
              <li><a href="#section94">Todos</a></li>
              <li><a href="#section95">Nuevo estado</a></li>
              <li><a href="#section96">Todos los estados</a></li>
              <li><a href="#section97">Buscar</a></li>

            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#section10">Trámite<span class="caret"></span></a>
            <ul class="dropdown-menu">

              <li><a href="#section101">Nuevo</a></li>
              <li><a href="#section102">Todos</a></li>
              <li><a href="#section103">Editar Trámite</a></li>
              <li><a href="#section104">Nuevo estado</a></li>
              <li><a href="#section105">Todos estados</a></li>
              <li><a href="#section106">Nuevo Tipo trámite</a></li>
              <li><a href="#section107">Todos Tipo trámites</a></li>
              <li><a href="#section108">Buscar</a></li>

            </ul>
          </li>


        



        </ul>
      </nav>


      <div class="col-sm-9">
        <div id="section1"> 
          <h2 class="text center">Inicio</h2>
          <p>Bienvenido a Tramite documentario</p>
          <img src="{{URL::asset('imagenes/inicio.png')}}" class="img-responsive center-block" >
          <hr></hr>
          <p>Para ingresar a su cuenta tendra que proporcionar su correo electronico , con su respectiva contraseña</p>
          <p>Si no puede estrar una de la razones puede ser, que no aya activado su cuenta . Para activar la cuenta es desde su e-mail, ahi tambien le pediran crear su contraseña</p>
          <img src="{{URL::asset('imagenes/login.png')}}" class="img-responsive center-block">
        </div>

        <div id="section2"> 
          <h2 class="text center">Mis Trámites</h2>
          <hr></hr>
          <p>Principalmente esta opción esta hecha para el usuario, con el fin de que pueda ver los tramites que ha realizado</p>
          <img src="{{URL::asset('imagenes/mismovimientos0...png')}}" class="img-responsive center-block" >
        </div>

        <div id="section3"> 
          <h2 class="text center">Panel</h2>
          <hr></hr>
          <p>Se pueden visualizar aquellos tramites que han sido asignados , ya sea a una área, o encargado del área. </p>
          <img src="{{URL::asset('imagenes/')}}" class="img-responsive center-block" >
        </div>

        <div id="section4"> 
          <h2 class="text center">Agenda</h2>
          <hr></hr>
          <p>Esta sección se puede crear notas, recordatorios, fechas importantes,etc.</p>
          <p>Tiene las opciones de privacidad, solo disponible para los empleados.</p>
          <img src="{{URL::asset('imagenes/')}}" class="img-responsive center-block" >
        </div>

        <!--Areas-->
        <div id="section51"> 
          <h2 class="text center">Nuevo</h2>
          <hr></hr>
          <p>Simplemente llenar lo que se pide</p>
          <p class = "text-danger">No se puede crear dos áreas iguales.</p>
          <img src="{{URL::asset('imagenes/creararea.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section52"> 
          <h2 class="text center">Editar</h2>
          <hr></hr>
          <p>Si uno cómete cualquier tipo de error, exite la funcion "Editar", lo cual nos permítira corregir aquel error.</p>
          <img src="{{URL::asset('imagenes/ediarea.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section53"> 
          <h2 class="text center">Todos</h2>
          <hr></hr>
          <p>Para visualizar aquellas áreas creadas, solo ir a "Todos".</p>
          <img src="{{URL::asset('imagenes/todosarea.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section54"> 
          <h2 class="text center">Buscar</h2>
          <hr></hr>
          <p>Son demasiadas áreas, solo ir a la opción buscar, y la encontrarás</p>
          <img src="{{URL::asset('imagenes/busarea.png')}}" class="img-responsive center-block" >
        </div>

        <!--Cargos-->


        <div id="section61"> 
          <h2 class="text center">Nuevo</h2>
          <hr></hr>
          <p>Si uno cómete cualquier tipo de error, exite la funcion "Editar", lo cual nos permítira corregir aquel error.</p>
          <img src="{{URL::asset('imagenes/crearcargo.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section62"> 
          <h2 class="text center">Editar</h2>
          <hr></hr>
          <p>Para visualizar aquellas áreas creadas, solo ir a "Todos".</p>
          <img src="{{URL::asset('imagenes/edicargo.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section63"> 
          <h2 class="text center">Todos</h2>
          <hr></hr>
          <p>Son demasiadas áreas, solo ir a la opción buscar, y la encontrarás</p>
          <img src="{{URL::asset('imagenes/todoscargo.png')}}" class="img-responsive center-block" >
        </div>

        <!--Usuarios-->

        <div id="section71"> 
          <h2 class="text center">Nuevo</h2>
          <hr></hr>
          <p>Un usuarios solo tiene permiso, para ver sus trámites.</p>
          <p class = "text-danger">No se puede crear dos usuarios iguales.</p>
          <img src="{{URL::asset('imagenes/crearusuario.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section72"> 
          <h2 class="text center">Editar</h2>
          <hr></hr>
          <p>Si uno cómete cualquier tipo de error, exite la funcion "Editar", lo cual nos permítira corregir aquel error.</p>
          <p class = "text-danger">El mismo usuario tambien puede editar.</p>
          <img src="{{URL::asset('imagenes/ediusuario.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section73"> 
          <h2 class="text center">Todos</h2>
          <hr></hr>
          <p>Para visualizar todos los usuarios creados, solo ir a "Todos".</p>
          <img src="{{URL::asset('imagenes/todosusuarios.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section74"> 
          <h2 class="text center">Buscar</h2>
          <hr></hr>
          <p>Desea Crear un trámite, solo ir a la opción buscar,y encontrará al usuario deseado</p>
          <img src="{{URL::asset('imagenes/bususuario.png')}}" class="img-responsive center-block" >
        </div>

        <!--Estadistica-->

        <div id="section8"> 
          <h2 class="text center">Estadística</h2>
          <hr></hr>
          <p>Un usuarios solo tiene permiso, para ver sus trámites.</p>

          <img src="{{URL::asset('imagenes/')}}" class="img-responsive center-block" >
          <img src="{{URL::asset('imagenes/')}}" class="img-responsive center-block" >
        </div>

        <!--Empleados-->

        <div id="section91"> 
          <h2 class="text center">Nuevo</h2>
          <hr></hr>
          <p>CUando se crea un empleado, ya existe como usuario</p>
          <p class = "text-danger">Solo se puede eliminar un empleado, no el usuario como tal.</p>
          <img src="{{URL::asset('imagenes/crear empleado.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section92"> 
          <h2 class="text center">De Usuarios a Empleado</h2>
          <hr></hr>
          <p>Existe un usuario, ahora es empleado, esta opcion nos permite crear un empleado cuando ya existe como usuario</p>
          <img src="{{URL::asset('imagenes/deusuaem.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section93"> 
          <h2 class="text center">Editar Empleado</h2>
          <hr></hr>
          <p>Asi como el usuario puede editar su perfil, tambien un empleado</p>
          <img src="{{URL::asset('imagenes/ediempleados.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section94"> 
          <h2 class="text center">Todos</h2>
          <hr></hr>
          <p>Todos los empleados que necesites en el momento.</p>
          <img src="{{URL::asset('imagenes/todosempleados.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section95"> 
          <h2 class="text center">Nuevo Estado</h2>
          <hr></hr>
          <p>Crea un estado para el trámite</p>
          <p class = "text-danger">No se puede crear dos estados iguales.</p>
          <img src="{{URL::asset('imagenes/crearestadoem.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section96"> 
          <h2 class="text center">Todos Estados</h2>
          <hr></hr>
          <p>Ver los estados creados.</p>
          <img src="{{URL::asset('imagenes/todosestadoem.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section97"> 
          <h2 class="text center">Buscar</h2>
          <hr></hr>
          <p>Buscar un empleado, para cualquier requerimiento.</p>
          <img src="{{URL::asset('imagenes/busempleado.png')}}" class="img-responsive center-block" >
        </div>

        <!--Tramite-->

        <div id="section91"> 
          <h2 class="text center">Nuevo</h2>
          <hr></hr>
          <p>Solo un area puede crear trámite. </p>
          <p class = "text-danger">No se puede borrar tramites.</p>
          <img src="{{URL::asset('imagenes/creartramite.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section92"> 
          <h2 class="text center">Todos</h2>
          <hr></hr>
          <p>Ver todos los tramites que existen </p>
          <img src="{{URL::asset('imagenes/vertramite.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section93"> 
          <h2 class="text center">Editar Trámite</h2>
          <hr></hr>
          <p>Los usuarios no pueden editar un trámite.</p>
          <img src="{{URL::asset('imagenes/')}}" class="img-responsive center-block" >
        </div>

        <div id="section94"> 
          <h2 class="text center">Nuevo Estado</h2>
          <hr></hr>
          <p>La opción nos indica poder crear un nuevo estado para un trámite.</p>
          <img src="{{URL::asset('imagenes/crearestado.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section95"> 
          <h2 class="text center">Todos Estados</h2>
          <hr></hr>
          <p>Todos los estados ya creados para un trámite.</p>
          <img src="{{URL::asset('imagenes/todosestados.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section96"> 
          <h2 class="text center">Nuevo Tipo Trámite</h2>
          <hr></hr>
          <p>Crea todos los tipos trámite que necesite.</p>
          <img src="{{URL::asset('imagenes/creartipot.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section97"> 
          <h2 class="text center">Todos Tipo Trámites</h2>
          <hr></hr>
          <p>Todos los tipos de trámites qeu usted creó.</p>
          <img src="{{URL::asset('imagenes/todostipot.png')}}" class="img-responsive center-block" >
        </div>

        <div id="section98">
          <h2 class ="text center" >Buscar</h2>
          <hr></hr>
          <p>Busca cualquier tramite que desee.</p>
          <img src="{{URL::asset('imagenes/Bustramite.png')}}" class="img-responsive center-block" >
        </div>











    </div>
  </div>

</body>

@endsection
