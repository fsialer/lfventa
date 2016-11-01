@extends('admin.template.main')
@section('title','Listado de Clientes')
@section('content')
<div class="col-md-12">
		<ol class="breadcrumb">
		 <li><a href="{{url('admin/dashboard')}}">Admin</a></li>
	  <li class="active">Clientes</li>
		</ol>
 	</div>
 <div class="col-md-12 center-block quitar-float bajar">
 	<div class="panel panel-default">
 		<div class="panel-body">
 			 <a href="{{route('customers.create')}}" class="btn btn-info">Agregar</a>
	 {!! Form::open(['route'=>'customers.index','method'=>'GET','class'=>'navbar-form pull-right']) !!}
	<div class="input-group">
		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar Nombre..']) !!}
		<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
	</div>
	{!! Form::close() !!}
	 <hr>
	 @include('flash::message')
 	<div class="panel panel-info">
 		<div class="panel-heading">
 			<h3>Listado de Clientes</h3>
 		</div>
 		<div class="panel-body">
 			<div class="table-responsive">
 				<table class="table table-hover">
 					<tr>
						<th>Nombre</th>
						<th>Documento</th>	
						<th>Telefono</th>	
						<th>Email</th>
						<th>Estado</th>				
						<th>Acciones</th>
					</tr>
					@foreach($customers as $customer)
					<tr>
						<td>{{$customer->name}}</td>
						<td>{{$customer->type_document}}:{{$customer->num_document}}</td>
						<td>{{$customer->phone}}</td>
						<td>{{$customer->email}}</td>
						<td>{{$customer->state}}</td>
						<td>
							<a href="{{route('customers.edit',$customer->id)}}" class="btn btn-warning">
								<span class=" glyphicon glyphicon-wrench"></span>
							</a>
  							<a href="{{route('admin.customers.destroy',$customer->id)}}" class="btn btn-danger confirm">
  								<span class="glyphicon glyphicon-remove-sign"></span>
  							</a>
						</td>
					</tr>
					@endforeach
 				</table>
 				<div class="text-center">
 					{!! $customers->render() !!}
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