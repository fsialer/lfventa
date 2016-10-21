@extends('admin.template.main')
@section('title','Crear Venta')
@section('content')	
<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="{{url('admin/dashboard')}}">Admin</a></li>
		  <li><a href="{{route('sales.index')}}">Ventas</a></li>
		  <li class="active">Crear</li>
		</ol>
 	</div>
	<div class="col-md-12 center-block quitar-float bajar">
		@if (count($errors) > 0)
	    	<div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	   		</div>
		@endif
		<div class="panel panel-success">
			<div class="panel-heading"><h3>Crear Venta</h3></div>
			<div class="panel-body">
				{!!Form::open(['route'=>'sales.store','method'=>'POST'])!!}
				<div class="form-group">
	  				{!!Form::label('customer_id', 'Cliente', ['class' => ''])!!}
	  				{!!Form::select('customer_id',$customers,null,['class'=>'form-control customer_id-select','id'=>'customer_id']);!!}	   
	  			</div>
				<div class="form-group col-md-4">	
	    			{!!Form::label('type_voucher', 'Tipo de Comprobante', ['class' => ''])!!}			   
				    {!!Form::select('type_voucher',['0'=>'','boleta'=>'Boleta','factura'=>'Factura'],null,['class'=>'form-control type_voucher-select','id'=>'type_voucher']);!!}				   		   
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
	  						{!!Form::select('aarticle_id',$articles,null,['class'=>'form-control article_id-select','id'=>'article_id2']);!!}	   
	  					</div>
	  					<div class="form-group col-md-2">
	  						{!!Form::label('quantity', 'Cantidad', ['class' => ''])!!}
	  						{!!Form::number('qquantity','',['class' => 'form-control','id'=>'quantity','placeholder'=>'Cantidad'])!!}	   
	  					</div>
	  					<div class="form-group col-md-2">
	  						{!!Form::label('stock', 'Stock', ['class' => ''])!!}
	  						{!!Form::number('sstock','',['class' => 'form-control','id'=>'stock','placeholder'=>'Stock','readOnly'])!!}	   
	  					</div>
	  					<div class="form-group col-md-2">
	  						{!!Form::label('price_sale', 'Precio de Venta', ['class' => ''])!!}
	  						{!!Form::number('pprice_sale','',['class' => 'form-control','id'=>'price_sale','placeholder'=>'Precio de Venta','readOnly'])!!}	   
	  					</div>
	  					<div class="form-group col-md-2">
	  						{!!Form::label('discount', 'descuento', ['class' => ''])!!}
	  						{!!Form::number('ddiscount','',['class' => 'form-control','id'=>'discount','placeholder'=>'Descuento'])!!}	   
	  					</div>
	  					<div class="form-group col-md-2">
	  						{!! Form::button('Agregar',['class'=>'btn btn-success','id'=>'btnAgregar2']) !!}
	  					</div>
	  					<div class="row"></div>
	  					<div class="table-responsive">
	  						<table class="table table-hover" id="detail">
	  							<thead>
	  								<th>Acciones</th>
									<th>Articulo</th>
									<th>Cantidad</th>
									<th>Precio Venta</th>
									<th>Descuento</th>
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
	  				{!! Form::submit('Registrar',['class'=>'btn btn-success','id'=>'btnRegistrar']) !!}
	  				<a href="{{route('sales.index')}}" class="btn btn-default">Regresar</a>
	  			</div>
	  			
	    		{!!Form::close()!!}
			</div>
		</div>		
	</div>
@endsection
@section('js')	
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
@endsection
