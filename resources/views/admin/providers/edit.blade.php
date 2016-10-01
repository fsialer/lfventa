@extends('admin.template.main')
@section('title','Editar Proveedor')
@section('content')	
	<div class="col-md-6 center-block quitar-float">
		<div class="panel panel-warning ">
			<div class="panel-heading">Editar Proveedor-{{$provider->company}}</div>
			<div class="panel-body">
				{!!Form::open(['route'=>['providers.update',$provider->id],'method'=>'PUT'])!!}
				<div class="form-group">	
	    			{!!Form::label('company', 'Compañia', ['class' => ''])!!}			   
				    {!!Form::text('company',$provider->company,['class' => 'form-control','id'=>'company','placeholder'=>'Compañia'])!!}				   		   
	  			</div>
	    		<div class="form-group">	
	    			{!!Form::label('contact', 'Contacto', ['class' => ''])!!}			   
				    {!!Form::text('contact',$provider->contact,['class' => 'form-control','id'=>'contact','placeholder'=>'Contacto'])!!}				   		   
	  			</div>
	  			<div class="form-group">	
	    			{!!Form::label('phone', 'Telefono', ['class' => ''])!!}			   
				    {!!Form::text('phone',$provider->phone,['class' => 'form-control','id'=>'phone','placeholder'=>'Telefono'])!!}				   		   
	  			</div>
	  			<div class="form-group">	
	    			{!!Form::label('email', 'Email', ['class' => ''])!!}			   
				    {!!Form::email('email',$provider->email,['class' => 'form-control','id'=>'email','placeholder'=>'Email'])!!}				   		   
	  			</div>
	  			<div class="form-group">
	  				{!!Form::label('state', 'Estado', ['class' => ''])!!}
	  				{!!Form::select('state', ['activo' => 'Activo', 'inactivo' => 'Inactivo'],$provider->state,['class'=>'form-control','id'=>'state']);!!}	   
	  			</div>
	  			<div class="form-group texto-derecha">
	  				{!! Form::submit('Editar',['class'=>'btn btn-warning']) !!}
	  			</div>
	  			
	    		{!!Form::close()!!}
			</div>
		</div>		
	</div>
@endsection