@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col 12 ">
        <div class="ibox float-e-margins">
            <div class="ibox-title"><h5>Listado </h5>
              
            </div>

            
        </div>
    </div>
     <div >
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Generar reportes</h5>
                         {{--<div class="ibox-tools">
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
                        </div> --}}
                    </div>
                    <div class="ibox-content">
                    
                        <div class="form-group " id="data_5">
                            <center><b><label class="font-normal">Selecciona el rango de fechas que desea buscar</label></b>
                                 <div class="form-group" id="data_5">
                                                                <label>Fecha</label>
                                                                <div class="input-daterange input-group" id="datepicker">
                                                                    <input type="text" class="input-sm form-control" name="start" value="05/14/2014"/>
                                                                    <span class="input-group-addon">Al</span>
                                                                    <input type="text" class="input-sm form-control" name="end" value="05/22/2014" />
                                                                </div>
                                                            </div>
                            </center>

                        


                        
                        </div>
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Lugar(es)</th>
                                    <th data-hide="phone,tablet">Fechas</th>
                                    <th data-hide="phone,tablet">Escuelas</th>
                                    <th data-hide="phone,tablet">Dias</th>
                                    <th data-hide="phone,tablet">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="gradeX">
                                    <td>Ramón Rodriguez</td>
                                    <td>Guaymas
                                    </td>
                                    <td>12-03-2018</td>
                                    <td class="center">00XXXXXXXX</td>
                                    <td class="center"> 2 </td>
                                    <td class="center"> <input class="btn btn-danger" type="button" name="" value="Ver a detalle"> </td>
                                </tr>
                                <tr class="gradeC">
                                    <td>Naun Lara</td>
                                    <td>Empalme
                                    </td>
                                    <td>15-03-2018</td>
                                    <td class="center">00XXXXXXXX</td>
                                    <td class="center"> 3 </td>
                                    <td class="center"> <input class="btn btn-danger" type="button" name="" value="Ver s detalle"> </td>
                                </tr>
                                <tr class="gradeA">
                                    <td>Alberto Rodriguez</td>
                                    <td>Navojoa
                                    </td>
                                    <td>20-03-2018</td>
                                    <td class="center">00XXXXXXXX</td>
                                    <td class="center"> 3 </td>
                                    <td class="center"> <input class="btn btn-danger" type="button" name="" value="Ver a detalle"> </td>
                                </tr>
                                
                                </tbody>
                    <tfoot>
                    <tr>
                        <th>[Campo]</th>
                        <th>[Campo]</th>
                        <th>[Campo]</th>
                        <th>[Campo]</th>
                        <th>[Campo]</th>
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
@endsection