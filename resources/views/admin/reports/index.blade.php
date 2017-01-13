@extends('admin.template.main')
@section('title','Reportes') @section('content')
<div class="col-md-12">
    <ol class="breadcrumb">
        <li><a href="{{url('admin/dashboard')}}">Admin</a></li>
        <li class="active">Reportes</li>
    </ol>
</div>
<div class="col-md-12 center-block quitar-float bajar">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3>Reportes de Sistema</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>Reporte</th>
                                <th>Ver</th>
                                <th>Descargar</th>
                            </tr>
                            <tr>
                                <td>
                                    Reporte de Cantidad de Articulos
                                </td>
                                <td>
                                    <a href="{{route('admin.reports.report_article',1)}}" class="btn btn-info " target="_blank">
                                        <span class="glyphicon glyphicon-eye-open"></span>Ver
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('admin.reports.report_article',2)}}" class="btn btn-success " target="_blank">
                                        <span class="glyphicon glyphicon-save-file"></span>Descagar
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Reporte de Compra de Articulos
                                </td>
                                <td>
                                    <a href="{{route('admin.reports.report_entry',1)}}" class="btn btn-info " target="_blank">
                                        <span class="glyphicon glyphicon-eye-open"></span>Ver
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('admin.reports.report_entry',2)}}" class="btn btn-success " target="_blank">
                                        <span class="glyphicon glyphicon-save-file"></span>Descagar
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    Reporte de Ventas de Articulos
                                </td>
                                <td>
                                    <a href="{{route('admin.reports.report_sale',1)}}" class="btn btn-info " target="_blank">
                                        <span class="glyphicon glyphicon-eye-open"></span>Ver
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('admin.reports.report_sale',2)}}" class="btn btn-success " target="_blank">
                                        <span class="glyphicon glyphicon-save-file"></span>Descagar
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    Reporte de Clientes
                                </td>
                                <td>
                                    <a href="{{route('admin.reports.report_customer',1)}}" class="btn btn-info " target="_blank">
                                        <span class="glyphicon glyphicon-eye-open"></span>Ver
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('admin.reports.report_customer',2)}}" class="btn btn-success " target="_blank">
                                        <span class="glyphicon glyphicon-save-file"></span>Descagar
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Reporte de Usuarios
                                </td>
                                <td>
                                    <a href="{{route('admin.reports.report_user',1)}}" class="btn btn-info " target="_blank">
                                        <span class="glyphicon glyphicon-eye-open"></span>Ver
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('admin.reports.report_user',2)}}" class="btn btn-success " target="_blank">
                                        <span class="glyphicon glyphicon-save-file"></span>Descagar
                                    </a>
                                </td>
                            </tr>



                        </table>


                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection @section('js')
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
@endsection