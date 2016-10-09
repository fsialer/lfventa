@extends('admin.template.main')
@section('title','Crear Usuario')
@section('content')	
	<div class="col-md-6 center-block quitar-float">
		<div class="panel panel-primary ">
			<div class="panel-heading">Crear Usuario</div>
			<div class="panel-body">
				{!!Form::open(['route'=>'users.store','method'=>'POST'])!!}
	    		<div class="form-group">	
	    			{!!Form::label('name', 'Nombre', ['class' => 'mdl-textfield__label'])!!}			   
				    {!!Form::text('name','',['class' => 'form-control','id'=>'name','placeholder'=>'Nombre'])!!}				   		   
	  			</div>
	  			<div class="form-group">
	  			 	{!!Form::label('email', 'Email', ['class' => 'mdl-textfield__label'])!!}	
	  				{!!Form::email('email','',['class' => 'form-control','id'=>'email','placeholder'=>'Email'])!!}				   
	  			</div>
	  			<div class="form-group">
	  				 {!!Form::label('password', 'Contraseña', ['class' => 'mdl-textfield__label'])!!}
	  				{!!Form::password('password',['class' => 'form-control','id'=>'password','placeholder'=>'*************'])!!}	   
	  			</div>
	  			<div class="form-group">
	  				{!!Form::label('type', 'Tipo de Acceso', ['class' => 'mdl-textfield__label'])!!}
	  				{!!Form::select('type', ['0'=>'','admin' => 'Admin', 'empleado' => 'Empleado'],'null',['class'=>'form-control type_us-select','id'=>'type']);!!}	   
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