@extends('frontend._layouts.main') @section('content') @include('frontend._components.header')
<section>
    <div class="page-header">
        <div class="header-inner">
            <h2>Booking list</h2>
            <p>
                Welcome to Pitnik Social Network. Here you’ll find all the typography, content sources, & ready made elemets as you want. you can use to show on your custom pages.
            </p>
        </div>
        <figure><img src="{{asset('frontend/images/resources/baner-badges.png')}}" alt="" /></figure>
    </div>
</section>
<!-- sub header -->

<section>
    <div class="gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                                <div class="boost-box bg-primary--gray-dark">
                                    <a href="{{route('frontend.booking.group')}}" title="">
                                        <i class="fa fa-users"></i>
                                        <span class="text-white">Group Training</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="boost-box ">
                                    <a href="{{route('frontend.booking.individual')}}" title="">
                                        <i class="fa fa-user"></i>
                                        <span>Individual Training</span>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
                
                <section class="col-md-12">
		<div class="">
			<div class="">
				<div class="row merged20" id="page-contents">
					
					<div class="col-lg-12">
						<div class="central-meta">
							<div class="job-detail">
								<h3>Training Description</h3>
								 <img style="width: auto;border-radius: 5px" alt="" src="{{asset('frontend/images/resources/blogpost-1.jpg')}}">  
								<p class="mt-2">
									Training like a boxer is all about intensity—you go hard. “Yo u’re trying to mimic what it’s going to be like in the ring,” says Jason Strout, head coach at NYC’s renowned Church St. Boxing Gym. 
								</p>
								
								<h5>Details</h5>
								<ul>
									<li>
											<i class="fa fa-map-marker"></i>
										<span>Online via Microsoft Teams App <a href="#" style="color: blue">Click the Link</a></span>
									</li>
									<li class="d-flex flex-row ">
										<div>
										<i class="fa fa-calendar mt-1"></i>
										</div>
										<div>
											<span>March, 30, 2020 , 08:00 am - 10:00pm</span>
											<span>March, 31, 2020 , 08:00 am - 10:00pm</span>
											<span>March, 01, 2020 , 08:00 am - 10:00pm</span>
											<span>March, 30, 2020 , 08:00 am - 10:00pm</span>
										</div>
									</li>
									<li>
										<i class="fa fa-sync"></i>
										<span>4 Sessions</span>
									</li>
									<li>
										<i class="fa fa-users"></i>
										<span>20 Pazer</span>
									</li>
								
								</ul>
						
								<div class="apply-bttons" style="margin-top: 0px !important">
										<div class="salary-area  text-center text-md-center text-lg-left">
												<h4>1,500.00 <img style="height: 25px;margin-top: -5px" src="{{asset('frontend/images/points.png')}}"></h4>
												<span>Earn 20 points</span>
												
												<a href="{{route('frontend.booking.group')}}" class="bg-secondary" title=""><i class="fa fa-list"></i>Go Back</a>
											</div>

								</div>

							</div>
						</div>
						<div class="central-meta">
							<span class="create-post">5 Peoples are already Engaged</span>
							<div class="row">
								 <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="central-meta item" >
                                    <div class="classic-post">
                                        <div class="row">
                                            <div class="col-lg-3 text-center">
                                                <figure>
                                                 <img style="width: 100%;height: auto;border-radius: 50%" src="{{asset('frontend/images/resources/thumb-2.jpg')}}" alt="">
                                                <span style="margin-top: 10px;font-weight: bold">PAZER</span>
                                                </figure>
                                            </div>
                                            <div class="col-lg-9">
                                                <h4 class="oswald-600">JOHN CENA, 22 <img style="height: 35px;width: auto" src="{{asset('premium-big.png')}}" alt=""></h4>
                                                <span class="roboto-400"><i class="fa fa-map-marker"></i> Pembo, Makati City </span><br>
                                                 <span><i class="fa fa-clock"></i> Jan,12 2020 @3:00PM</span>
                                                <p  class="roboto-400"><span title="02-18-2021">Present: 2</span>, <span title="02-19-2021">Absent: 1 </span></p>
                                                <div>   
                                                   <a onclick="attendance()" class="main-btn bg-success">Confirm Attendance</a>

                                                </div>
                                            </div>
                                            
                                        </div>
                                         
                                           
                                        </div>
                                    </div><!-- shop product post -->
                              
                        
                    </div>

							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
            
              
            </div>
        </div>
    </div>
</section>
<!-- price plans -->
{ @stop @section('page-styles')
<style type="text/css">
    .classic-pst-meta {
        max-width: 90% !important;
    }
    .boost-box > a {
        border-radius: 0px;
        box-shadow: 0 1px 7px rgb(0 0 0 / 10%) !important;
    }
</style>
@stop @section('page-scripts')
<script type="text/javascript">
    function onApprove() {
        if (confirm("Are you sure you want to accept a book?")) {
            // Save it!
            console.log("Thing was saved to the database.");
        } else {
            // Do nothing!
            console.log("Thing was not saved to the database.");
        }
    }
    function onDeclined() {
        if (confirm("Are you sure you want to declined?")) {
            // Save it!
            console.log("Thing was saved to the database.");
        } else {
            // Do nothing!
            console.log("Thing was not saved to the database.");
        }
    }
    function goBack() {
        window.history.back();
    }
    function onlineType() {
        if (confirm("Are you sure you want to accept a book?")) {
            // Save it!
            let link = prompt("Please enter the zoom or google meet link:", "");
        } else {
            // Do nothing!
            console.log("Thing was not saved to the database.");
        }
    }
</script>
@stop
