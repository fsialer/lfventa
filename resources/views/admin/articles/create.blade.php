@extends('admin.template.main')
@section('title','Crear Articulo')
@section('content')	
	<div class="col-md-6 center-block quitar-float">
		<div class="panel panel-success ">
			<div class="panel-heading">Crear Articulo</div>
			<div class="panel-body">
				{!!Form::open(['route'=>'articles.store','method'=>'POST'])!!}
				<div class="form-group">
	  				{!!Form::label('category_id', 'Categoria', ['class' => ''])!!}
	  				{!!Form::select('category_id',$categories,null,['class'=>'form-control category-select','id'=>'category_id']);!!}	   
	  			</div>
				<div class="form-group">	
	    			{!!Form::label('code', 'Codigo', ['class' => ''])!!}			   
				    {!!Form::text('code','',['class' => 'form-control','id'=>'code','placeholder'=>'Codigo'])!!}				   		   
	  			</div>
	    		<div class="form-group">	
	    			{!!Form::label('name', 'Nombre', ['class' => ''])!!}			   
				    {!!Form::text('name','',['class' => 'form-control','id'=>'name','placeholder'=>'Nombre'])!!}				   		   
	  			</div>
	  			<div class="form-group">
	  			 	{!!Form::label('description', 'Descripcion', ['class' => ''])!!}	
	  				{!!Form::textarea ('description','',['class' => 'form-control','id'=>'description','placeholder'=>'Descripción'])!!}
	  			</div>
	  			<div class="form-group">
	  			 	{!!Form::label('stock', 'Stock', ['class' => ''])!!}	
	  				{!!Form::text ('stock','',['class' => 'form-control','id'=>'stock','placeholder'=>'Stock'])!!}
	  			</div>
	  			<div class="form-group texto-derecha">
	  				{!! Form::submit('Registrar',['class'=>'btn btn-success']) !!}
	  				<a href="{{route('articles.index')}}" class="btn btn-default">Cancelar</a>
	  			</div>
	  			
	    		{!!Form::close()!!}
			</div>
		</div>		
	</div>
@endsection
@section('js')	
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
@endsection