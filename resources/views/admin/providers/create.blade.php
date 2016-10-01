@extends('admin.template.main')
@section('title','Crear Proveedor')
@section('content')	
	<div class="col-md-6 center-block quitar-float">
		<div class="panel panel-primary ">
			<div class="panel-heading">Crear Proveedor</div>
			<div class="panel-body">
				{!!Form::open(['route'=>'providers.store','method'=>'POST'])!!}
				<div class="form-group">	
	    			{!!Form::label('company', 'Compañia', ['class' => ''])!!}			   
				    {!!Form::text('company','',['class' => 'form-control','id'=>'company','placeholder'=>'Compañia'])!!}				   		   
	  			</div>
	    		<div class="form-group">	
	    			{!!Form::label('contact', 'Contacto', ['class' => ''])!!}			   
				    {!!Form::text('contact','',['class' => 'form-control','id'=>'contact','placeholder'=>'Contacto'])!!}				   		   
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