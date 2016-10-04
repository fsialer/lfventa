@extends('admin.template.main')
@section('title','Listado de Articulos')
@section('content')
 <div class="col-md-8 center-block quitar-float">
 	<div class="panel panel-info">
 		<div class="panel-heading">
 			Listado de Articulos
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
							<a href="{{route('articles.edit',$article->id)}}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
  		<a href="{{route('admin.articles.destroy',$article->id)}}" onclick="return confirm('¿Estas seguro de eliminarlo.?')" class="btn btn-danger glyphicon glyphicon-remove-sign"></a>
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
@endsection