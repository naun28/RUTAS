@extends('layouts.app')

@section('content')
<div class="row">
    
        <div class="wrapper wrapper-content animated ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Agendar Rutas</h5>

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
                                            <th>Clave</th>
                                            <th>Escuela</th>
                                            <th>Localidad</th>
                                            <th>Municipio</th>
                                            <th>Zona</th>
                                            <th>N. Equipos</th>
                                            <th>Año de Equipo</th>
                                            <th>Conectividad</th>
                                            <th>Motivo</th>
                                            <th>Agendar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td>26ETVD029H</td>
                                            <td>TELESECUNDARIA 29</td>
                                            <td>El GUamuchil</td>
                                            <td class="center">Alamos</td>
                                            <td class="center">901</td>
                                            <td>4</td>
                                            <td>2004</td>
                                            <td class="center">Satelital</td>
                                            <td class="center">Mant.Completo</td>
                                            <td> {{--Boton Modal--}}
                                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><li class="fa fa-plus-square"></li> Agendar</button>
                                            </td>
                                             {{--Estructura del Modal--}}
                                            <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content animated">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                            <i class="fa fa-laptop modal-icon"></i>
                                                            <h4 class="modal-title">Agregar Ruta</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="formLimpiar">
                                                            <div class="form-group">
                                                                <label>Escuela</label><input type="text" placeholder="Escuela" class="form-control">
                                                            </div>
                                                            {{-- <div class="form-group">
                                                                <label>Semanas</label><input class="form-control" type="text" name="daterange" placeholder="Escuela" value="01/01/2015 - 01/31/2015" />
                                                            </div> --}}
                                                            <div class="form-group" id="data_5">
                                                                <label>Fecha</label>
                                                                <div class="input-daterange input-group" id="datepicker">
                                                                    <input type="text" class="input-sm form-control" name="start" value="05/14/2014"/>
                                                                    <span class="input-group-addon">Al</span>
                                                                    <input type="text" class="input-sm form-control" name="end" value="05/22/2014" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Jefe de Brigada</label> <select name="status" id="status" class="form-control">
                                                                    <option value="1" selected>Jesus Sabori</option>
                                                                    <option value="2">Carlos Lafarga</option>
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
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Brigada</label> <select name="status" id="status" class="form-control">
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
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Escuela</label><input type="text" placeholder="Escuela" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Escuela</label><input type="text" placeholder="Escuela" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Escuela</label><input type="text" placeholder="Escuela" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button id="btnLimpiar" type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                                            <button type="submit" class="btn btn-danger">Aceptar</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </tr>
                                        <tr class="gradeX">
                                            <td>26ETVD029H</td>
                                            <td>TELESECUNDARIA 29</td>
                                            <td>El GUamuchil</td>
                                            <td class="center">Alamos</td>
                                            <td class="center">901</td>
                                            <td>4</td>
                                            <td>2004</td>
                                            <td class="center">Satelital</td>
                                            <td class="center">Mant.Completo</td>
                                             <td> {{--Boton Modal--}}
                                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><li class="fa fa-plus-square"></li> Agendar</button>
                                            </td>
                                            
                                        </tr>
                                       
                                       <tr class="gradeX">
                                            <td>26ETVD029H</td>
                                            <td>TELESECUNDARIA 29</td>
                                            <td>El GUamuchil</td>
                                            <td class="center">Alamos</td>
                                            <td class="center">901</td>
                                            <td>4</td>
                                            <td>2004</td>
                                            <td class="center">Satelital</td>
                                            <td class="center">Mant.Completo</td>
                                             <td> {{--Boton Modal--}}
                                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><li class="fa fa-plus-square"></li> Agendar</button>
                                            </td>
                                         
                                            
                                        </tr>
                                       
                                       <tr class="gradeX">
                                            <td>26ETVD029H</td>
                                            <td>TELESECUNDARIA 29</td>
                                            <td>El GUamuchil</td>
                                            <td class="center">Alamos</td>
                                            <td class="center">901</td>
                                            <td>4</td>
                                            <td>2004</td>
                                            <td class="center">Satelital</td>
                                            <td class="center">Mant.Completo</td>
                                             <td> {{--Boton Modal--}}
                                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><li class="fa fa-plus-square"></li> Agendar</button>
                                            </td>
                                            
                                            
                                        </tr>
                                       
                                       <tr class="gradeX">
                                            <td>26ETVD029H</td>
                                            <td>TELESECUNDARIA 29</td>
                                            <td>El GUamuchil</td>
                                            <td class="center">Alamos</td>
                                            <td class="center">901</td>
                                            <td>4</td>
                                            <td>2004</td>
                                            <td class="center">Satelital</td>
                                            <td class="center">Mant.Completo</td>
                                             <td> {{--Boton Modal--}}
                                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><li class="fa fa-plus-square"></li> Agendar</button>
                                            </td>
                                            
                                            
                                        </tr>
                                       
                                       <tr class="gradeX">
                                            <td>26ETVD029H</td>
                                            <td>TELESECUNDARIA 29</td>
                                            <td>El GUamuchil</td>
                                            <td class="center">Alamos</td>
                                            <td class="center">901</td>
                                            <td>4</td>
                                            <td>2004</td>
                                            <td class="center">Satelital</td>
                                            <td class="center">Mant.Completo</td>
                                             <td> {{--Boton Modal--}}
                                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><li class="fa fa-plus-square"></li> Agendar</button>
                                            </td>
                                           
                                            
                                        </tr>
                                       
                                       <tr class="gradeX">
                                            <td>26ETVD029H</td>
                                            <td>TELESECUNDARIA 29</td>
                                            <td>El GUamuchil</td>
                                            <td class="center">Alamos</td>
                                            <td class="center">901</td>
                                            <td>4</td>
                                            <td>2004</td>
                                            <td class="center">Satelital</td>
                                            <td class="center">Mant.Completo</td>
                                             <td> {{--Boton Modal--}}
                                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><li class="fa fa-plus-square"></li> Agendar</button>
                                            </td>
                                            
                                            
                                        </tr>
                                       
                                       
                                       
                                    </tbody>
                                    <tfoot>
                                       <tr>
                                            <th>Clave</th>
                                            <th>Escuela</th>
                                            <th>Localidad</th>
                                            <th>Municipio</th>
                                            <th>Zona</th>
                                            <th>N. Equipos</th>
                                            <th>Año de Equipo</th>
                                            <th>Conectividad</th>
                                            <th>Motivo</th>
                                            <th>Agendar</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection