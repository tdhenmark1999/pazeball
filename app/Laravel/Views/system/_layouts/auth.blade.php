<!DOCTYPE html>
<html>
<head>
    @include('system._components.metas')
   <link rel="stylesheet" href="{{asset('backoffice/css/preloader.min.css')}}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('backoffice/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('backoffice/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('backoffice/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    @yield('page-styles')
    <style type="text/css">
         body {
        background-image: url({{asset("frontend/images/bg-orange-main.jpg")}});
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
</head>

<body>  
        @yield('content')

         <script src="{{asset('backoffice/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('backoffice/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('backoffice/libs/metismenu/metismenu.min.js')}}"></script>
        <script src="{{asset('backoffice/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('backoffice/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('backoffice/libs/feather-icons/feather.min.js')}}"></script>
        <!-- pace js -->
        <script src="{{asset('backoffice/libs/pace-js/pace.min.js')}}"></script>
        <!-- password addon init -->
        <script src="{{asset('backoffice/js/pages/pass-addon.init.js')}}"></script>
        @yield('page-scripts')
</body>
</html>