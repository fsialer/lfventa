@extends('admin.template.main')
@section('title','Crear Usuario')
@section('content')	
<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="{{url('admin/dashboard')}}">Admin</a></li>
		  <li><a href="{{route('users.index')}}">Usuarios</a></li>
		  <li class="active">Crear</li>
		</ol>
 	</div>
	<div class="col-md-6 center-block quitar-float bajar">
		@if (count($errors) > 0)
	    	<div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	   		</div>
		@endif
		<div class="panel panel-success ">
			<div class="panel-heading">Crear Usuario</div>
			<div class="panel-body">
				{!!Form::open(['route'=>'users.store','method'=>'POST'])!!}
	    		<div class="form-group">	
	    			{!!Form::label('name', 'Nombre', ['class' => 'mdl-textfield__label'])!!}			   
				    {!!Form::text('name','',['class' => 'form-control','id'=>'name','placeholder'=>'Nombre'])!!}				   		   
	  			</div>
	  			<div class="form-group">
	  			 	{!!Form::label('email', 'Email', ['class' => 'mdl-textfield__label'])!!}	
	  				{!!Form::text('email','',['class' => 'form-control','id'=>'email','placeholder'=>'Email'])!!}				   
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
	  				<a href="{{route('users.index')}}" class="btn btn-default">Cancelar</a>
	  			</div>
	  			
	    		{!!Form::close()!!}
			</div>
		</div>		
	</div>
@endsection
@section('js')	
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
@endsection