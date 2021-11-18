@extends('frontend._layouts.main')

@section('content')
    <section>
		<div class="gap2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center text-md-center text-lg-left">
					
						<div class="employer-info">
								<i><i class="fa fa-user mr-2"></i>Dhen Mark D. Torreno</i>
							<h2>Boxing with the Pe ople’s Champ - Manny Pacman <br><span class="p-2" style="font-size: 15px;border-radius: 5px">12 Slot Available</span></h2>
			
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
								<h3>{{ $training->description }}</h3>
								 <img style="width: auto;border-radius: 5px" alt="" src="{{asset('uploads/images/'. $training->file_name )}}">  
								<p class="mt-2">
									Training like a boxer is all about intensity—you go hard. “Yo u’re trying to mimic what it’s going to be like in the ring,” says Jason Strout, head coach at NYC’s renowned Church St. Boxing Gym. 
								</p>
								
								<h5>Details</h5>
								<ul>
									<li>
											<i class="fa fa-map-marker"></i>
										<span>Online via Microsoft Teams App</span>
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
										<span>{{ count($training->sessions) }} Session(s)</span>
									</li>
									<li>
										<i class="fa fa-users"></i>
										<span>{{ $training->capacity }} Pazer</span>
									</li>
								
								</ul>
						
								<div class="apply-bttons" style="margin-top: 0px !important">
										<div class="salary-area  text-center text-md-center text-lg-left">
												<h4>{{ $training->amount }} Coins</h4>
												<span>Earn 20 points</span>

												@if (count($is_engaged) > 0)
                                                <a   href="#" class="" style="background-color: #12478d" title=""><i class="fa fa-bookmark"></i>Engaged</a>
                                                @else
												<a onclick=" {{ $training->amount > auth()->user()->points ?  'return false' : 'onSubmit()' }}"  href="{{ route('frontend.engage.store',[$training->uuid,$training->sessions[0]->id,auth()->user()->uuid]) }}" class="" style="background-color: #fa6342" title=""><i class="fa fa-bookmark"></i>Engage For {{ $training->amount }} Coins</a>
                                                @endif
												{{-- <a onclick="onSubmit()" href="#" class="" style="background-color: #fa6342" title=""><i class="fa fa-bookmark"></i>Engage For 1,500.00 Coins</a> --}}
												<a href="{{route('frontend.training.index')}}" class="bg-secondary" title=""><i class="fa fa-list"></i>Go to list</a>
											</div>

								</div>

							</div>
						</div>
						<div class="central-meta">
							<span class="create-post">5 Peoples are already Engaged</span>
							<div class="row">
								<div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 mt-3"><a href="#" title=""> <img style="height:50px;width:auto;margin-right:10px;border-radius:50%" alt="author" src="{{asset('frontend/images/resources/author.jpg')}}" />Markwil Abiera</a></div>
                                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 mt-3"><a href="#" title=""> <img style="height:50px;width:auto;margin-right:10px;border-radius:50%" alt="author" src="{{asset('frontend/images/resources/author.jpg')}}" />Markwil Abiera</a></div>
                                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 mt-3"><a href="#" title=""> <img style="height:50px;width:auto;margin-right:10px;border-radius:50%" alt="author" src="{{asset('frontend/images/resources/author.jpg')}}" />Markwil Abiera</a></div>
                                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 mt-3"><a href="#" title=""> <img style="height:50px;width:auto;margin-right:10px;border-radius:50%" alt="author" src="{{asset('frontend/images/resources/author.jpg')}}" />Markwil Abiera</a></div>
                                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 mt-3"><a href="#" title=""> <img style="height:50px;width:auto;margin-right:10px;border-radius:50%" alt="author" src="{{asset('frontend/images/resources/author.jpg')}}" />Markwil Abiera</a></div>

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
function onSubmit() {
	if (confirm('Are you sure you want to proceed?')) {
  // Save it!
  console.log('Thing was saved to the database.');
	} else {
	  // Do nothing!
	  console.log('Thing was not saved to the database.');
	}

}
</script>
@stop