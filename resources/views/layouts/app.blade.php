<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Miminium Admin Template v.1">
    <meta name="author" content="@adit_XxX_">
    <meta name="keyword" content="AccountingPintar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/simple-line-icons.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/animate.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/icheck/skins/flat/aero.css')}}"/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- end: Css -->


    <title>{{ config('app.name', 'AccountingPintar') }}</title>

</head>
<body id="mimin" class="dashboard">
   
@include('errors.alert')

    @yield('content')


    <!-- start: Javascript -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script src="{{asset('js/plugins/moment.min.js')}}"></script>
    <script src="{{asset('js/plugins/icheck.min.js')}}"></script>

    <!-- custom -->
    <script src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('input').iCheck({
         checkboxClass: 'icheckbox_flat-aero',
         radioClass: 'iradio_flat-aero'
       });
      });
    </script>
    <!-- end: Javascript -->


</body>
</html>
