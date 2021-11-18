@extends('frontend._layouts.landing') 
@section('content')
<header class="header-area header-style-3">
	<div class="container-fluid">
		<div class="row align-items-center justify-content-xl-center">
			<div class="col-xl-2 col-lg-3 col-md-3 col-6">
				<div class="logo-area">
					<a href="/"><img src="{{asset('logo.png')}}" alt="Logo"></a>
				</div>
			</div>
			<div class="col-xl-8 d-xl-flex justify-content-center align-items-center d-none">
				<nav class="main-menu main-menu-white">
					<ul>
						<li class="">
							<a href="#">HOME</a>
							
						</li>
						<li class="">
							<a href="#">ABOUT US</a>
							
						</li>
						<li class="">
							<a href="#">SERVICE</a>
							
						</li>
						
						<li class="">
							<a href="#">BLOG</a>
							
						</li>
						<li class="">
							<a href="#">PRICING</a>
							
						</li>
						<li class="">
							<a href="#">Contact</a>
							
						</li>
                        <li>
                            <a href="{{route('frontend.auth.login')}}">Login/Register</a>
                            
                        </li>
					</ul>
				</nav>
			</div>
			<div class="col-xl-2 col-lg-9 col-md-9 col-6 d-flex justify-content-end align-items-center">
				
				<a href="javascript:void(0);" class="hamburger-menu">
					<div class="hamburger-btn">
						<div class="hamburger-bar"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
</header>
<!-- header-area end -->

<!--    slide-bar start   -->
<aside class="slide-bar">
	<div class="close-mobile-menu">
		<a href="javascript:void(0);"><i class="fas fa-times"></i></a>
	</div>
	<nav class="side-mobile-menu">
		<ul id="mobile-menu-active">
			<li>
				<a href="#">HOME</a>
				
			</li>
			<li>
				<a href="#">ABOUT US</a>
				
			</li>
			<li>
				<a href="#">SERVICE</a>
				
			</li>
		
			<li>
				<a href="#">BLOG</a>
				
			</li>
			<li>
				<a href="#">PRICING</a>
				
			</li>
			<li>
				<a href="#">Contact</a>
				
			</li>
            <li>
				<a href="{{route('frontend.auth.login')}}">Login/Register</a>
				
			</li>
		</ul>
	</nav>

	<div class="sidebar-widget-wrapper">
		<div class="sidebar-widget logo-side">
			<a href="/">
				<img src="{{asset('logo.png')}}" alt="logo">
			</a>
		</div>

		<div class="sidebar-widget">
			<div class="info-wdget">
				<h4 class="widget-title">Office Address</h4>
				<p>
					23/A, Miranda City Likaoli Prikano, Dope
				</p>
			</div>
		</div>

		<div class="sidebar-widget">
			<div class="info-wdget">
				<h4 class="widget-title">Phone Number</h4>
				<p> +0989 7876 9865 9 </p>
				<p> +(090) 8765 86543 85 </p>
			</div>
		</div>

		<div class="sidebar-widget">
			<div class="info-wdget">
				<h4 class="widget-title">Email Address</h4>
				<p> info@example.com </p>
				<p> example.mail@hum.com </p>
			</div>
		</div>

		

		<div class="sidebar-widget">
			<div class="social-widget">
				<a href="#">
					<i class="fab fa-facebook-f"></i>
				</a>
				<a href="#">
					<i class="fab fa-twitter"></i>
				</a>
				<a href="#">
					<i class="fab fa-google-plus-g"></i>
				</a>
				<a href="#">
					<i class="fab fa-instagram"></i>
				</a>
			</div>
		</div>
	</div>
</aside>
<div class="body-overlay"></div>
<!--    slide-bar End   -->

<!--    search-bar start    -->
<div class="search-area">
	<div class="search-area-bg"></div>
	<a href="#" class="search-close">
		<i class="far fa-times"></i>
	</a>
	<div class="search-form">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-8">
					<form action="#" method="post">
						<input type="text" placeholder="Search here...">
						<button type="submit">
							<i class="fa fa-search"></i>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!--    search-bar End    -->

<!-- main start -->
<main>
	<!-- slider-area start -->
	<div class="slider-area">
		<div class="swiper-container home-slider-3">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<div class="swiper-slide single-slide" data-background="{{asset('landing/img/slider/slider-3.jpg')}}">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-10">
								<div class="slider-content-3">
									<span data-animation="fadeInUp" data-delay="0.3s">
										we are professional & expert
									</span>
									<h2 data-animation="fadeInUp" data-delay="0.6s">
										Making Different From Other Builds Health
									</h2>
									<p data-animation="fadeInUp" data-delay="0.9s">
										Best GYM & Fitness Center Build Your Health
									</p>
									<a href="#" class="read-more" data-animation="fadeInUp" data-delay="1.2s">
										Get started
										<i class="fas fa-angle-double-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-shape">
						<img src="{{asset('landing/img/shape/shape-14.png')}}" alt="thumb">
					</div>
				</div>
				<div class="swiper-slide single-slide" data-background="{{asset('landing/img/slider/slider-3.jpg')}}">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-10">
								<div class="slider-content-3">
									<span data-animation="fadeInUp" data-delay="0.3s">
										we are professional & expert
									</span>
									<h2 data-animation="fadeInUp" data-delay="0.6s">
										Making Different From Other Builds Health
									</h2>
									<p data-animation="fadeInUp" data-delay="0.9s">
										Best GYM & Fitness Center Build Your Health
									</p>
									<a href="#" class="read-more" data-animation="fadeInUp" data-delay="1.2s">
										Get started
										<i class="fas fa-angle-double-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-shape">
						<img src="{{asset('landing/img/shape/shape-14.png')}}" alt="thumb">
					</div>
				</div>
				<div class="swiper-slide single-slide" data-background="{{asset('landing/img/slider/slider-3.jpg')}}">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-10">
								<div class="slider-content-3">
									<span data-animation="fadeInUp" data-delay="0.3s">
										we are professional & expert
									</span>
									<h2 data-animation="fadeInUp" data-delay="0.6s">
										Making Different From Other Builds Health
									</h2>
									<p data-animation="fadeInUp" data-delay="0.9s">
										Best GYM & Fitness Center Build Your Health
									</p>
									<a href="#" class="read-more" data-animation="fadeInUp" data-delay="1.2s">
										Get started
										<i class="fas fa-angle-double-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-shape">
						<img src="{{asset('landing/img/shape/shape-14.png')}}" alt="thumb">
					</div>
				</div>
			</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>
			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"><i class="far fa-angle-double-left"></i></div>
			<div class="swiper-button-next"><i class="far fa-angle-double-right"></i></div>
		</div>
	</div>
	<!-- slider-area end -->

	<!-- brand-area start -->
	<div class="brand-area pt-70 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="brand-slider">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide single-slide">
									<div class="brand-wrap">
										<img src="{{asset('landing/img/brand/brand-1.png')}}" alt="brand">
									</div>
								</div>
								<div class="swiper-slide single-slide">
									<div class="brand-wrap">
										<img src="{{asset('landing/img/brand/brand-2.png')}}" alt="brand">
									</div>
								</div>
								<div class="swiper-slide single-slide">
									<div class="brand-wrap">
										<img src="{{asset('landing/img/brand/brand-3.png')}}" alt="brand">
									</div>
								</div>
								<div class="swiper-slide single-slide">
									<div class="brand-wrap">
										<img src="{{asset('landing/img/brand/brand-4.png')}}" alt="brand">
									</div>
								</div>
								<div class="swiper-slide single-slide">
									<div class="brand-wrap">
										<img src="{{asset('landing/img/brand/brand-5.png')}}" alt="brand">
									</div>
								</div>
								<div class="swiper-slide single-slide">
									<div class="brand-wrap">
										<img src="{{asset('landing/img/brand/brand-6.png')}}" alt="brand">
									</div>
								</div>
								<div class="swiper-slide single-slide">
									<div class="brand-wrap">
										<img src="{{asset('landing/img/brand/brand-1.png')}}" alt="brand">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- brand-area end -->

	<!-- about-area-2 start -->
	<section class="about-area-3 pt-130 pb-130">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-10 text-center text-xl-right text-lg-right pt-xl-60 pt-lg-60">
					<div class="about-thumb mb-30">
						<img src="{{asset('landing/img/thumb/thumb-6.jpg')}}" alt="about">
					</div>
					<div class="about-thumb">
						<img src="{{asset('landing/img/thumb/thumb-7.jpg')}}" alt="about">
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="about-content-3 pt-35">
						<div class="thumb-text">
							<img src="{{asset('landing/img/thumb/thumb-8.jpg')}}" alt="thumb">
							<a href="#" class="read-more">About us</a>
						</div>
						<div class="about-text mt-50">
							<div class="section-title-3">
								<h3 class="bars">
									Welcome To <span>PAZEBALL</span>
									Professional Fitness
									And GYM Center
								</h3>
							</div>
							<p>
								Master-builder of human happiness. No one rejects dislikes or avoids pleasure itself
								because it is plsure but because those who do not know how to pursue pleasure rationally
								encounter conseque
							</p>
							<a href="#" class="btn btn-gra mt-35">
								LEARN MORE <i class="fas fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about-shape">
			<img src="{{asset('landing/img/shape/shape-15.png')}}" alt="shape">
		</div>
	</section>
	<!-- about-area-2 end -->

	<!-- video-area start -->
	<div class="video-area bg-off-white pt-130">
		<div class="container">
			<div class="row mb-80">
				<div class="col-xl-6 col-lg-6">
					<div class="section-title-3 video-title">
						<h3 class="bars">
							<span>GYM</span> Is Very Important
							For Our Health, Let’s See
							Inside Of <span>GYM Center</span>
							We Are So Trusted
						</h3>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="video-text">
						<p>
							Avoids pleasure itself, because it is pleasure, but because those who do not know how to
							pursue pleasure rationally encounter consequences that are extremely painful. Nor again is
							there anyone who loves or pursues or desires to obtain pain of itself because it is pain.
							take a trivial example, which of us ever undertakes laborious physical exercise
						</p>
						<a href="#" class="read-more">
							learn more <i class="fas fa-angle-double-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="video-wrap mb--130">
						<img src="{{asset('landing/img/thumb/thumb-9.jpg')}}" alt="thumb">
						<div class="video-play">
							<a href="https://www.youtube.com/watch?v=ZIKt1-r3PL0" class="popup-video">
								<i class="fas fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="video-shape">
			<img class="rotateme" src="{{asset('landing/img/shape/shape-16.png')}}" alt="shape">
		</div>
	</div>
	<!-- video-area end -->

	<!-- service-area-2 start -->
	<div class="service-area-2 bg-fix pt-130 pb-100" data-background="{{asset('landing/img/bg/service-bg-2.jpg')}}">
		<div class="container">
			<div class="row justify-content-center mt-130">
				<div class="col-xl-12 col-lg-12">
					<div class="section-title-2 bar-theme-color text-white text-center mb-60">
						<h3>We Offer Exclusive Services For Build Health</h3>
						<span>Services</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="service-slider-3">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide single-slide">
									<div class="service-wrap-3">
										<div class="service-icon">
											<div class="icon">
												<i class="flaticon-gym-7"></i>
											</div>
											<div class="num">01</div>
										</div>
										<div class="service-content">
											<h3><a href="#">Dumbbelling</a></h3>
											<p>
												Avoids pleasure itself, because it is plea sure but because those who do
												not know how to
												pursue pleasure rationally
											</p>
											<a href="#" class="read-more">
												Read more <i class="fas fa-angle-double-right"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide single-slide">
									<div class="service-wrap-3">
										<div class="service-icon">
											<div class="icon">
												<i class="flaticon-gym-5"></i>
											</div>
											<div class="num">02</div>
										</div>
										<div class="service-content">
											<h3><a href="#">Cycling GYM</a></h3>
											<p>
												Avoids pleasure itself, because it is plea sure but because those who do
												not know how to
												pursue pleasure rationally
											</p>
											<a href="#" class="read-more">
												Read more <i class="fas fa-angle-double-right"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide single-slide">
									<div class="service-wrap-3">
										<div class="service-icon">
											<div class="icon">
												<i class="flaticon-workout-1"></i>
											</div>
											<div class="num">03</div>
										</div>
										<div class="service-content">
											<h3>
												<a href="#">Grid Training</a>
											</h3>
											<p>
												Avoids pleasure itself, because it is plea sure but because those who do
												not know how to
												pursue pleasure rationally
											</p>
											<a href="#" class="read-more">
												Read more <i class="fas fa-angle-double-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- If we need navigation buttons -->
						<div class="swiper-button-prev"><i class="far fa-angle-double-left"></i></div>
						<div class="swiper-button-next"><i class="far fa-angle-double-right"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- service-area-2 end -->



	<!-- team-area-2 start -->
	<div class="team-area-2 bg-off-white pt-130 pb-130">
		<div class="container">
			<div class="row align-items-center mb-60">
				<div class="col-xl-9">
					<div class="section-title-2 bar-theme-color team-title-2">
						<h3>We Have Expert Team Member Meet Our Trainer</h3>
						<span>Team</span>
					</div>
				</div>
				<div class="col-xl-3 col-xl-3 text-xl-right text-lg-right text-center">
					<a href="trainer.html" class="btn btn-gra">
						LEARN MORE <i class="fas fa-angle-double-right"></i>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-3 col-md-6">
					<div class="team-wrap-2 mb-30">
						<div class="team-img">
							<img src="{{asset('landing/img/team/team.jpg')}}" alt="Team">
						</div>
						<div class="team-content">
							<h3><a href="trainer-details.html">Howard C. Skinner</a></h3>
							<span>Dumbbell Trainer</span>
							<div class="team-social-link">
								<ul>
									<li>
										<a href="#"><i class="fab fa-facebook-f"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-instagram"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-google"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="team-wrap-2 mb-30">
						<div class="team-img">
							<img src="{{asset('landing/img/team/team-2.jpg')}}" alt="img">
						</div>
						<div class="team-content">
							<h3><a href="trainer-details.html">Raymond L. Brown</a></h3>
							<span>Boxing Trainer</span>
							<div class="team-social-link">
								<ul>
									<li>
										<a href="#"><i class="fab fa-facebook-f"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-instagram"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-google"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="team-wrap-2 mb-30">
						<div class="team-img">
							<img src="{{asset('landing/img/team/team-3.jpg')}}" alt="">
						</div>
						<div class="team-content">
							<h3><a href="trainer-details.html">Charles T. McAllister</a></h3>
							<span>Caradio Trainer</span>
							<div class="team-social-link">
								<ul>
									<li>
										<a href="#"><i class="fab fa-facebook-f"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-instagram"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-google"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="team-wrap-2 mb-30">
						<div class="team-img">
							<img src="{{asset('landing/img/team/team-4.jpg')}}" alt="">
						</div>
						<div class="team-content">
							<h3><a href="trainer-details.html">Solomon K. Sawyers</a></h3>
							<span>Beauty Trainer</span>
							<div class="team-social-link">
								<ul>
									<li>
										<a href="#"><i class="fab fa-facebook-f"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-instagram"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-google"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="team-shape-1">
			<img src="{{asset('landing/img/shape/shape-17.png')}}" alt="shape">
		</div>
		<div class="team-shape-2">
			<img src="{{asset('landing/img/shape/shape-18.png')}}" alt="shape">
		</div>
	</div>
	<!-- team-area-2 end -->

	<!-- schedule-area-2 start -->

	<!-- schedule-area-2 end -->

	<!-- calculator-area-3 start -->
	<div class="calculator-area-3 pt-130 pb-100">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-10 offset-xl-7 offset-lg-6 offset-md-1">
					<div class="calculator-chart">
						<h3>BMI Calculator Chart</h3>
						<p>
							We denounce with righteous indignation and dislike men who are so beguiled and demoralized
							by the charms of pleasure of the moment so blinded by desire, that they cannot foresee the
							pain and trouble
						</p>
						<table class="table">
							<thead>
							<tr>
								<th scope="col">BMI</th>
								<th scope="col">Weight Status</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>Below 18.5</td>
								<td>Underweight</td>
							</tr>
							<tr>
								<td>18.5 - 24.9</td>
								<td>Healthy</td>
							</tr>
							<tr>
								<td>25.0 - 29.9</td>
								<td>Overweight</td>
							</tr>
							<tr>
								<td>30.0 - and Above</td>
								<td>Obese</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="calculator-bg-1 bg-fix" data-background="{{asset('landing/img/bg/calculator-bg-3.jpg')}}"></div>
	</div>
	<!-- calculator-area-3 end -->
    <div class="blog-area-2 pt-130 pb-100">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-md-6">
					<div class="blog-area-title">
						<div class="section-title-3 bar-theme-color mb-35">
							<h3 class="bars">
								Something Know About Health Tips & Tricks
							</h3>
						</div>
						<p>
							Pleasure itself because ecs ways those who not know pleasure info rationally take trivial
							example which ever underti mista
						</p>
						<a href="blog.html" class="btn btn-gra">
							VIEW ALL NEWS <i class="fas fa-angle-double-right"></i>
						</a>
					</div>
				</div>
				<div class="col-xl-4 col-md-6">
					<div class="blog-wrap blog-white mb-30" data-background="{{asset('landing/img/blog/blog-1.jpg')}}">
						<div class="blog-author mb-40">
							<div class="author-thumb">
								<img src="{{asset('landing/img/author/author-3.jpg')}}" alt="Author">
							</div>
							<div class="author-content">
								<h4>Thomas Garman</h4>
								<span>Post By Admin</span>
							</div>
						</div>
						<div class="blog-meta">
							<span><i class="fas fa-calendar-alt"></i> 20 Jan 2020</span>
							<span><i class="far fa-comments"></i> Comments (1k)</span>
						</div>
						<div class="blog-content">
							<h3>
								<a href="#">
									The CSS Grid Challenge See Build A Template WeSomec Smashing Prizes!
								</a>
							</h3>

							<a href="#" class="read-more">
								Read more <i class="fas fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6">
					<div class="blog-wrap blog-white mb-30" data-background="{{asset('landing/img/blog/blog-1.jpg')}}">
						<div class="blog-author mb-40">
							<div class="author-thumb">
								<img src="{{asset('landing/img/author/author-3.jpg')}}" alt="Author">
							</div>
							<div class="author-content">
								<h4>Donald Jackson</h4>
								<span>Post By Admin</span>
							</div>
						</div>
						<div class="blog-meta">
							<span><i class="fas fa-calendar-alt"></i> 20 Jan 2020</span>
							<span><i class="far fa-comments"></i> Comments (1k)</span>
						</div>
						<div class="blog-content">
							<h3>
								<a href="#">
									We're Touring Through Was Southeast Asia: Join Thezilla Developer Roadshow!
								</a>
							</h3>

							<a href="#" class="read-more">
								Read more <i class="fas fa-angle-double-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- testimonial-area-2 start -->
	<div class="testimonial-area-2 pt-130 pb-130" data-background="{{asset('landing/img/bg/testimonial-bg-3.jpg')}}">
		<div class="container position-relative">
			<div class="row">
				<div class="col-xl-12">
					<div class="section-title-2 text-center bar-theme-color mb-35">
						<h3>
							What Our Clients Say About Our Services
						</h3>
						<span>Says</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="testimonial-slider-3 mb-80 mb-xs-0">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide single-slide">
									<div class="testimonial-wrap-3">
										<div class="author-info">
											<img src="{{asset('landing/img/icon/icon-4.png')}}" alt="author">
											<div class="author-content">
												<h4>John Dela Cruz</h4>
												<span>Pazepro</span>
											</div>
										</div>
										<div class="testimonial-content">
											<p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
