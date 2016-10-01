@extends('admin.template.main')
@section('title','Listado de Usuarios')
@section('content')
 <div class="col-md-8 center-block quitar-float">
 	<div class="panel panel-info">
 		<div class="panel-heading">
 			Listado de Usuarios
 		</div>
 		<div class="panel-body">
 			<div class="table table-hover">
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
							<a href="{{route('users.edit',$user->id)}}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
  		<a href="{{route('admin.users.destroy',$user->id)}}" onclick="return confirm('¿Estas seguro de eliminarlo.?')" class="btn btn-danger glyphicon glyphicon-remove-sign"></a>
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
@endsection