@extends('admin.template.main')
@section('title','DashBoard')
@section('content')
<h1>{{ Auth::user()->name }}</h1>
<h2>Bienvenido</h2>
@endsection