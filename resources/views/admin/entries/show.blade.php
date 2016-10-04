@extends('admin.template.main')
@section('title','Detalle de la Entrada')
@section('content')	
	<div class="col-md-12 center-block quitar-float">
		<div class="panel panel-primary">
			<div class="panel-heading">Detalle de la Entrada</div>
			<div class="panel-body">
				
				<div class="form-group">
	  				{!!Form::label('provider_id', 'Proveedor', ['class' => ''])!!}
	  				 {!!Form::text('serie_voucher',$entry->provider->name,['class' => 'form-control','id'=>'serie_voucher','placeholder'=>'Serie del documento'])!!}	  				  
	  			</div>
				<div class="form-group col-md-4">	
					 {!!Form::label('serie_voucher', 'Tipo de Comprobante', ['class' => ''])!!}
	    			 {!!Form::text('serie_voucher',$entry->type_voucher,['class' => 'form-control','id'=>'serie_voucher','placeholder'=>'Serie del documento'])!!}				   		   
	  			</div>
	  			<div class="form-group col-md-4">	
	    			{!!Form::label('serie_voucher', 'Serie del comprobante', ['class' => ''])!!}			   
				    {!!Form::text('serie_voucher',$entry->serie_voucher,['class' => 'form-control','id'=>'serie_voucher','placeholder'=>'Serie del documento'])!!}				   		   
	  			</div>
	  			<div class="form-group col-md-4">	
	    			{!!Form::label('num_voucher', 'Número del comprobante', ['class' => ''])!!}			   
				    {!!Form::text('num_voucher',$entry->num_voucher,['class' => 'form-control','id'=>'num_voucher','placeholder'=>'Numero de Comprobante'])!!}				   		   
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
	  				<a href="">Regresar</a>
	  			</div>
	  			
	    		
			</div>
		</div>		
	</div>
@endsection
@section('js')	
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
@endsection
