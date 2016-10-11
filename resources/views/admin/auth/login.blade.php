@extends('front.template.main')
@section('title','login')
@section('content')
	<div class="col-md-6 center-block quitar-float">
		<div class="panel panel-default ">
			<div class="panel-heading">Login</div>
			<div class="panel-body">
				{!! Form::open(['route'=>'login','method'=>'POST']) !!}
					<div class="form-group">
						{!! Form::label('email','Correo Electronico') !!}
						{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'example@mail.com']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('password','Contraseña') !!}
						{!! Form::password('password',['class'=>'form-control','placeholder'=>'***************']) !!}
					</div>

					<div class="form-group">
						{!! Form::submit('Acceder',['class'=>'btn btn-primary']) !!}
					</div>
					
				{!! Form::close() !!}
			</div>			
		</div>		
	</div>
	
@endsection