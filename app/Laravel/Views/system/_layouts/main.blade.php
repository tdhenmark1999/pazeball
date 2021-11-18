<!DOCTYPE html>
<html>
<head>
  @include('system._components.metas')
  @include('system._components.styles')
  @yield('page-styles')
</head>
<body>
	  <div id="layout-wrapper">

            	@include('system._components.header')

            <!-- ========== Left Sidebar Start ========== -->
        		@include('system._components.sidebar')
@yield('content') 
</div>
   		@include('system._components.footer')
@include('system._components.scripts')
@yield('page-scripts')

</body>
</html>