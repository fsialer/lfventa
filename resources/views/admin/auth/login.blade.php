@extends('front.template.main')
@section('title','login')
@section('content')
	<div class="col-md-5 center-block quitar-float content-login">
		@if (count($errors) > 0)
	    	<div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	   		</div>
		@endif
		<div class="panel panel-default ">
			<div class="panel-heading text-center"><span class="glyphicon glyphicon-user login-logo"></span></div>
			<div class="panel-body">
				{!! Form::open(['route'=>'login','method'=>'POST']) !!}
					<div class="input-group">
						<span class="input-group-addon glyphicon glyphicon-envelope" id="basic-addon1"><i class=""></i></span>
						{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'example@mail.com']) !!}						
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon glyphicon glyphicon-lock" id="basic-addon1"><i class=""></i></span>
						{!! Form::password('password',['class'=>'form-control','placeholder'=>'***************']) !!}
					</div>
					<br>
					<div class="form-group">
						{!! Form::submit('ACCEDER',['class'=>'form-control btn btn-primary']) !!}
					</div>
					
				{!! Form::close() !!}
			</div>			
		</div>		
	</div>
	
@endsection