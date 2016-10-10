@extends('admin.template.main')
@section('title','Editar Cliente')
@section('content')	
	<div class="col-md-6 center-block quitar-float">
		<div class="panel panel-warning ">
			<div class="panel-heading">Editar Cliente-{{$customer->name}}</div>
			<div class="panel-body">
				{!!Form::open(['route'=>['customers.update',$customer->id],'method'=>'PUT'])!!}
				<div class="form-group">	
	    			{!!Form::label('name', 'Nombre', ['class' => ''])!!}			   
				    {!!Form::text('name',$customer->name,['class' => 'form-control','id'=>'name','placeholder'=>'Nombre'])!!}				   		   
	  			</div>
	  			<div class="form-group">
	  				{!!Form::label('type_document', 'Tipo de Documento', ['class' => ''])!!}
	  				{!!Form::select('type_document', ['0'=>'','dni' => 'DNI', 'ruc' => 'RUC','pas'=>'PAS'],$customer->type_document,['class'=>'form-control type_document-select','id'=>'type_document']);!!}	   
	  			</div>
	    		<div class="form-group">	
	    			{!!Form::label('num_document', 'Número de documento', ['class' => ''])!!}			   
				    {!!Form::text('num_document',$customer->num_document,['class' => 'form-control','id'=>'num_document','placeholder'=>'Numero de documento'])!!}				   		   
	  			</div>
	  			<div class="form-group">	
	    			{!!Form::label('phone', 'Telefono', ['class' => ''])!!}			   
				    {!!Form::text('phone',$customer->phone,['class' => 'form-control','id'=>'phone','placeholder'=>'Telefono'])!!}				   		   
	  			</div>
	  			<div class="form-group">	
	    			{!!Form::label('email', 'Email', ['class' => ''])!!}			   
				    {!!Form::email('email',$customer->email,['class' => 'form-control','id'=>'email','placeholder'=>'Email'])!!}				   		   
	  			</div>
	  			<div class="form-group">
	  				{!!Form::label('state', 'Estado', ['class' => ''])!!}
	  				{!!Form::select('state', ['activo' => 'Activo', 'inactivo' => 'Inactivo'],$customer->state,['class'=>'form-control','id'=>'state']);!!}	   
	  			</div>
	  			<div class="form-group texto-derecha">
	  				{!! Form::submit('Editar',['class'=>'btn btn-warning']) !!}
	  				<a href="{{route('customers.index')}}" class="btn btn-default">Cancelar</a>
	  			</div>
	  			
	    		{!!Form::close()!!}
			</div>
		</div>		
	</div>
@endsection
@section('js')	
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
@endsection