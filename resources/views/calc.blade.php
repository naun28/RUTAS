@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col 12 ">
        <div class="ibox float-e-margins">
            <div class="ibox-title"><h5>Calculo</h5>

            </div>

            
        </div>
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Range Slider <small>https://github.com/IonDen/ion.rangeSlider</small></h5>
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
                <div class="row">
                 <form method="get" class="form-horizontal col-lg-12">
                    <div class="col-lg-12">
                    <div class="col-lg-6">
                    <div class="form-group"><label class="col-sm-2 control-label">No. brigada</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Brigadista</label>
                        <div class="col-sm-10"><div class="">
                <div>
                <select data-placeholder="Selecciona brigadista(s)" class="chosen-select col-sm-10" multiple style="width:350px;" tabindex="4">
                <option value="1 ">Brigadista 1</option>
                <option value="2 ">Brigadista 2</option>
                <option value="3">Brigadista 3</option>
                <option value="4 ">Brigadista 4</option>
                <option value="5">Brigadista 5</option>
                <option value="6">Brigadista 6</option>
                <option value="7 ">Brigadista 7</option>
                <option value="8">Brigadista 8</option>
                <option value="9">Brigadista 9</option>
                <option value="10">Brigadista 10</option>
                <option value="11">Brigadista 11</option>
                <option value="12">Brigadista 12</option>
                </select>
                </div>
                </div>
</div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Lugar(es)</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Dias</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group"><label class="col-sm-2 control-label">Escuelas</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Vehiculo</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    
                    <div class="form-group"><label class="col-sm-2 control-label">Placas</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Rendimiento</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="col-lg-6">
                    <div class="form-group"><label class="col-sm-2 control-label">Recorrido</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    
                    <div class="form-group"><label class="col-sm-2 control-label">Excedente</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Precio Gasolina/L</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Gasolina</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group"><label class="col-sm-2 control-label">Casetas</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Viaticos</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">C. de caminos</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Total real</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-2 control-label">Total</label>
                        <div class="col-sm-10"><input type="text" class="form-control"></div>
                    </div>
                    </div>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection