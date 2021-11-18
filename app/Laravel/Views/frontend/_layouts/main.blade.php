<!DOCTYPE html>
<html>
<head>
	@include('frontend._components.metas')
	@include('frontend._components.styles')
	@yield('page-styles')
	
</head>

<body>	
		<div class="main-page-wrapper">    
		<div class="wavy-wraper">
        <div class="wavy">
          <span style="--i:1;">p</span>
          <span style="--i:2;">a</span>
          <span style="--i:3;">z</span>
          <span style="--i:4;">e</span>
          <span style="--i:5;">b</span>
          <span style="--i:6;">a</span>
          <span style="--i:7;">l</span>
          <span style="--i:8;">l</span>
          <span style="--i:9;">.</span>
		  <span style="--i:10;">.</span>
		  <span style="--i:11;">.</span>
        </div>
    </div>
			@yield('content')
			
			
			 @include('frontend._components.footer')
		</div>
			@include('frontend._components.scripts')
			@yield('page-scripts')
		
</body>
</html>