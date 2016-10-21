@extends('admin.template.main')
@section('title','Editar Articulo')
@section('content')	
<div class="col-md-12">
		<ol class="breadcrumb">
		 <li><a href="{{url('admin/dashboard')}}">Admin</a></li>
		  <li><a href="{{route('articles.index')}}">Articulos</a></li>
		  <li class="active">Editar</li>
		</ol>
 	</div>
	<div class="col-md-6 center-block quitar-float bajar">
		<div class="panel panel-warning ">
			<div class="panel-heading"><h3>Editar Articulo-{{$article->name}}</h3></div>
			<div class="panel-body">
				{!!Form::open(['route'=>['articles.update',$article],'method'=>'PUT'])!!}
				<div class="form-group">
	  				{!!Form::label('category_id', 'Categoria', ['class' => ''])!!}
	  				{!!Form::select('category_id',$categories,$article->category_id,['class'=>'form-control category-select','id'=>'category_id']);!!}	   
	  			</div>
				<div class="form-group">	
	    			{!!Form::label('code', 'Codigo', ['class' => ''])!!}			   
				    {!!Form::text('code',$article->code,['class' => 'form-control category-select','id'=>'code','placeholder'=>'Codigo'])!!}		   		   
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