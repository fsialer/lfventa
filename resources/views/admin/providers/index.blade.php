@extends('admin.template.main')
@section('title','Listado de Proveedores')
@section('content')
 <div class="col-md-8 center-block quitar-float">
 	<div class="panel panel-info">
 		<div class="panel-heading">
 			Listado de Proveedores
 		</div>
 		<div class="panel-body">
 			<div class="table table-hover">
 				<table class="table table-hover">
 					<tr>
						<th>Compañia</th>
						<th>Contacto</th>
						<th>Telefono</th>	
						<th>Email</th>	
						<th>Estado</th>					
						<th>Acciones</th>
					</tr>
					@foreach($providers as $provider)
					<tr>
						<td>{{$provider->company}}</td>
						<td>{{$provider->contact}}</td>
						<td>{{$provider->phone}}</td>
						<td>{{$provider->email}}</td>
						<td>{{$provider->state}}</td>
						<td>
							<a href="{{route('providers.edit',$provider->id)}}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
  		<a href="{{route('admin.providers.destroy',$provider->id)}}" onclick="return confirm('¿Estas seguro de eliminarlo.?')" class="btn btn-danger glyphicon glyphicon-remove-sign"></a>
						</td>
					</tr>
					@endforeach
 				</table>
 				<div class="text-center">
 					{!! $providers->render() !!}
 				</div>
 				 
 			</div>
 			
 		</div> 		
 	</div>
 </div>
@endsection