@extends('admin.template.main')
@section('title','Listado de Categorias')
@section('content')
 <div class="col-md-8 center-block quitar-float">
 	<div class="panel panel-info">
 		<div class="panel-heading">
 			Listado de Categorias
 		</div>
 		<div class="panel-body">
 			<div class="table table-hover">
 				<table class="table table-hover">
 					<tr>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Estado</th>					
						<th>Acciones</th>
					</tr>
					@foreach($categories as $category)
					<tr>
						<td>{{$category->name}}</td>
						<td>{{$category->description}}</td>
						<td>{{$category->state}}</td>
						<td>
							<a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
  		<a href="{{route('admin.categories.destroy',$category->id)}}" onclick="return confirm('¿Estas seguro de eliminarlo.?')" class="btn btn-danger glyphicon glyphicon-remove-sign"></a>
						</td>
					</tr>
					@endforeach
 				</table>
 				<div class="text-center">
 					{!! $categories->render() !!}
 				</div>
 				 
 			</div>
 			
 		</div> 		
 	</div>
 </div>
@endsection