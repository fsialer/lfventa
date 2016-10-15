@extends('admin.template.main')
@section('title','Detalle de la Entrada')
@section('content')	
<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="{{url('admin/dashboard')}}">Admin</a></li>
		  <li><a href="{{route('entries.index')}}">Entradas</a></li>
		  <li class="active">Detalle</li>
		</ol>
 	</div>
	<div class="col-md-12 center-block quitar-float bajar">
		<div class="panel panel-info">
			<div class="panel-heading">Detalle de la Entrada</div>
			<div class="panel-body">
				
				<div class="form-group">
	  				{!!Form::label('provider_id', 'Proveedor', ['class' => ''])!!}
	  				<p>{{$entry->provider->name}}</p>
	  				 	  				  
	  			</div>
				<div class="form-group col-md-4">	
					 {!!Form::label('serie_voucher', 'Tipo de Comprobante', ['class' => ''])!!}
					 <p>{{$entry->type_voucher}}</p>
	    						   		   
	  			</div>
	  			<div class="form-group col-md-4">	
	    			{!!Form::label('serie_voucher', 'Serie del comprobante', ['class' => ''])!!}		
	    			<p>{{$entry->serie_voucher}}</p>	   
				   			   		   
	  			</div>
	  			<div class="form-group col-md-4">	
	    			{!!Form::label('num_voucher', 'Número del comprobante', ['class' => ''])!!}		
	    			<p>{{$entry->num_voucher}}</p>	 	   
				   				   		   
	  			</div>
	  			<div class="row"></div>
	  			<div class="panel panel-primary">
	  				<div class="panel-body">
	  					<div class="row"></div>
	  					<div class="table-responsive">
	  						<table class="table table-hover" id="detail">
	  							<thead>
									<th>Articulo</th>
									<th>Cantidad</th>
									<th>Precio Venta</th>	
									<th>Precio Compra</th>
									<th>SubTotal</th>		
									
								</thead>

								@foreach($entry->articles as $detail)

								<tr>
									<td>{{$detail->name}}</td>
									<td>{{$detail->pivot->quantity}}</td>
									<td>S/. {{$detail->pivot->price_sale}}</td>
									<td>S/. {{$detail->pivot->price_buy}}</td>
									<td>S/. {{$detail->pivot->quantity*$detail->pivot->price_buy}}</td>
								</tr>
								@endforeach
								<tfoot>
									<th>Total</th>
									<td></td>
									<td></td>
									<td></td>
									<td>S/. {{$entry->total}}</td>
								</tfoot>
	  						</table>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="form-group texto-derecha">
	  				<a href="{{route('entries.index')}}" class="btn btn-default">Regresar</a>
	  			</div>
	  			
	    		
			</div>
		</div>		
	</div>
@endsection
