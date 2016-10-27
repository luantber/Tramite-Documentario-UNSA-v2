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

            <a class="navbar-brand" href="#">Tramite Documentario</a>

          </div>


          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->

        </div><!--/.container-fluid -->
      </nav>









<div class="container">
	@section('body')
	@show	
</div>

    <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>