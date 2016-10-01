@extends('admin.template.main')
@section('title','Crear Proveedor')
@section('content')	
	<div class="col-md-6 center-block quitar-float">
		<div class="panel panel-primary ">
			<div class="panel-heading">Crear Proveedor</div>
			<div class="panel-body">
				{!!Form::open(['route'=>'providers.store','method'=>'POST'])!!}
				<div class="form-group">	
	    			{!!Form::label('name', 'Nombre', ['class' => ''])!!}			   
				    {!!Form::text('name','',['class' => 'form-control','id'=>'name','placeholder'=>'Nombre'])!!}				   		   
	  			</div>
	  			<div class="form-group">
	  				{!!Form::label('type_document', 'Tipo de Documento', ['class' => ''])!!}
	  				{!!Form::select('type_document', ['dni' => 'DNI', 'ruc' => 'RUC','pas'=>'PAS'],null,['class'=>'form-control','id'=>'type_document']);!!}	   
	  			</div>
	    		<div class="form-group">	
	    			{!!Form::label('num_document', 'Número de documento', ['class' => ''])!!}			   
				    {!!Form::text('num_document','',['class' => 'form-control','id'=>'num_document','placeholder'=>'Numero de documento'])!!}				   		   
	  			</div>
	  			<div class="form-group">	
	    			{!!Form::label('phone', 'Telefono', ['class' => ''])!!}			   
				    {!!Form::text('phone','',['class' => 'form-control','id'=>'phone','placeholder'=>'Telefono'])!!}				   		   
	  			</div>
	  			<div class="form-group">	
	    			{!!Form::label('email', 'Email', ['class' => ''])!!}			   
				    {!!Form::email('email','',['class' => 'form-control','id'=>'email','placeholder'=>'Email'])!!}				   		   
	  			</div>
	  			<div class="form-group texto-derecha">
	  				{!! Form::submit('Registrar',['class'=>'btn btn-success']) !!}
	  			</div>
	  			
	    		{!!Form::close()!!}
			</div>
		</div>		
	</div>
@endsection