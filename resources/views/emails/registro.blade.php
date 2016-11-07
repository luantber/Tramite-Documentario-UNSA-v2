<!DOCTYPE html> 
  <head> 
    <link rel="stylesheet" type="text/css" href="{{asset('css/paleta.css')}}"> 
    <link href="{{asset('fonts/font-awesome.min.css')}}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> 
    <script src="{{asset('js/jquery.js')}}"></script> 
  </head> 
 
  <body> 
        <nav class="navbar navbar-default default-primary-color" > 
          <table>
          

            <td>
              <div align="center">
                <h2>Tramite Documentario</h2> 
                
              </div>
            </td>
          </table>
          
       
        </nav> 

        <div class="container">
          @if(isset($email))
            Hola, {{$nombre}} <br>
            Bienvenido a tramite Documentario.
            <br>
            Puede activar su cuenta con este <a href="{{url('/usuarios/'.$email.'/activar')}}">enlace.</a>
          @else
            <h2>No perteneces aquí</h2>
          @endif
        </div>
  </body> 
</!DOCTYPE>