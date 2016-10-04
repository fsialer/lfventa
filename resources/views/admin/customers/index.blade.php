@extends('admin.template.main')
@section('title','Listado de Clientes')
@section('content')
 <div class="col-md-10 center-block quitar-float">
 	<div class="panel panel-info">
 		<div class="panel-heading">
 			Listado de Clientes
 		</div>
 		<div class="panel-body">
 			<div class="table-responsive">
 				<table class="table table-hover">
 					<tr>
						<th>Nombre</th>
						<th>Tipo de documento</th>
						<th>Numero del documento</th>	
						<th>Telefono</th>	
						<th>Email</th>
						<th>Estado</th>				
						<th>Acciones</th>
					</tr>
					@foreach($customers as $customer)
					<tr>
						<td>{{$customer->name}}</td>
						<td>{{$customer->type_document}}</td>
						<td>{{$customer->num_document}}</td>
						<td>{{$customer->phone}}</td>
						<td>{{$customer->email}}</td>
						<td>{{$customer->state}}</td>
						<td>
							<a href="{{route('customers.edit',$customer->id)}}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
  		<a href="{{route('admin.customers.destroy',$customer->id)}}" onclick="return confirm('¿Estas seguro de eliminarlo.?')" class="btn btn-danger glyphicon glyphicon-remove-sign"></a>
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
@endsection