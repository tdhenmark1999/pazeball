@extends('frontend._layouts.main') @section('content')

<div class="theme-layout">
    <div class="postoverlay"></div>

    @include('frontend._components.header')

    <section>
        <div class="gap2 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            @include('frontend.profile.cover')
                            <!-- user profile banner  -->
                           
                        
	<section>
		<div class="gap2 gray-bg" style="padding-top:0px !important">
			<div class="container">
				<div class="row merged20" id="page-contents">
					
					<div class="col-lg-12">
                        
						<div class="central-meta">
                        <div class="employer-info">
							<h2>{{ $training->title }} <br><span class="p-2" style="font-size: 15px;border-radius: 5px">{{ $training->capacity }} Slot Available</span></h2>
			
						</div>
							<div class="job-detail">
								 <img style="width: auto;border-radius: 5px" alt="" src="{{asset('uploads/images/'.$training->file_name)}}">  
								<p class="mt-2">
								{{ $training->description }}
								</p>
								
								<h5>Details</h5>
								<ul>
									<li>
											<i class="fa fa-map-marker"></i>
										<span>Online via {{ $training->url_training }}</span>
									</li>
									<li class="d-flex flex-row ">
                                        <div>
                                            <i class="fa fa-calendar mt-1"></i>
                                            </div>
										<div>
                                            @forelse ($training->sessions as $item)
                                           
                                            <span>{{ date("M d, Y",strtotime($item->date)) }}, {{ date("h:i:sa", strtotime($item->time_start)) }} - {{ date("h:i:sa", strtotime($item->time_end)) }} </span>
                                            @empty
                                            <span>March, 31, 2020 , 08:00 am - 10:00pm</span>
											<span>March, 01, 2020 , 08:00 am - 10:00pm</span>
											<span>March, 30, 2020 , 08:00 am - 10:00pm</span>
                                            @endforelse
										
											
										</div>
									</li>
									<li>
										<i class="fa fa-sync"></i>
										<span>{{ count($training->sessions) }} Sessions</span>
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
                                                @if ($training->amount > auth()->user()->points)
                                                <span class="text-danger">Not Enough Coins!</span>
                                                @endif
                                                
                                                @if (count($is_engaged) > 0)
                                                <a   href="#" class="" style="background-color: #12478d" title=""><i class="fa fa-bookmark"></i>Engaged</a>
                                                @else
												<a onclick=" {{ $training->amount > auth()->user()->points ?  'return false' : 'onSubmit()' }}"  href="{{ route('frontend.engage.store',[$training->uuid,$training->sessions[0]->id,auth()->user()->uuid]) }}" class="" style="background-color: #fa6342" title=""><i class="fa fa-bookmark"></i>Engage For {{ $training->amount }} Coins</a>
                                                @endif
                                    
												<a href="{{route('frontend.pazepro.list_trainings')}}" class="bg-secondary" title=""><i class="fa fa-list"></i>Go to list </a>
											</div>

								</div>

							</div>
						</div>
						<div class="central-meta">
							<span class="create-post">{{ count($engagements) > 0  ? count($engagements) . " Peoples are already Engaged ": "No People Engaged"  }} </span>
							<div class="row">
                                @forelse ($engagements as $item)
                                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 mt-3"><a href="#" title=""> <img style="height:50px;width:auto;margin-right:10px;border-radius:50%" alt="author" src="{{asset('frontend/images/resources/author.jpg')}}" />{{  ucwords(Helper::get_user($item->user_id))  }}</a></div>
                                @empty
                                <h1>No Data</h1>
                                {{-- <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 mt-3"><a href="#" title=""> <img style="height:50px;width:auto;margin-right:10px;border-radius:50%" alt="author" src="{{asset('frontend/images/resources/author.jpg')}}" />Markwil Abiera</a></div>
                                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 mt-3"><a href="#" title=""> <img style="height:50px;width:auto;margin-right:10px;border-radius:50%" alt="author" src="{{asset('frontend/images/resources/author.jpg')}}" />Markwil Abiera</a></div>
                                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 mt-3"><a href="#" title=""> <img style="height:50px;width:auto;margin-right:10px;border-radius:50%" alt="author" src="{{asset('frontend/images/resources/author.jpg')}}" />Markwil Abiera</a></div>
                                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 mt-3"><a href="#" title=""> <img style="height:50px;width:auto;margin-right:10px;border-radius:50%" alt="author" src="{{asset('frontend/images/resources/author.jpg')}}" />Markwil Abiera</a></div>
                                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12 mt-3"><a href="#" title=""> <img style="height:50px;width:auto;margin-right:10px;border-radius:50%" alt="author" src="{{asset('frontend/images/resources/author.jpg')}}" />Markwil Abiera</a></div> --}}

                                @endforelse
								
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
            </div>
        </div>
    </section>
    <!-- content -->

   
    <!-- bottom bar -->
</div>
<div class="side-panel">
    <h4 class="panel-title">General Setting</h4>
    <form method="post">
        <div class="setting-row">
            <span>use night mode</span>
            <input type="checkbox" id="nightmode1" />
            <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Notifications</span>
            <input type="checkbox" id="switch22" />
            <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Notification sound</span>
            <input type="checkbox" id="switch33" />
            <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>My profile</span>
            <input type="checkbox" id="switch44" />
            <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Show profile</span>
            <input type="checkbox" id="switch55" />
            <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
        </div>
    </form>
    <h4 class="panel-title">Account Setting</h4>
    <form method="post">
        <div class="setting-row">
            <span>Sub users</span>
            <input type="checkbox" id="switch66" />
            <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>personal account</span>
            <input type="checkbox" id="switch77" />
            <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Business account</span>
            <input type="checkbox" id="switch88" />
            <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Show me online</span>
            <input type="checkbox" id="switch99" />
            <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Delete history</span>
            <input type="checkbox" id="switch101" />
            <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Expose author name</span>
            <input type="checkbox" id="switch111" />
            <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
        </div>
    </form>
</div>
<!-- side panel -->


<!-- send message popup -->

<div class="popup-wraper3">
    <div class="popup">
        <span class="popup-closed"><i class="ti-close"></i></span>
        <div class="popup-meta">
            <div class="popup-head">
                <h5>Report Post</h5>
            </div>
            <div class="Rpt-meta">
                <span>We're sorry something's wrong. How can we help?</span>
                <form method="post" class="c-form">
                    <div class="form-radio">
                        <div class="radio">
                            <label> <input type="radio" name="radio" checked="checked" /><i class="check-box"></i>It's spam or abuse </label>
                        </div>
                        <div class="radio">
                            <label> <input type="radio" name="radio" /><i class="check-box"></i>It breaks r/technology's rules </label>
                        </div>
                        <div class="radio">
                            <label> <input type="radio" name="radio" /><i class="check-box"></i>Not Related </label>
                        </div>
                        <div class="radio">
                            <label> <input type="radio" name="radio" /><i class="check-box"></i>Other issues </label>
                        </div>
                    </div>
                    <div>
                        <label>Write about Report</label>
                        <textarea placeholder="write someting about Post" rows="2"></textarea>
                    </div>
                    <div>
                        <button data-ripple="" type="submit" class="main-btn">Submit</button>
                        <a href="about.html#" data-ripple="" class="main-btn3 cancel">Close</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- report popup -->

@stop @section('page-styles')
<style type="text/css">
    .frnd-info > li span {
        width: 90px;
    }
</style>
@stop @section('page-scripts')
<script type="text/javascript">
    function onSubmit() {
        if (confirm("Are you sure you want to accept a book?")) {
            // Save it!
            console.log("Thing was saved to the database.");
            return true;
        } else {
            // Do nothing!
            console.log("Thing was not saved to the database.");
            return false;
        }
    }
</script>
@stop
