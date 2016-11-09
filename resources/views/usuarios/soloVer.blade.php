<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Perfil de:  {{ $user->nombre }}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre: </td>
                        <td>{{ $user->nombre }}</td>
                      </tr>
                      <tr>
                        <td>Apellidos: </td>
                        <td>{{ $user->apellido}}</td>
                      </tr>
                      <tr>
                        <td>DNI:</td>
                        <td>{{ $user-> dni }}</td>
                      </tr>
                      <tr>
                        <td> e-mail: </td>
                        <td>{{$user -> email}}</td>
                      </tr>
                     
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
                 <div class="panel-footer">
                 
                        <a href="{{asset('usuarios')}}{{'/'.$user->id.'/editar'}}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>

                    </div>
            
          </div>
        </div>