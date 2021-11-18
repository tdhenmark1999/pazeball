@extends('frontend._layouts.main')

@section('content')
    
    <div class="postoverlay"></div>
    
    @include('frontend._components.header')
    <section>
		<div class="gap2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center text-md-center text-lg-left">
					
						<div class="employer-info" style="width: 100%">
								<i><i class="fa fa-user mr-2"></i>Dhen Mark D. Torreno</i>
							<h2>Boxing with the Pe ople’s Champ Manny Pacman - <span class="text-uppercase" style="font-size: 20px">BOXING</span></h2>
			
						</div>
			
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="gap2 gray-bg">
			<div class="container">
				<div class="row merged20" id="page-contents">
					
					<div class="col-lg-12">
						<div class="central-meta">
							<div class="job-detail">
								<h3>{{ $training->title }}</h3>
								 <img style="width: auto;border-radius: 5px" alt="" src="{{asset('uploads/images/'.$training->file_name)}}">  
								<p class="mt-2">
									{{ $training->description }}
								</p>
								
								<h5>Details</h5>
								<ul>
									<li>
									<i class="fa fa-map-marker"></i>
										<span>Online via Microsoft Teams App <a href="{{ $training->url_training }}" style="color: blue">{{$training->url_training}}</a></span>
									</li>
									<li class="d-flex flex-row ">
										<div>
										<i class="fa fa-calendar mt-1"></i>
										</div>
										<div>
											@foreach ($training->sessions as $session)
											<span>{{ date('M d, Y',strtotime($session->date)) }},{{ $session->time_start." - ".$session->time_end  }} </span>
											@endforeach
											
										</div>
									</li>
									<li>
										<i class="fa fa-sync"></i>
										<span>{{ count($training->sessions) }}  Session(s)</span>
									</li>
									{{-- <li>
										<i class="fa fa-users"></i>
										<span>20 Pazer</span>
									</li> --}}
								
								</ul>
						
								<div class="apply-bttons" style="margin-top: 0px !important">
										<div class="salary-area  text-center text-md-center text-lg-left">
												<h4>{{ $training->amount }}Coins</h4>
												<span>Earn 20 points</span>
												
												<a href="{{route('frontend.my_training.index')}}" class="bg-secondary" title=""><i class="fa fa-list"></i>Go Back</a>
											</div>

								</div>

							</div>
						</div>
						<div class="central-meta">
							<span class="create-post">5 Peoples are already Engaged</span>
							<div class="row">
								@foreach ($training->sessions as $session)
								@foreach ($session->engagements as $member)
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
													<h4 class="oswald-600">{{  Helper::get_user($member->user_id) }}<img style="height: 35px;width: auto" src="{{asset('premium-big.png')}}" alt=""></h4>
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
					@endforeach
					@endforeach
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
@stop

@section('page-styles')
<style type="text/css">

</style>
@stop

@section('page-scripts')
<script type="text/javascript">
function attendance() {
	if (confirm('Are you sure you want to confirm his/her attendance?')) {
  // Save it!
  console.log('Thing was saved to the database.');
	} else {
	  // Do nothing!
	  console.log('Thing was not saved to the database.');
	}

}
</script>
@stop