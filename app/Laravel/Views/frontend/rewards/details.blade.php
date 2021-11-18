@extends('frontend._layouts.main')

@section('content')
    <section>
		<div class="gap2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center text-md-center text-lg-left">
					
						<div class="employer-info">
								<i><i class="fa fa-user mr-2"></i>Admin</i>
							<h2>{{Str::ucfirst($reward->title)}} <br><span class="p-2" style="font-size: 15px;border-radius: 5px">{{$reward->quantity}} Slot Available</span></h2>
			
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
								<h3>Rewards Description</h3>
								<div class="row">
									<div class="col-md-8">
								 <img style="width: auto;border-radius: 5px;" alt="" src="{{asset('uploads/images/'.$reward->file_name)}}">  
								 </div>
								</div>
								 <p class="mt-2">
								{{Str::ucfirst($reward->description)}}
								</p>
								
								
							
						
								<div class="apply-bttons" style="margin-top: 0px !important">
										<div class="salary-area  text-center text-md-center text-lg-left">
												<h4>{{$reward->amount}} Points</h4>
												<span></span>
												<a onclick="onSubmit()" href="#" class="" style="background-color: #fa6342" title=""><i class="fa fa-bookmark"></i>Engage For {{$reward->amount}} Points</a>
												<a href="{{route('frontend.rewards.index')}}" class="bg-secondary" title=""><i class="fa fa-list"></i>Go to list</a>
											</div>

								</div>

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