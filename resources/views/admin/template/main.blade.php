<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale-1.0">
    <title>@yield('title','Default') | Panel de Administración</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/chosen/chosen.min.css')}}">
    <link href="{{asset('plugins/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('plugins/dist/css/sb-admin-2.css')}}" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="{{asset('plugins/vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('plugins/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

</head>

<body>
    <div id="wrapper">
        @include('admin.template.partials.nav')
        <section id="page-wrapper">
            <div class="row"></div>
            @yield('content')
        </section>
        @include('admin.template.partials.footer')
    </div>


    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('plugins/chosen/chosen.jquery.min.js')}}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('plugins/vendor/metisMenu/metisMenu.min.js')}}"></script>
    <!-- Morris Charts JavaScript -->
    <script src="{{asset('plugins/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('plugins/vendor/morrisjs/morris.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('plugins/dist/js/sb-admin-2.js')}}"></script>
    <script src="{{asset('plugins/confirm/jquery.confirm.min.js')}}"></script>
    <script src="{{asset('plugins/chart/Chart.js')}}"></script>
    @yield('js')

</body>

</html>