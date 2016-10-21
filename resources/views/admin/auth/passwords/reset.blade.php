@extends('admin.template.main')
@section('title','Resetear pass')
@section('content') 
<div class="col-md-12">
        <ol class="breadcrumb">
          <li><a href="{{url('admin/dashboard')}}">Admin</a></li>
          
          <li class="active">Reset</li>
        </ol>
    </div>
    <div class="col-md-6 center-block quitar-float bajar">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
        @endif
        <div class="panel panel-warning ">
            <div class="panel-heading"><h3>Resetar Contraseña</h3></div>
            <div class="panel-body">
                {!!Form::open(['route'=>'admin.change','method'=>'POST'])!!}
                <div class="form-group">
                    {!!Form::label('password', 'Nueva Contraseña', ['class' => ''])!!}
                    {!! Form::password('password',['class'=>'form-control','placeholder'=>'***************']) !!}
                </div>
                <div class="form-group">
                    {!!Form::label('password_confirmation', 'Confirmar Contraseña', ['class' => ''])!!}
                    {!! Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'***************']) !!}
                </div>
                <div class="form-group texto-derecha">
                    {!! Form::submit('Resetar',['class'=>'btn btn-warning']) !!}
                    <a href="{{ url('admin/dashboard') }}" class="btn btn-default">Cancelar</a>
                </div>
                
                {!!Form::close()!!}
            </div>
        </div>      
    </div>
@endsection
