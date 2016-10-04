@extends('admin.template.main')
@section('title','Crear Entradas')
@section('content')	
	<div class="col-md-12 center-block quitar-float">
		<div class="panel panel-primary">
			<div class="panel-heading">Crear Entradas</div>
			<div class="panel-body">
				{!!Form::open(['route'=>'entries.store','method'=>'POST'])!!}
				<div class="form-group">
	  				{!!Form::label('provider_id', 'Proveedor', ['class' => ''])!!}
	  				{!!Form::select('provider_id',$providers,null,['class'=>'form-control','id'=>'provider_id']);!!}	   
	  			</div>
				<div class="form-group col-md-4">	
	    			{!!Form::label('type_voucher', 'Tipo de Comprobante', ['class' => ''])!!}			   
				    {!!Form::select('type_voucher',['boleta'=>'Boleta','factura'=>'Factura'],null,['class'=>'form-control','id'=>'type_voucher']);!!}				   		   
	  			</div>
	  			<div class="form-group col-md-4">	
	    			{!!Form::label('serie_voucher', 'Serie del comprobante', ['class' => ''])!!}			   
				    {!!Form::text('serie_voucher','',['class' => 'form-control','id'=>'serie_voucher','placeholder'=>'Serie del documento'])!!}				   		   
	  			</div>
	  			<div class="form-group col-md-4">	
	    			{!!Form::label('num_voucher', 'Número del comprobante', ['class' => ''])!!}			   
				    {!!Form::text('num_voucher','',['class' => 'form-control','id'=>'num_voucher','placeholder'=>'Numero de Comprobante'])!!}				   		   
	  			</div>
	  			<div class="row"></div>
	  			<div class="panel panel-primary">
	  				<div class="panel-body">
	  					<div class="form-group col-md-4">
	  						{!!Form::label('article_id', 'Articulo', ['class' => ''])!!}
	  						{!!Form::select('article_id',$articles,null,['class'=>'form-control','id'=>'article_id']);!!}	   
	  					</div>
	  					<div class="form-group col-md-2">
	  						{!!Form::label('quantity', 'Cantidad', ['class' => ''])!!}
	  						{!!Form::number('quantity','',['class' => 'form-control','id'=>'quantity','placeholder'=>'Cantidad'])!!}	   
	  					</div>
	  					<div class="form-group col-md-2">
	  						{!!Form::label('price_sale', 'Precio de Venta', ['class' => ''])!!}
	  						{!!Form::number('price_sale','',['class' => 'form-control','id'=>'price_sale','placeholder'=>'Precio de Venta'])!!}	   
	  					</div>
	  					<div class="form-group col-md-2">
	  						{!!Form::label('price_buy', 'Precio de Compra', ['class' => ''])!!}
	  						{!!Form::number('price_buy','',['class' => 'form-control','id'=>'price_buy','placeholder'=>'Precio de Compra'])!!}	   
	  					</div>
	  					<div class="form-group col-md-2">
	  						{!! Form::button('Agregar',['class'=>'btn btn-success','id'=>'btnAgregar']) !!}
	  					</div>
	  					<div class="row"></div>
	  					<div class="table-responsive">
	  						<table class="table table-hover" id="detail">
	  							<thead>
	  								<th>Acciones</th>
									<th>Articulo</th>
									<th>Cantidad</th>
									<th>Precio Venta</th>	
									<th>Precio Compra</th>
									<th>SubTotal</th>				
									
								</thead>
								<tfoot>
									<th>Total</th>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td id="total">S/. 0.0</td>
								</tfoot>
	  						</table>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="form-group texto-derecha">
	  				{!! Form::submit('Registrar',['class'=>'btn btn-success']) !!}
	  			</div>
	  			
	    		{!!Form::close()!!}
			</div>
		</div>		
	</div>
@endsection
@section('js')	
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
@endsection
