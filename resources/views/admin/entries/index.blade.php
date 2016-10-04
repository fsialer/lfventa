@extends('admin.template.main')
@section('title','Listado de Entradas')
@section('content')
 <div class="col-md-10 center-block quitar-float">
 	<div class="panel panel-info">
 		<div class="panel-heading">
 			Listado de Entradas de Compras
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
							<a href="{{route('entries.show',$entry->id)}}" class="btn btn-info glyphicon glyphicon-list-alt"></a>
  		<a href="{{route('admin.entries.destroy',$entry->id)}}" onclick="return confirm('¿Estas seguro de eliminarlo.?')" class="btn btn-danger glyphicon glyphicon-remove-sign"></a>
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
@endsection