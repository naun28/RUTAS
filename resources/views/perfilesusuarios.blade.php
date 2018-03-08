@extends('layouts.app')

@section('content')
<div class="ibox float-e-margins">
            <div class="ibox-title"><h5>Perfiles de Usuarios</h5>

            </div>
        </div>
  <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">

                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                                <thead>
                                <tr>

                                    <th data-toggle="true">Product Name</th>
                                    <th data-hide="phone">Model</th>
                                    <th data-hide="all">Description</th>
                                    <th data-hide="phone">Price</th>
                                    <th data-hide="phone,tablet" >Quantity</th>
                                    <th data-sort-ignore="true">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                       Example product 1
                                    </td>
                                    <td>
                                        Model 1
                                    </td>
                                    <td>
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td>
                                        $50.00
                                    </td>
                                    <td>
                                        1000
                                    </td>
                                    <td>
                                        <div>
                                            <button class="btn-primary btn btn-xs">Editar</button>
                                            <button class="btn-danger btn btn-xs">Borrar</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Example product 2
                                    </td>
                                    <td>
                                        Model 2
                                    </td>
                                    <td>
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td>
                                        $40.00
                                    </td>
                                    <td>
                                        4300
                                    </td>
                                    <td>
                                        <div>
                                            <button class="btn-primary btn btn-xs">Editar</button>
                                            <button class="btn-danger btn btn-xs">Borrar</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Example product 3
                                    </td>
                                    <td>
                                        Model 3
                                    </td>
                                    <td>
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td>
                                        $22.00
                                    </td>
                                    <td>
                                        300
                                    </td>
                                    <td>
                                        <div>
                                            <button class="btn-primary btn btn-xs">Editar</button>
                                            <button class="btn-danger btn btn-xs">Borrar</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Example product 4
                                    </td>
                                    <td>
                                        Model 4
                                    </td>
                                    <td>
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td>
                                        $67.00
                                    </td>
                                    <td>
                                        2300
                                    </td>
                                    <td>
                                        <div>
                                            <button class="btn-primary btn btn-xs">Editar</button>
                                            <button class="btn-danger btn btn-xs">Borrar</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Example product 5
                                    </td>
                                    <td>
                                        Model 5
                                    </td>
                                    <td>
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td>
                                        $76.00
                                    </td>
                                    <td>
                                        800
                                    </td>
                                    <td>
                                        <div>
                                            <button class="btn-primary btn btn-xs">Editar</button>
                                            <button class="btn-danger btn btn-xs">Borrar</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Example product 6
                                    </td>
                                    <td>
                                        Model 6
                                    </td>
                                    <td>
                                        It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal distribution of letters, as opposed to using
                                        'Content here, content here', making it look like readable English.
                                    </td>
                                    <td>
                                        $60.00
                                    </td>
                                    <td>
                                        6000
                                    </td>
                                    <td>
                                        <div>
                                            <button class="btn-primary btn btn-xs">Editar</button>
                                            <button class="btn-danger btn btn-xs">Borrar</button>
                                        </div>
                                    </td>
                                </tr>


                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

@endsection
