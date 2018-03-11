@extends('layouts.app')

@section('content')
 <div class="ibox float-e-margins">
            <div class="ibox-title"><h5>Registro de Usuarios</h5>

            </div>
        </div>

   {{--  <div class="row col-lg-14 ">
     <div class="ibox-content m-b-sm border-bottom">
        <form name="form-usu" method="POST" action="">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label" for="product_name">Nombre(s)</label>
                            <input type="text"  pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" id="product_name" name="product_name" value="" placeholder="Nombre(s)" class="form-control" required="Nombre">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label" for="price">Apellido(s)</label>
                            <input type="text" pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" id="price" name="price" value="" placeholder="Apellido(s)" title="Solo Permite Letras"  class="form-control" required="Apellido">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label" for="puesto">Tipo de Empleado</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" selected>Brigada</option>
                                <option value="2">Jefe de Brigada</option>
                                <option value="3">Mesa de Apoyo</option>
                                <option value="4">Administrador</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label" for="price">Telefono</label>
                            <input type="tel" pattern="^(\d{10})$" id="price" name="price" value="" placeholder="Telefono" maxlength="10"  title="Formato 000-0000000" class="form-control" required="Telefono">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label" for="price">Correo</label>
                            <input type="email" title="Formato@ejemplo.com" id="price" name="price" value="" placeholder="Correo" class="form-control" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-2">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="control-label" for="pass">Contraseña</label>
                        <input type="password" pattern="[A-Za-z0-9!?-]{6,12}" class="form-control" placeholder="Contraseña" name="password" required>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    </div>
                     
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label" for="boton">&nbsp</label><br>
                            <button type="submit" class="btn btn-danger btn btn-xs" ><li class="fa fa-plus-square"></li> Agregar</button>
                        </div>
                    </div>
                  </div>
                  </form>
            </div>
  </div> --}}
  <div class="wrapper wrapper-content animated ">
            <div class="row">
                <div class="col-lg-60">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            {{--Boton Modal--}}
                            <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><li class="fa fa-plus-square"></li> Agregar Usuario</button>
                             {{--Estructura del Modal--}}
                            <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content animated">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                            <i class="fa fa-user-circle modal-icon"></i>
                                            <h4 class="modal-title">Agregar Usuario</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form class="form-group">
                                            <div class="form-group col-md-4">
                                                <label>Nombre(s)</label><input type="text" placeholder="Nombre(s)" class="form-control
                                                " pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label>Apellido(s)</label><input type="text" placeholder="Apellido(s)" class="form-control" pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" title="Solo Permite Letras" required="">
                                            </div>
                                             <div class="form-group col-md-4">
                                                <label>Telefono</label><input type="text" placeholder="Telefono" class="form-control" pattern="^(\d{10})$" maxlength="10"  title="Formato 000-0000000" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Correo</label><input type="email" placeholder="Correo" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label>Contraseña</label><input type="password" placeholder="Contraseña" class="form-control" pattern="[A-Za-z0-9!?-]{6,12}" required="">
                                            </div>
                                            <div class="form-group ">
                                                <label>Tipo de Usuario</label> <select name="tipouser" id="tipouser" class="form-control" onkeyup="habilitar" required="">
                                                    <option value="1" selected>Brigadista</option>
                                                    <option value="2">Jefe de Brigada</option>
                                                    <option value="3">Mesa de Apoyo</option>
                                                    <option value="4">Administrador</option>
                                                </select>
                                            </div>
                                            <div id="ver">
                                              <div id="1"  class="form-group">
                                                <label>N° de brigada</label> <select name="brigada" class="form-control">
                                                    <option value="1" selected>1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-danger">Aceptar</button>
                                        </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                             {{--Estructura de la tabla --}}
                   
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                        <tr>
                                            <th>Nombre(s)</th>
                                            <th>Apellido(s)</th>
                                            <th>Telefono</th>
                                            <th>Tipo de Empleado</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeB">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="center">4</td>
                                            
                                        </tr>
                                        <tr class="gradeB">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="center">5</td>
                                           
                                        </tr>
                                        <tr class="gradeB">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 5.5
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="center">5.5</td>
                                        
                                        </tr>
                                        <tr class="gradeB">
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 6
                                            </td>
                                            <td>Win 98+</td>
                                            <td class="center">6</td>
                                           
                                        </tr>
                                        <tr class="gradeB">
                                            <td>Trident</td>
                                            <td>Internet Explorer 7</td>
                                            <td>Win XP SP2+</td>
                                            <td class="center">7</td>
                                           
                                        </tr>
                                        <tr class="gradeB">
                                            <td>Trident</td>
                                            <td>AOL browser (AOL desktop)</td>
                                            <td>Win XP</td>
                                            <td class="center">6</td>
                                            
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                         <tr>
                                            <th>Nombre(s)</th>
                                            <th>Apellido(s)</th>
                                            <th>Telefono</th>
                                            <th>Tipo de Empleado</th>
                                           
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
  </div>



{{-- <div class="middle-box text-center loginscreen   animated fadeInDown">

    <div>
        <div> <h1 class="logo-name">SEC</h1></div>
        <h3>Registrar Usuario</h3>
        
        <form class="m-t" role="form"  method="POST" action="#">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" placeholder="Correo" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirmar Contraseña" name="password_confirmation" required>
          </div>
          <button type="submit" class="btn btn-danger block full-width m-b">Registrar</button>
        </form>
        <p class="m-t"> <small>Secretaria de Educacion y Cultura &copy; {{ date('Y') }}</small> </p>
    </div>
  </div> --}} 

@endsection