optio, eaque rerum! Provident similique accusantium nemo autem
											</p>
											<ul>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star-half-alt"></i></li>
											</ul>
										</div>
									</div>
								</div>
								
								
							</div>
						</div>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>
						<!-- If we need navigation buttons -->
						<div class="swiper-button-prev"><i class="far fa-angle-double-left"></i></div>
						<div class="swiper-button-next"><i class="far fa-angle-double-right"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- testimonial-area-2 end -->

	<!-- blog-area start -->
	
	<!-- blog-area end -->

	<!-- product-area start -->
	
	<!-- product-area end -->
</main>
<!-- main end -->

<!-- footer-area start -->
<footer class="footer-area footer-area-3">
	<div class="footer-top">
		<div class="container">
			<div class="row pt-80 pb-40">
				<div class="col-xl-3 col-md-6">
					<div class="footer-widgets footer-about-widget">
						<div class="footer-logo">
							<a href="/">
								<img src="{{asset('logo.png')}}" alt="Logo">
							</a>
						</div>
						<p>
							Ratione voluptatem sequi nesc. Neque porro quisquam doe psu quia dolor amet conse
							ter-builder of human happiness rejects
						</p>
						<div class="social">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
							<a href="#"><i class="fab fa-google"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-xl-5 col-md-6">
					<div class="footer-widgets contact-widget">
						<h3 class="widget-title">Contact Us</h3>
						<p>
							Master-builder of human happi nes one rejects, dislikesor
						</p>
						<ul>
							<li>
								<i class="fas fa-home"></i>
								<span>No.123 Chalingt Gates,Supper market New York</span>
							</li>
							<li>
								<a href="#""">
									<i class="fas fa-envelope"></i>
									<span>support@gmail.com</span>
								</a>
							</li>
							<li>

								<a href="#">
									<i class="fas fa-phone"></i>
									<span>+012 (4567) 789</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="footer-widgets newsletters-widget">
						<h3 class="widget-title">Newsletters</h3>
						<p>
							Neque porro quisquam doe psu quia dolor amet consect
						</p>
						<form action="#">
							<div class="input-wrap">
								<input type="text" placeholder="Enter Your Email">
							</div>
							<button class="btn btn-gra">
								subscribe <i class="far fa-angle-double-right"></i>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6">
					<div class="copyright text-xl-left text-lg-left text-center mb-md-10 mb-xs-10">
						<p>Copyright <a href="/">PAZEBALL</a> ©2021. All Rights Reserved</p>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="footer-menu">
						<ul>
							<li><a href="#">Privacy</a></li>
							<li><a href="#">Terms Of Services</a></li>
							<li><a href="#">Accessibility</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer-area end -->

<div id="scrollUp"><i class="fas fa-level-up-alt"></i></div>
@stop