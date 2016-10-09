<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width,initial-scale-1.0">
	<title>@yield('title','Default') | Panel de Administración</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/chosen/chosen.min.css')}}">
</head>
<body>
@include('admin.template.partials.nav')
<section class="container ">
		@yield('content')	
</section>

@include('admin.template.partials.footer')
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script type="text/javascript" src='{{asset('plugins/bootstrap/js/bootstrap.min.js')}}'></script>
<script type="text/javascript"src='{{asset('plugins/chosen/chosen.jquery.min.js')}}'></script>
@yield('js')
</body>
</html>