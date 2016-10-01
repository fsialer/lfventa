@extends('admin.template.main')
@section('title','Editar Articulo')
@section('content')	
	<div class="col-md-6 center-block quitar-float">
		<div class="panel panel-warning ">
			<div class="panel-heading">Editar Articulo-{{$article->name}}</div>
			<div class="panel-body">
				{!!Form::open(['route'=>['articles.update',$article],'method'=>'PUT'])!!}
				<div class="form-group">	
	    			{!!Form::label('code', 'Codigo', ['class' => ''])!!}			   
				    {!!Form::text('code',$article->code,['class' => 'form-control','id'=>'code','placeholder'=>'Codigo'])!!}				   		   
	  			</div>
	    		<div class="form-group">	
	    			{!!Form::label('name', 'Nombre', ['class' => ''])!!}			   
				    {!!Form::text('name',$article->name,['class' => 'form-control','id'=>'name','placeholder'=>'Nombre'])!!}				   		   
	  			</div>
	  			<div class="form-group">
	  			 	{!!Form::label('description', 'Descripcion', ['class' => ''])!!}	
	  				{!!Form::textarea ('description',$article->description,['class' => 'form-control','id'=>'description','placeholder'=>'Descripción'])!!}
	  			</div>
	  			<div class="form-group">
	  			 	{!!Form::label('stock', 'Stock', ['class' => ''])!!}	
	  				{!!Form::text ('stock',$article->stock,['class' => 'form-control','id'=>'stock','placeholder'=>'Stock'])!!}
	  			</div>
	  			<div class="form-group">
	  				{!!Form::label('state', 'Estado', ['class' => 'mdl-textfield__label'])!!}
	  				{!!Form::select('state', ['activo' => 'Activo', 'inactivo' => 'Inactivo'],$article->state,['class'=>'form-control','id'=>'state']);!!}	   
	  			</div>
	  			<div class="form-group texto-derecha">
	  				{!! Form::submit('Editar',['class'=>'btn btn-warning']) !!}
	  			</div>	  			
	    		{!!Form::close()!!}
			</div>
		</div>		
	</div>
@endsection