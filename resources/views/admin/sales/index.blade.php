@extends('admin.template.main')
@section('title','Listado de Ventas')
@section('content')
 <div class="col-md-10 center-block quitar-float">
 	<div class="panel panel-info">
 		<div class="panel-heading">
 			Listado de Ventas
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
						<td>{{$sale->date}}</td>
						<td>{{$sale->tax}}</td>
						<td>{{$sale->total}}</td>
						<td>{{$sale->state}}</td>
						
						<td>
							<a href="{{route('sales.show',$sale->id)}}" class="btn btn-info glyphicon glyphicon-list-alt"></a>
  		<a href="{{route('admin.sales.destroy',$sale->id)}}" onclick="return confirm('¿Estas seguro de eliminarlo.?')" class="btn btn-danger glyphicon glyphicon-remove-sign"></a>
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
@endsection