@extends('admin.template.main')
@section('title','Listado de Articulos')
@section('content')
<div class="col-md-12">
		<ol class="breadcrumb">
		 <li><a href="{{url('admin/dashboard')}}">Admin</a></li>
	  <li class="active">Articulos</li>
		</ol>
 	</div>
 <div class="col-md-12 center-block quitar-float bajar">
 	<div class="panel panel-default">
 		<div class="panel-body">
 			<a href="{{route('articles.create')}}" class="btn btn-info">Agregar</a>
 	{!! Form::open(['route'=>'articles.index','method'=>'GET','class'=>'navbar-form pull-right']) !!}
	<div class="input-group">
		{!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar Nombre..']) !!}
		<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
	</div>
	{!! Form::close() !!}
 	<hr>
 	@include('flash::message')
 	<div class="panel panel-info">
 		<div class="panel-heading">
 			<h3>Listado de Articulos</h3>
 		</div>
 		<div class="panel-body">
 			<div class="table-responsive">
 				<table class="table table-hover">
 					<tr>
 						<th>Categoria</th>
						<th>Codigo</th>
						<th>Nombre</th>
						<th>Stock</th>
						<th>Estado</th>					
						<th>Acciones</th>
					</tr>
					@foreach($articles as $article)
					<tr>
						<td>{{$article->category->name}}</td>
						<td>{{$article->code}}</td>
						<td>{{$article->name}}</td>
						<td>{{$article->stock}}</td>
						<td>{{$article->state}}</td>
						<td>
							<a class="btn btn-warning" href="{{route('articles.edit',$article->id)}}">
								<span class="glyphicon glyphicon-wrench"></span>
							</a>
					  		<a class="btn btn-danger confirm" href="{{route('admin.articles.destroy',$article->id)}}">
					  			<span class="glyphicon glyphicon-remove-sign"></span>
					  		</a>
						</td>
					</tr>
					@endforeach
 				</table>
 				<div class="text-center">
 					{!! $articles->render() !!}
 				</div>
 				 
 			</div>
 			
 		</div> 		
 	</div>
 		</div>
 	</div>
 	
 </div>
@endsection
@section('js')	
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
@endsection

