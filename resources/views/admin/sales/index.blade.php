@extends('admin.template.main')
@section('title','Listado de Ventas')
@section('content')
<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="{{url('admin/dashboard')}}">Admin</a></li>
	  <li class="active">Ventas</li>
		</ol>
 	</div>
 <div class="col-md-12 center-block quitar-float bajar">
 	<div class="panel panel-default">
 		<div class="panel-body">
 			<a href="{{route('sales.create')}}" class="btn btn-info">Agregar</a>
	 {!! Form::open(['route'=>'sales.index','method'=>'GET','class'=>'navbar-form pull-right']) !!}
	<div class="input-group">
		{!! Form::text('num_voucher',null,['class'=>'form-control','placeholder'=>'Buscar comprobante..']) !!}
		<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
	</div>
	{!! Form::close() !!}
	<hr>
	@include('flash::message')
 	<div class="panel panel-info">
 		<div class="panel-heading">
 			<h3>Listado de Ventas</h3>
 		</div>
 		<div class="panel-body">
 			<div class="table-responsive">
 				<table class="table table-hover">
 					<tr>
						<th>Cliente</th>
						<th>Comprobante</th>
						<th>Fecha</th>	
						<th>Impuesto</th>
						<th>Total</th>	
						<th>Estado</th>		
						<th>Acciones</th>
					</tr>
					@foreach($sales as $sale)
					<tr>
						<td>{{$sale->customer->name}}</td>
						<td>{{$sale->type_voucher}}:{{$sale->serie_voucher}}-{{$sale->num_voucher}}</td>
						<td>{{$sale->date_sale}}</td>
						<td>{{$sale->tax}}</td>
						<td>{{$sale->total}}</td>
						<td>{{$sale->state}}</td>
						
						<td>
							<a href="{{route('sales.show',$sale->id)}}" class="btn btn-info ">
								<span class="glyphicon glyphicon-list-alt"></span>
							</a>
							@if($sale->state=='atendido')
  							<a href="{{route('admin.sales.destroy',$sale->id)}}"  class="btn btn-danger confirm2">
  								<span class="glyphicon glyphicon-remove-sign"></span>
  							</a>
  							@endif
						</td>
					</tr>
					@endforeach
 				</table>
 				<div class="text-center">
 					{!! $sales->render() !!}
 				</div>
 				 
 			</div>
 			
 		</div> 		
 	</div>
 		</div>
 	</div>
 	
 </div>
@endsection
@section('js')	
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
@endsection