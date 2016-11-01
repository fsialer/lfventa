@extends('admin.template.main')
@section('title','Listado de Entradas')
@section('content')
<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="{{url('admin/dashboard')}}">Admin</a></li>
	  <li class="active">Entradas</li>
		</ol>
 	</div>
 <div class="col-md-12 center-block quitar-float bajar">
 	<div class="panel panel-default">
 		<div class="panel-body">
 			<a href="{{route('entries.create')}}" class="btn btn-info">Agregar</a>
	 {!! Form::open(['route'=>'entries.index','method'=>'GET','class'=>'navbar-form pull-right']) !!}
	<div class="input-group">
		{!! Form::text('num_voucher',null,['class'=>'form-control','placeholder'=>'Buscar comprobante..']) !!}
		<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
	</div>
	{!! Form::close() !!}
	 <hr>
	 @include('flash::message')
 	<div class="panel panel-info">
 		<div class="panel-heading">
 			<h3>Listado de Entradas de Compras</h3>
 		</div>
 		<div class="panel-body">
 			<div class="table-responsive">
 				<table class="table table-hover">
 					<tr>
						<th>Proveedor</th>
						<th>Comprobante</th>
						<th>Fecha</th>	
						<th>Impuesto</th>
						<th>Total</th>	
						<th>Estado</th>			
						<th>Acciones</th>
					</tr>
					@foreach($entries as $entry)
					<tr>
						<td>{{$entry->provider->name}}</td>
						<td>{{$entry->type_voucher}}:{{$entry->serie_voucher}}-{{$entry->num_voucher}}</td>
						<td>{{$entry->date}}</td>
						<td>{{$entry->tax}}</td>
						<td>{{$entry->total}}</td>
						<td>{{$entry->state}}</td>
						<td>
							<a href="{{route('entries.show',$entry->id)}}" class="btn btn-info ">
								<span class="glyphicon glyphicon-list-alt"></span>
							</a>
							@if($entry->state=='atendido')
  							<a href="{{route('admin.entries.destroy',$entry->id)}}" class="btn btn-danger confirm2">
  								<span class="glyphicon glyphicon-remove-sign"></span>
  							</a>
  		 					@endif
						</td>
					</tr>
					@endforeach
 				</table>
 				<div class="text-center">
 					{!! $entries->render() !!}
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