@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col 12 ">
        <div class="ibox float-e-margins">
            <div class="ibox-title"><h5>Reportes</h5></div>
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
                            <div class=" input-group" id="datepicker">
                                <form class="form-group" action="#" method="POST">
                                <center><b><span class="input-group-addon">Fecha inicial</span></b></center>
                                <input type="text" class="input-daterange input-sm form-control" name="start" value="01/01/2018"/>
                                <center><b><span class="input-group-addon">Fecha final</span></b></center>
                                <input type="text" class="input-daterange input-sm form-control" name="end" value="02/01/2018" /><br><br>
                                <center><input type="submit" class="btn btn-danger form-group"  value="Buscar" /></center>
                                </form>
                            </div></center>
                        </div>
                    


                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>[Campo]</th>
                        <th>[Campo]</th>
                        <th>[Campo]</th>
                        <th>[Campo]</th>
                        <th>[Campo]</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">X</td>
                    </tr>
                    <tr class="gradeC">
                        <td>Trident</td>
                        <td>Internet
                            Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td class="center">5</td>
                        <td class="center">C</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Trident</td>
                        <td>Internet
                            Explorer 5.5
                        </td>
                        <td>Win 95+</td>
                        <td class="center">5.5</td>
                        <td class="center">A</td>
                    </tr>
                    <tr class="gradeA">
                        <td>Trident</td>
                        <td>Internet
                            Explorer 6
                        </td>
                        <td>Win 98+</td>
                        <td class="center">6</td>
                        <td class="center">A</td>
                    </tr>
                   
                    <tr class="gradeC">
                        <td>Misc</td>
                        <td>PSP browser</td>
                        <td>PSP</td>
                        <td class="center">-</td>
                        <td class="center">C</td>
                    </tr>
                    <tr class="gradeU">
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td class="center">-</td>
                        <td class="center">U</td>
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

@endsection