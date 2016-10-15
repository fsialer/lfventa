@extends('admin.template.main')
@section('title','Editar Categoria')
@section('content')	
<div class="col-md-12">
		<ol class="breadcrumb">
		  <li><a href="{{url('admin/dashboard')}}">Admin</a></li>
		  <li><a href="{{route('categories.index')}}">Categorias</a></li>
		  <li class="active">Editar</li>
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
		<div class="panel panel-warning ">
			<div class="panel-heading">Editar Categoria-{{$category->name}}</div>
			<div class="panel-body">
				{!!Form::open(['route'=>['categories.update',$category],'method'=>'PUT'])!!}
	    		<div class="form-group">	
	    			{!!Form::label('name', 'Nombre', ['class' => ''])!!}			   
				    {!!Form::text('name',$category->name,['class' => 'form-control','id'=>'name','placeholder'=>'Nombre'])!!}				   		   
	  			</div>
	  			<div class="form-group">
	  			 	{!!Form::label('description', 'Descripción', ['class' => ''])!!}	
	  				{!!Form::textarea('description',$category->description,['class' => 'form-control','id'=>'description','placeholder'=>'Descripción'])!!}				   
	  			</div>
	  			<div class="form-group">
	  				{!!Form::label('state', 'Estado', ['class' => 'mdl-textfield__label'])!!}
	  				{!!Form::select('state', ['activo' => 'Activo', 'inactivo' => 'Inactivo'],$category->state,['class'=>'form-control','id'=>'state']);!!}	   
	  			</div>
	  			<div class="form-group texto-derecha">
	  				{!! Form::submit('Editar',['class'=>'btn btn-warning']) !!}
	  				<a href="{{route('categories.index')}}" class="btn btn-default">Cancelar</a>
	  			</div>
	  			
	    		{!!Form::close()!!}
			</div>
		</div>		
	</div>
@endsection