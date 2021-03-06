@extends('layouts.app')

@section('content')
<div class="row">
   <!--********************************************************************* -->
   <div class="col-lg-12">
    <div class="tabs-container">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab-1"> Agendar Ruta</a></li>
        <li class=""><a data-toggle="tab" href="#tab-2">Rutas Agendadas</a></li>
    </ul>
    <div class="tab-content">
       <div id="tab-1" class="tab-pane active">
        <div class="panel-body">
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
                                            <form id="formLimpiar" method="post" action="#">
                                                <div class="form-group">
                                                    <label>Clave</label><input type="text" placeholder="Clave" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Escuela</label><input type="text" placeholder="Escuela" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Municipio</label><input type="text" placeholder="Municipio" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Domicilio</label><input type="text" placeholder="Domicilio" class="form-control">
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
                                                <div class="form-group col-md-7">
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
                                                <div class="form-group col-md-4">
                                                    <label>Brigada</label>
                                                    <input type="text" placeholder="Brigada" readonly="Brigada" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Integrantes</label>
                                                    <textarea type="text" placeholder="Integrantes" readonly="Integrantes"  class="form-control" style="min-height: 100px; max-height: 100px; min-width: 550px; max-width: 550px;">
                                                        
                                                    </textarea>
                                                    
                                                </div>
                                                
                                                <div class="modal-footer">
                                                    <button id="btnLimpiar" type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-danger">Aceptar</button>
                                                </div>
                                            </form>
                                        </div>
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
<div id="tab-2" class="tab-pane">
    <div class="panel-body">
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




   <!--********************************************************************* -->
    
        

@endsection