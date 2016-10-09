@extends('admin.template.main')
@section('title','Editar Proveedor')
@section('content')	
	<div class="col-md-6 center-block quitar-float">
		<div class="panel panel-warning ">
			<div class="panel-heading">Editar Proveedor-{{$provider->name}}</div>
			<div class="panel-body">
				{!!Form::open(['route'=>['providers.update',$provider->id],'method'=>'PUT'])!!}
				<div class="form-group">	
	    			{!!Form::label('name', 'Nombre', ['class' => ''])!!}			   
				    {!!Form::text('name',$provider->name,['class' => 'form-control','id'=>'name','placeholder'=>'Nombre'])!!}				   		   
	  			</div>
	  			<div class="form-group">
	  				{!!Form::label('type_document', 'Tipo de Documento', ['class' => ''])!!}
	  				{!!Form::select('type_document', ['0'=>'','dni' => 'DNI', 'ruc' => 'RUC','pas'=>'PAS'],$provider->type_document,['class'=>'form-control type_document-select','id'=>'type_document']);!!}	   
	  			</div>
	    		<div class="form-group">	
	    			{!!Form::label('num_document', 'Número de documento', ['class' => ''])!!}			   
				    {!!Form::text('num_document',$provider->num_document,['class' => 'form-control','id'=>'num_document','placeholder'=>'Numero de documento'])!!}				   		   
	  			</div>
	  			<div class="form-group">	
	    			{!!Form::label('phone', 'Telefono', ['class' => ''])!!}			   
				    {!!Form::text('phone',$provider->phone,['class' => 'form-control','id'=>'phone','placeholder'=>'Telefono'])!!}				   		   
	  			</div>
	  			<div class="form-group">	
	    			{!!Form::label('email', 'Email', ['class' => ''])!!}			   
				    {!!Form::email('email',$provider->email,['class' => 'form-control','id'=>'email','placeholder'=>'Email'])!!}				   		   
	  			</div>
	  			<div class="form-group">
	  				{!!Form::label('state', 'Estado', ['class' => ''])!!}
	  				{!!Form::select('state', ['activo' => 'Activo', 'inactivo' => 'Inactivo'],$provider->state,['class'=>'form-control','id'=>'state']);!!}	   
	  			</div>
	  			<div class="form-group texto-derecha">
	  				{!! Form::submit('Editar',['class'=>'btn btn-warning']) !!}
	  			</div>
	  			
	    		{!!Form::close()!!}
			</div>
		</div>		
	</div>
@endsection
@section('js')	
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
@endsection