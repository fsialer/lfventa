@extends('admin.template.main') 
@section('title','DashBoard') 
@section('content') 
@include('flash::message')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tag  fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{$articles}}</div>
                        <div>Articulos</div>
                    </div>
                </div>
            </div>
            <a href="{{route('articles.index')}}">
                <div class="panel-footer">
                    <span class="pull-left">Vista detallada</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{$entries}}</div>
                        <div>Compras</div>
                    </div>
                </div>
            </div>
            <a href="{{route('entries.index')}}">
                <div class="panel-footer">
                    <span class="pull-left">Vista detallada</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{$sales}}</div>
                        <div>Ventas</div>
                    </div>
                </div>
            </div>
            <a href="{{route('sales.index')}}">
                <div class="panel-footer">
                    <span class="pull-left">Vista detallada</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{$users}}</div>
                        <div>Usuarios</div>
                    </div>
                </div>
            </div>
            <a href="{{route('users.index')}}">
                <div class="panel-footer">
                    <span class="pull-left">Vista detallada</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="row col-lg-12 col-md-12 " id="line">
        <canvas id="line_atSale" width="400" height="140">
        </canvas>
    </div>
    <div class="row col-lg-12 col-md-12 " id="bar">
        <canvas id="bar_sArticle" width="400" height="140">
        </canvas>
    </div>
    <div class="row col-lg-12 col-md-12 " id="linete">
        <canvas id="line_atEntry" width="400" height="140">
        </canvas>
    </div>
</div>
@section('js')
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
@endsection @endsection