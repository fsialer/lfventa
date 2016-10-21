@extends('admin.template.main')
@section('title','Editar Usuario')
@section('content')	
<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="{{url('admin/dashboard')}}">Admin</a></li>
		  <li><a href="{{route('users.index')}}">Usuarios</a></li>
		  <li class="active">Editar</li>
		</ol>
 	</div>
	<div class="col-md-6 center-block quitar-float bajar">
		<div class="panel panel-warning ">
			<div class="panel-heading"><h3>Editar Usuario-{{$user->name}}</h3></div>
			<div class="panel-body">
				{!!Form::open(['route'=>['users.update',$user],'method'=>'PUT'])!!}
	    		<div class="form-group">	
	    			{!!Form::label('name', 'Nombre', ['class' => 'mdl-textfield__label'])!!}			   
				    {!!Form::text('name',$user->name,['class' => 'form-control','id'=>'name','placeholder'=>'Nombre'])!!}				   		   
	  			</div>
	  			<div class="form-group">
	  			 	{!!Form::label('email', 'Email', ['class' => 'mdl-textfield__label'])!!}	
	  				{!!Form::email('email',$user->email,['class' => 'form-control','id'=>'email','placeholder'=>'Email'])!!}				   
	  			</div>
	  			<div class="form-group">
	  				{!!Form::label('type', 'Tipo de Acceso', ['class' => 'mdl-textfield__label'])!!}
	  				{!!Form::select('type', ['0'=>'','admin' => 'Admin', 'empleado' => 'Empleado'],$user->type,['class'=>'form-control type_us-select','id'=>'type']);!!}	   
	  			</div>
	  			<div class="form-group texto-derecha">
	  				{!! Form::submit('Editar',['class'=>'btn btn-warning']) !!}
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