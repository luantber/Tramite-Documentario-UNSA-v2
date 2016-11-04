@extends('template')

@section('title','Nota en Agenda')

@section('content')

<form method="POST" action="{{asset('notas/todos')}}">
  {{ csrf_field()}}

  <div class="container">

    <ul class="nav nav-tabs">

      <li class="active"><a href="#Personales" data-toggle="tab"> Personales </a><li>
      <li><a href="#Area" data-toggle="tab"> Area </a><li>

    </ul>

    <div class="tab-content">

      <div class="tab-pane fade in active" id="Personales">

          <br>
          <div class="container bootstrap snippet">
              <div class="row">
                <ul class="notes">
                      <li>
                          <div class="rotate-1 lazur-bg">
                              <small>12:03:28 12-04-2014</small>
                              <h4>Recoger documentos de María</h4>
                              <p>Tengo que recoger los papeles del aula 102 a las 3.</p>
                              <a href="#" class="text-danger pull-right"><i class="fa fa-trash-o "></i></a>
                          </div>
                      </li>
                      <li>
                          <div class="rotate-2 red-bg">
                              <small>12:03:28 12-04-2014</small>
                              <h4>Awesome date</h4>
                              <p>The years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                              <a href="#" class="text-danger pull-right"><i class="fa fa-trash-o "></i></a>
                          </div>
                      </li>
                      <li>
                          <div class="rotate-1 yellow-bg">
                              <small>12:03:28 12-04-2014</small>
                              <h4>Awesome project</h4>
                              <p>The years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                              <a href="#" class="text-danger pull-right"><i class="fa fa-trash-o "></i></a>
                          </div>
                      </li>

                      <li>


              </ul>
            </div>

            <div class="row  col-md-offset-9">

              <nav>

                <ul class="pagination">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>

              </nav>

            </div>

          </div>




      </div>

      <div class="tab-pane fade" id="Area">

        <br>
        <div class="container bootstrap snippet">
            <div class="row">
              <ul class="notes">
                    <li>
                        <div class="rotate-1 lazur-bg">
                            <small>12:03:28 12-04-2014</small>
                            <h4>Recoger documentos de Juana</h4>
                            <p>Tengo que recoger los papeles del aula 103 a las 5.</p>
                            <a href="#" class="text-danger pull-right"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="rotate-2 red-bg">
                            <small>12:03:28 12-04-2014</small>
                            <h4>Awesome date</h4>
                            <p>The years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                            <a href="#" class="text-danger pull-right"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="rotate-1 yellow-bg">
                            <small>12:03:28 12-04-2014</small>
                            <h4>Awesome project</h4>
                            <p>The years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                            <a href="#" class="text-danger pull-right"><i class="fa fa-trash-o "></i></a>
                        </div>
                    </li>

                    <li>


            </ul>
          </div>

          <div class="row  col-md-offset-9">

            <nav>

              <ul class="pagination">
                  <li class="disabled"><a href="#">&laquo;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">&raquo;</a></li>
              </ul>

            </nav>

          </div>


        </div>


      </div>

    </div>

  </div>
</form>



@endsection
