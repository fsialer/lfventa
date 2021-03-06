@extends('admin.template.main')
@section('title','Listado de Usuarios')
@section('content')
<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="{{url('admin/dashboard')}}">Admin</a></li>
	  <li class="active">Usuarios</li>
		</ol>
 	</div>
 <div class="col-md-12 center-block quitar-float bajar">
 	<div class="panel panel-default">
 		<div class="panel-body">
 			<a href="{{route('users.create')}}" class="btn btn-info">Agregar</a>
<!-- Buscador de tags -->
	{!! Form::open(['route'=>'users.index','method'=>'GET','class'=>'navbar-form pull-right']) !!}
	<div class="input-group">
		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar Nombre..']) !!}
		<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
	</div>
	{!! Form::close() !!}
	<hr>
	@include('flash::message')
<!-- Fin del Buscador de tags -->
 	<div class="panel panel-info">
 		<div class="panel-heading">
 			<h3>Listado de Usuarios</h3>

 		</div>
 		<div class="panel-body">
 			
 			<div class="table-responsive">
 				<table class="table table-hover">
 					<tr>
						<th>Nombre</th>
						<th>Email</th>
						<th>Tipo</th>					
						<th>Acciones</th>
					</tr>
					@foreach($users as $user)
					<tr>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->type}}</td>
						<td>
							<a href="{{route('users.edit',$user->id)}}" class="btn btn-warning ">
								<span class="glyphicon glyphicon-wrench"></span>
							</a>
  							<a href="{{route('admin.users.destroy',$user->id)}}"  class="btn btn-danger confirm ">
  								<span class="glyphicon glyphicon-remove-sign"></span>
  							</a>
						</td>
					</tr>
					@endforeach
 				</table>
 				<div class="text-center">
 					{!! $users->render() !!}
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