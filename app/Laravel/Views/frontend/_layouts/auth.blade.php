<!DOCTYPE html>
<html>
<head>
	@include('frontend._components.metas')
	@include('frontend._components.styles')
		<link rel="stylesheet" href="{{asset('frontend/css/main.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/weather-icon.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/weather-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
	@yield('page-styles')
	<style>
.gap.signin::before {
	background-color: transparent;
	}
	.gap.signin .bg-image {
		height: 100vh !important
	}
	.text-primary--orange {
	color: #F1C40F !important;
}
	</style>

</head>
<body>

@yield('content')	
		<script src="{{asset('frontend/js/main.min.js')}}"></script>
		<script src="{{asset('frontend/js/script.js')}}"></script>
@yield('page-scripts')

</body>
</html>