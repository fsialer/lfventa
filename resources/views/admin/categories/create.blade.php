@extends('admin.template.main')
@section('title','Crear Categoria')
@section('content')	
	<div class="col-md-6 center-block quitar-float">
		<div class="panel panel-primary ">
			<div class="panel-heading">Crear Categoria</div>
			<div class="panel-body">
				{!!Form::open(['route'=>'categories.store','method'=>'POST'])!!}
	    		<div class="form-group">	
	    			{!!Form::label('name', 'Nombre', ['class' => ''])!!}			   
				    {!!Form::text('name','',['class' => 'form-control','id'=>'name','placeholder'=>'Nombre'])!!}				   		   
	  			</div>
	  			<div class="form-group">
	  			 	{!!Form::label('description', 'Descripcion', ['class' => ''])!!}	
	  				{!!Form::textarea ('description','',['class' => 'form-control','id'=>'description','placeholder'=>'Descripción'])!!}
	  			</div>
	  			<div class="form-group texto-derecha">
	  				{!! Form::submit('Registrar',['class'=>'btn btn-success']) !!}
	  			</div>
	  			
	    		{!!Form::close()!!}
			</div>
		</div>		
	</div>
@endsection