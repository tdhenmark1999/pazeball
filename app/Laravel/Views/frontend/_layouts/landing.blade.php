<!DOCTYPE html>
<html>
<head>
	@include('frontend._components.metas')
  <link rel="stylesheet" href="{{asset('landing/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('landing/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('landing/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('landing/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('landing/css/metismenu.css')}}">
	<link rel="stylesheet" href="{{asset('landing/css/odometer.css')}}">
	<link rel="stylesheet" href="{{asset('landing/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('landing/css/swiper.min.css')}}">
	<link rel="stylesheet" href="{{asset('landing/css/spacing.css')}}">
	<link rel="stylesheet" href="{{asset('landing/css/main.css')}}">
	@yield('page-styles')
	
</head>

<body>	
		
			@yield('content')


      <script src="{{ asset('landing/js/jquery-3.4.1.min.js')}}"></script>
      <script src="{{ asset('landing/js/popper.min.js')}}"></script>
      <script src="{{ asset('landing/js/bootstrap.min.js')}}"></script>
      <script src="{{ asset('landing/js/metismenu.min.js')}}"></script>
      <script src="{{ asset('landing/js/swiper.min.js')}}"></script>
      <script src="{{ asset('landing/js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{ asset('landing/js/jquery.appear.js')}}"></script>
      <script src="{{ asset('landing/js/jquery.knob.min.js')}}"></script>
      <script src="{{ asset('landing/js/odometer.min.js')}}"></script>
      <script src="{{ asset('landing/js/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{ asset('landing/js/isotope.pkgd.min.js')}}"></script>
      <script src="{{ asset('landing/js/tilt.jquery.min.js')}}"></script>
      <script src="{{ asset('landing/js/wow.min.js')}}"></script>
      <script src="{{ asset('landing/js/script.js')}}"></script>

			@yield('page-scripts')
		
</body>
</html>