@extends('template')

@section('title','Notas en Agenda')


@section('script2')
<script src="{{asset('js/alertify.min.js')}}"></script>
 <link rel="stylesheet" type="text/css" href="{{asset('css/alertify.min.css')}}" >

@endsection


@section('content')




<form method="POST" action="{{asset('notas/todos')}}">
  {{ csrf_field()}}

<div class="row">

      <div class="row">
        <button type="button" class="btn btn-success" value="Personal" onclick="Personal()">Personal</button>
        <button type="button" class="btn btn-info" value="Publico" onclick="Publico()">Público</button>
        <button type="button" id="crear-nota" class="btn btn-danger" value="Crear">Crear Nueva Nota</button>
<!--
        <div class="col-xs-2 col-md-2 col-lg-2 col-xs-offset-4 col-md-offset-2 col-lg-offset-2">
        </div>
        <div class="col-xs-2 col-md-2 col-lg-2 col-xs-offset-1 col-md-offset-2 col-lg-offset-2">
        </div>

        <div class="col-xs-2 col-md-2 col-lg-2 col-xs-offset-5 col-md-offset-3 col-lg-offset-3">
        </div>
      </div>
-->



  </div>


  <div class="row">




          <br><br>
          <div class="container bootstrap snippet">

              <div class="notas">


                <div class="row">
                  <ul class="notes">

                      @foreach($personal as $nota)
                          <li>
                              <div class="rotate-1 green-bg">
                                  <small>Fecha: {{$nota->created_at}}
                                    <br>
                                          Autor: {{$nota->nombreE.' '.$nota->apellido}}
                                  </small>
                                    <br>
                                  <h4>{{$nota->nombreN}}</h4>
                                  <p>{{$nota->descripcion}}</p>


                                  <a href="{{asset('notas')}}{{'/'.$nota->id.'/editar'}}" id="edit" class="text-danger pull-left"><i class="fa fa-pencil-square-o "></i></a>
                                  <a href="{{asset('notas')}}{{'/'.$nota->id.'/eliminar'}}" id="delete" class="text-danger pull-right"><i class="fa fa-trash-o "></i></a>
                              </div>
                          </li>
                        @endforeach

                </ul>
              </div>

              <div class="row">
                  {{$personal->render()}}

              </div>




              </div>

          </div>





      </div>


</div>






</form>



<script type="text/javascript">

   function loadCSS(filename){

      var file = document.createElement("link");
      file.setAttribute("rel", "stylesheet");
      file.setAttribute("type", "text/css");
      file.setAttribute("href", filename);
      document.head.appendChild(file);

   }


  //just call a function to load a new CSS:
  loadCSS("{{asset('css/notas.css')}}");

</script>


<script>

function Personal(){
  $.ajax({
    /*
    url: route,
    data: {page: page},*/

    url:  '?personal=1',

    type: 'GET',
    dataType: 'json',
    data: {id:"personal"},
    success: function(data){
      //console.log(data1);

      console.log('personal ajax');
          $(".notas").html(data);

    }
   });
}

</script>

<script>

function Publico(){
  $.ajax({
    /*
    url: route,
    data: {page: page},*/

    url:  '?publico=1',

    type: 'GET',
    dataType: 'json',
    data: {id:"publico"},
    success: function(data){
      //console.log(data1);

      console.log('publico ajax');
      console.log(data);
          $(".notas").html(data);

    }
   });
}


</script>

<script>

$(document).on('click','.pagination a',function(e){
  e.preventDefault();
  /*
  var p = $(this).attr('href').split('=');
  var page = p[1];
  var route = p[0];
  console.log(page);
  console.log(route);*/

  var $tmp = $(this).attr('href').split('=')[0].split('?')[1];
  console.log($(this).attr('href'));


  if ( $tmp == 'personal') {
    var page = $(this).attr('href').split('personal=')[1];
    var nota = $tmp;
  } else {
    var page = $(this).attr('href').split('publico=')[1];
    var nota = $tmp;
  }
  console.log($tmp);
  $.ajax({
    /*
    url: route,
    data: {page: page},*/

    url:  '?'+nota+ '=' + page,

    type: 'GET',
    dataType: 'json',
    data: {id:nota},
    success: function(data){
      //console.log(data1);

      console.log(data);
          $(".notas").html(data);

    }

  });


});

</script>




  <!-- the form to be viewed as dialog-->
  <form id="new-nota" method="POST" action="{{asset('notas/crear')}}">
  	{{ csrf_field()}}
<div id="form">


</div>
  </form>





<script>
     function showhide()
     {
           var div = document.getElementById("newpost");
    if (div.style.display !== "none") {
        div.style.display = "none";
    }
    else {
        div.style.display = "block";
    }
     }
  </script>


<script>

  $(document).ready(function(){

    $("#crear-nota").click(function(){

      $("#form").html("<div class='row'><div class='col-md-6 col-md-offset-3'>    <h2><p class='text-center'>  Crear Nota </p></h2><input type='hidden' name='areas_id' value='{{Auth::user()->empleado->area->id}}''><input type='hidden' name='empleados_id' value='{{Auth::user()->empleado->id}}'><div class='form-group'>  <label for='nomArea'> Nombre de la nota: </label>  <input type='text' class='form-control' placeholder='Nombre' name='nombre' id='nombre' required='true'></div><div class='form-group'>  <label for='descripcion'> Nota: </label>  <textarea type='text' class='form-control' placeholder='Ingrese la descripción'  name='descripcion' id='descripcion' required='true'></textarea></div><div class='form-group'>  <label for='priv'>Privacidad </label>    <select name='personal' type='text' class='form-control' id='personal' name='personal' required='true'>  <option value='' >Seleccionar Privacidad</option><option value='1'>Personal</option><option value='0'>Público</option></select></div><button type='submit' class='btn btn-primary' value='Submit'>Crear</button>    </div>  </div>");
      alertify.genericDialog || alertify.dialog('genericDialog',function(){
  return {
      main:function(content){
          this.setContent(content);
      },
      setup:function(){
          return {
              focus:{
                  element:function(){
                      return this.elements.body.querySelector(this.get('selector'));
                  },
                  select:true
              },
              options:{
                  basic:true,
                  maximizable:false,
                  resizable:false,
                  padding:false
              }
          };
      },
      settings:{
          selector:undefined
      }
  };
});
//force focusing password box
alertify.genericDialog ($('#new-nota')[0]).set('selector', 'input[type="password"]');

    });

  });

</script>

<script>

$(document).ready(function(){

  $("#edit").click(function(e){
    e.preventDefault();
    var $tmp = $(this).attr('href');
    console.log($tmp);
    alertify.genericDialog || alertify.dialog('genericDialog',function(){
return {
    main:function(content){
        this.setContent(content);
    },
    setup:function(){
        return {
            focus:{
                element:function(){
                    return this.elements.body.querySelector(this.get('selector'));
                },
                select:true
            },
            options:{
                basic:true,
                maximizable:false,
                resizable:false,
                padding:false
            }
        };
    },
    settings:{
        selector:undefined
    }
};
});
//force focusing password box
alertify.genericDialog ($('#tmp')[0]).set('selector', 'input[type="password"]');

  });

});


</script>



@endsection
